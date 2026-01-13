<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            \Log::info('Login attempt', $request->all());
            
            $request->validate([
                'usuario' => 'required|string',
                'contrasena' => 'required|string'
            ]);

            $user = DB::table('usuarios')
                    ->where('usuario', $request->usuario)
                    ->where('activo', true)
                    ->first();

            if (!$user || !Hash::check($request->contrasena, $user->contrasena)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Usuario o contraseña incorrectos'
                ], 401);
            }

            $token = Str::random(60);
            
            // Usar los nombres correctos de columnas
            DB::table('sesiones_usuario')->insert([
                'usuario_id' => $user->id,
                'token_sesion' => $token,
                'ip_conexion' => $request->ip(),
                'fecha_inicio' => now(),
                'fecha_ultima_actividad' => now()
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Login exitoso',
                'token' => $token,
                'usuario' => [
                    'id' => $user->id,
                    'nombre' => $user->nombre_completo,
                    'usuario' => $user->usuario
                ]
            ]);

        } catch (\Exception $e) {
            \Log::error('Login error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error en el servidor: ' . $e->getMessage()
            ], 500);
        }
    }

    public function register(Request $request)
    {
        try {
            \Log::info('Register attempt', $request->all());
            
            $request->validate([
                'nombre' => 'required|string|max:255',
                'usuario' => 'required|string|unique:usuarios,usuario',
                'contrasena' => 'required|string|min:6'
            ]);

            $existingUser = DB::table('usuarios')
                            ->where('usuario', $request->usuario)
                            ->first();

            if ($existingUser) {
                return response()->json([
                    'success' => false,
                    'message' => 'El usuario ya existe'
                ], 422);
            }

            $userId = DB::table('usuarios')->insertGetId([
                'nombre_completo' => $request->nombre,
                'usuario' => $request->usuario,
                'contrasena' => Hash::make($request->contrasena),
                'fecha_registro' => now(),
                'activo' => true
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Usuario registrado exitosamente'
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error de validación',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            \Log::error('Register error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error en el servidor: ' . $e->getMessage()
            ], 500);
        }
    }

    public function verifyToken(Request $request)
    {
        $token = $request->header('Authorization');
        
        if (!$token) {
            return response()->json(['valid' => false], 401);
        }

        $token = str_replace('Bearer ', '', $token);

        $session = DB::table('sesiones_usuario')
            ->where('token_sesion', $token)
            ->where('activa', true)
            ->where('fecha_ultima_actividad', '>', now()->subHours(2))
            ->first();

        if ($session) {
            DB::table('sesiones_usuario')
                ->where('id', $session->id)
                ->update(['fecha_ultima_actividad' => now()]);
                
            return response()->json([
                'valid' => true,
                'usuario' => DB::table('usuarios')->where('id', $session->usuario_id)->first()
            ]);
        }

        return response()->json([
            'valid' => false
        ]);
    }

    public function logout(Request $request)
    {
        try {
            $token = $request->header('Authorization');
            if ($token) {
                DB::table('sesiones_usuario')
                    ->where('token_sesion', str_replace('Bearer ', '', $token))
                    ->update(['activa' => false]);
            }

            return response()->json([
                'success' => true,
                'message' => 'Sesión cerrada exitosamente'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al cerrar sesión'
            ], 500);
        }
    }
}