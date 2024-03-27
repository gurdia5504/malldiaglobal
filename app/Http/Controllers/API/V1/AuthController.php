<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Repositories\V1\AuthRepository;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    public function __construct(protected AuthRepository $authRepository)
    {
    }

    /**
     * @unauthenticated
     */
    public function loginStore(LoginRequest $request): JsonResponse
    {
        return $this->authRepository->loginStore($request);
    }

    /**
     * @authenticated
     */
    public function registerStore(RegisterRequest $request): JsonResponse
    {
        return $this->authRepository->registerStore($request);
    }

    public function logout(string $id): JsonResponse
    {
        return $this->authRepository->logout($id);
    }
}
