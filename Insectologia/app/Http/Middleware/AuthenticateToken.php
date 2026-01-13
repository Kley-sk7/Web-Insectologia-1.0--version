<?php
// app/Http/Middleware/AuthenticateToken.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthenticateToken
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->header('Authorization') ?? $request->query('token');
        
        if (!$token) {
            return redirect('/');
        }

        $token = str_replace('Bearer ', '', $token);

        $session = DB::table('sesiones_usuario')
            ->where('token_sesion', $token)
            ->where('activa', true)
            ->where('updated_at', '>', now()->subHours(2))
            ->first();

        if (!$session) {
            return redirect('/');
        }

        // Actualizar última actividad
        DB::table('sesiones_usuario')
            ->where('id', $session->id)
            ->update(['updated_at' => now()]);

        // Compartir datos del usuario con las vistas
        $user = DB::table('usuarios')->where('id', $session->usuario_id)->first();
        view()->share('current_user', $user);

        return $next($request);
    }
}