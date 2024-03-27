<?php

declare(strict_types=1);

namespace App\Traits;

use App\Exceptions\UnprocessableEntityException;
use App\Exceptions\ServiceUnavailableException;
use App\Exceptions\UnauthorizedException;
use App\Exceptions\ServerErrorException;
use App\Exceptions\NotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

trait Repository
{
    /**
     * @var bool
     */
    protected static $json = false;

    protected static function checkJsonFlag(): bool
    {
        if (request()->routeIs('api.*') || str_contains(request()->route()->uri, 'api')) {
            self::$json = true;
        }

        return self::$json;
    }

    public static function success(string $message, array $data = [], string $type = 'success'): JsonResponse
    {
        return response()->json([
            'status' => [
                'code' => Response::HTTP_OK,
                'type' => $type,
                'message' => $message,
            ],
            'data' => $data,
        ], Response::HTTP_OK);
    }

    public static function failed(string $message): JsonResponse
    {
        return response()->json([
            'status' => [
                'code' => Response::HTTP_PRECONDITION_FAILED,
                'type' => 'fail',
                'message' => $message,
            ],
        ], Response::HTTP_PRECONDITION_FAILED);
    }

    public static function created(string $message, array $data = []): JsonResponse
    {
        return response()->json([
            'status' => [
                'code' => Response::HTTP_CREATED,
                'type' => 'created',
                'message' => $message,
            ],
            'data' => $data,
        ], Response::HTTP_CREATED);
    }

    public static function notFound(string $message, bool $single = false): JsonResponse
    {
        if ($single) {
            $message = $message !== null ? $message.' '.__('bulunamadı!') : __('Kayıt bulunamadı!');
        } else {
            if ($message !== null) {
                $message = __('Herhangi bir :msg bulunamadı!', ['msg' => $message]);
            } else {
                $message = __('Herhangi bir kayıt bulunamadı!');
            }
        }

        if (self::checkJsonFlag()) {
            throw new NotFoundException($message);
        }

        return response()->json([
            'status' => [
                'code' => Response::HTTP_NOT_FOUND,
                'type' => 'not_found',
                'message' => $message,
            ],
        ], Response::HTTP_NOT_FOUND);
    }

    /**
     * @param  \Exception|null  $exception
     */
    public static function serverError(string $message, $exception = null): JsonResponse
    {
        if ($message !== null) {
            $message = __(':msg ile ilgili işlem yapılırken beklenmedik bir hata oluştu!', ['msg' => $message]);
        } else {
            $message = __('İşlem yapılırken beklenmedik bir hata oluştu!');
        }

        if (self::checkJsonFlag()) {
            throw new ServerErrorException($message, $exception);
        }

        return response()->json([
            'status' => [
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'type' => 'server_error',
                'message' => $message,
            ],
        ], Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    public static function serviceUnavailable(string $message): JsonResponse
    {
        if ($message === null) {
            $message = __('Hizmet şu anda kullanılamıyor, lütfen daha sonra tekrar deneyiniz!');
        }

        if (self::checkJsonFlag()) {
            throw new ServiceUnavailableException($message);
        }

        return response()->json([
            'status' => [
                'code' => Response::HTTP_SERVICE_UNAVAILABLE,
                'type' => 'service_unavailable',
                'message' => $message,
            ],
        ], Response::HTTP_SERVICE_UNAVAILABLE);
    }

    public static function unprocessableEntity(string $message, array $data = []): JsonResponse
    {
        if ($message === null) {
            $message = __('İstek işlenemedi!');
        }

        if (self::checkJsonFlag()) {
            throw new UnprocessableEntityException($message, $data);
        }

        return response()->json([
            'status' => [
                'code' => Response::HTTP_UNPROCESSABLE_ENTITY,
                'type' => 'unprocessable_entity',
                'message' => $message,
            ],
            'data' => $data,
        ], Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    public static function unauthorized(string $message): JsonResponse
    {
        if ($message === null) {
            $message = __('Yetkisiz işlem!');
        }

        if (self::checkJsonFlag()) {
            throw new UnauthorizedException($message);
        }

        return response()->json([
            'status' => [
                'code' => Response::HTTP_UNAUTHORIZED,
                'type' => 'unauthorized',
                'message' => $message,
            ],
        ], Response::HTTP_UNAUTHORIZED);
    }

    public static function badRequest(string $message, ?array $error): JsonResponse
    {
        if ($message === null) {
            $message = __('İstek işlenemedi!');
        }

        if (self::checkJsonFlag()) {
            throw new UnprocessableEntityException($message);
        }

        return response()->json([
            'status' => [
                'code' => Response::HTTP_BAD_REQUEST,
                'type' => 'bad_request',
                'message' => $message,
            ],
            'error' => $error,
        ], Response::HTTP_BAD_REQUEST);
    }
}
