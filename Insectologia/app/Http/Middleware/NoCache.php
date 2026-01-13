<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NoCache
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        
        // Headers más agresivos
        return $response->header('Cache-Control', 'no-cache, no-store, must-revalidate, pre-check=0, post-check=0, max-age=0')
                        ->header('Pragma', 'no-cache')
                        ->header('Expires', 'Mon, 01 Jan 1990 00:00:00 GMT')
                        ->header('Last-Modified', gmdate('D, d M Y H:i:s') . ' GMT');
    }
}