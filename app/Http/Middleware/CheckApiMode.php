<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckApiMode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $status): Response
    {
        $statusMsg = [
            'code' => Response::HTTP_FORBIDDEN,
            'message' => __('Bu sayfaya erişim kalıcı veya geçici olarak engellenmiştir. Lütfen daha sonra tekrar deneyiniz.'),
        ];

        if (! $status) {
            if (app()->isProduction()) {
                return response()->json(['status' => $statusMsg], Response::HTTP_FORBIDDEN);
            } else {
                return redirect()->route('panel.error-page')->with(['status' => $statusMsg]);
            }
        }

        return $next($request);
    }
}
