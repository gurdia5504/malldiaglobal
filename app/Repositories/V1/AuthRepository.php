<?php

declare(strict_types=1);

namespace App\Repositories\V1;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\AuthResource;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Enums\StatusEnum;
use App\Models\User;

class AuthRepository extends BaseRepository
{
    public function loginStore(LoginRequest $request): JsonResponse
    {
        $user = User::where('email', $request->email)->where('status', StatusEnum::ACTIVE)->first();

        if ($user && Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'status' => [
                    'code' => Response::HTTP_OK,
                    'message' => __('Giriş işlemi başarıyla gerçekleştirildi.'),
                ],
                'data' => new AuthResource(Auth::user()),
            ], Response::HTTP_OK);
        }

        return response()->json([
            'status' => [
                'code' => Response::HTTP_UNPROCESSABLE_ENTITY,
                'message' => __('Giriş bilgileriniz hatalıdır, lütfen e-posta ve şifrenizi kontrol ediniz!'),
            ],
        ], Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    public function registerStore(RegisterRequest $request): JsonResponse
    {
        $user = User::create(array_merge($request->validated(), [
            'email' => strtolower($request->email),
            'password' => bcrypt($request->password),
        ]));

        return response()->json([
            'status' => [
                'code' => Response::HTTP_OK,
                'message' => __('Kayıt işlemi başarıyla gerçekleştirildi. Giriş yapabilirsiniz.'),
            ],
            'data' => [
                'user' => new UserResource($user->fresh()),
            ],
            // 'redirect' => route('auth.login.index'),
        ], Response::HTTP_OK);
    }

    public function logout(string $id): JsonResponse
    {
        $user = User::where('id', $id)->first();
        if (! $user) {
            return response()->json([
                'status' => [
                    'code' => Response::HTTP_NOT_FOUND,
                    'message' => __('Kullanıcı bulunamadı!'),
                ],
            ], Response::HTTP_NOT_FOUND);
        }
        if (! $user->tokens->count()) {
            return response()->json([
                'status' => [
                    'code' => Response::HTTP_NOT_FOUND,
                    'message' => __('Kullanıcıya ait aktif bir oturum bulunamadı!'),
                ],
            ], Response::HTTP_NOT_FOUND);
        }
        Auth::logout();
        $user->tokens()->delete();

        return response()->json([
            'status' => [
                'code' => Response::HTTP_OK,
                'message' => __('Çıkış işlemi başarıyla gerçekleştirildi.'),
            ],
        ], Response::HTTP_OK);
    }
}
