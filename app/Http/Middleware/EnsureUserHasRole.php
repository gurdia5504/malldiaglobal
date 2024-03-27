<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        $roles = explode('|', $role);
        if (! in_array($request->user()->role, $roles)) {
            if (request()->routeIs('api.*')) {
                return response()->json([
                    'status' => [
                        'code' => Response::HTTP_UNAUTHORIZED,
                        'message' => __('İlgili sayfa veya işlem için yeterli yetkiye sahip değilsiniz!'),
                    ],
                ], Response::HTTP_UNAUTHORIZED);
            }

            return redirect()->route('panel.dashboard')->with([
                'status' => [
                    'code' => Response::HTTP_UNAUTHORIZED,
                    'message' => __('İlgili sayfa veya işlem için yeterli yetkiye sahip değilsiniz!'),
                ],
            ]);
        }

        return $next($request);
    }
}
