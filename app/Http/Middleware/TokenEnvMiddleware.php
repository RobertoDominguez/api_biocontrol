<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TokenEnvMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {        
        if ($request->header('token') !== env('TOKEN_API')) {
            return redirect(route('unauthenticated'));
        }

        return $next($request);
    }
}

// php artisan config:clear