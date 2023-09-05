<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Server
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (!$request->headers->has('Secret')) {
            return response()->json([
                'success' => false,
                'message' => 'Secret is missing',
            ], 401);
        }

        return $next($request);
    }
}
