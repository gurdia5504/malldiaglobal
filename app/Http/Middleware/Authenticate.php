<?php

namespace App\Http\Middleware;

use App\Exceptions\UnauthorizedException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class Authenticate extends Middleware
{
    /**
     * Handle an unauthenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    protected function unauthenticated($request, array $guards)
    {
        throw new AuthenticationException(
            __('Bu işlemi yapabilmek için giriş yapmalısınız!'), $guards, $this->redirectTo($request)
        );
    }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request): JsonResponse
    {
        if (! $request->expectsJson()) {
            throw new UnauthorizedException();
        }

        return response()->json([
            'message' => __('Bu işlemi yapabilmek için giriş yapmalısınız!'),
        ], Response::HTTP_UNAUTHORIZED);
    }
}
