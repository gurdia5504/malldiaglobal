<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthCheckControl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            if (request()->routeIs('api.*') || str_contains(request()->route()->uri, 'api')) {
                return redirect()->route('api.v1.panel.dashboard');
            } else {
                return redirect()->route('panel.dashboard');
            }
        }

        return $next($request);
    }
}
