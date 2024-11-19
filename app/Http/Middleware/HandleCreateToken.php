<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HandleCreateToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user()) {
            // Pastikan user memiliki metode createToken
            if (!method_exists($request->user(), 'createToken')) {
                abort(403, 'Admin model does not support API tokens.');
            }
        }

        return $next($request);
    }
}
