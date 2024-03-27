<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

trait CustomHandler
{
    /**
     * @var bool
     */
    protected static $json = false;

    /**
     * @var string|null
     */
    protected static $message = null;

    /**
     * @var array|null
     */
    protected static $errorDetails = null;

    /**
     * @param  \Throwable  $e
     */
    protected static function debugDetails($e): ?array
    {
        if ($e !== null) {
            if (config('app.debug')) {
                self::$errorDetails = [
                    'message' => $e->getMessage(),
                    'file' => $e->getFile(),
                    'line' => $e->getLine(),
                ];
            }
        } else {
            self::$errorDetails = null;
        }

        return self::$errorDetails;
    }

    protected static function checkJsonFlag(): bool
    {
        if (request()->routeIs('api.*') || str_contains(request()->route()->uri, 'api')) {
            self::$json = true;
        }

        return self::$json;
    }

    /**
     * @param  \Illuminate\Http\Request  $req
     * @param  \Throwable  $e
     */
    public static function unauthenticatedException($req, $e): JsonResponse|Response
    {
        self::$message = __('Yetkisiz erişim!');

        if (self::checkJsonFlag()) {
            return response()->json([
                'status' => [
                    'code' => Response::HTTP_UNAUTHORIZED,
                    'message' => self::$message,
                    'url' => $req->fullUrl(),
                ],
                'error' => self::debugDetails($e),
            ], Response::HTTP_UNAUTHORIZED);
        }

        return response()->view('panel.error-page', [
            'status' => [
                'code' => Response::HTTP_UNAUTHORIZED,
                'title' => __('Erişişm Engellendi!'),
                'message' => self::$message,
            ],
            'error' => self::debugDetails($e),
        ], Response::HTTP_UNAUTHORIZED);
    }

    /**
     * @param  \Illuminate\Http\Request  $req
     * @param  \Throwable  $e
     */
    public static function notFoundException($req, $e, string $type = 'model'): JsonResponse|Response
    {
        self::$message = match ($type) {
            'route' => __('Belirtilen URL rotasına erişilemiyor!'),
            'model' => __('Belirtilen kaynak bulunamadı!'),
            default => __('Aradığınız sayfa bulunamadı!'),
        };

        if (self::checkJsonFlag()) {
            return response()->json([
                'status' => [
                    'code' => Response::HTTP_NOT_FOUND,
                    'message' => self::$message,
                    'url' => $req->fullUrl(),
                ],
                'error' => self::debugDetails($e),
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->view('panel.error-page', [
            'status' => [
                'code' => Response::HTTP_NOT_FOUND,
                'title' => __('Sayfa Bulunamadı!'),
                'message' => self::$message,
            ],
            'error' => self::debugDetails($e),
        ], Response::HTTP_NOT_FOUND);
    }

    /**
     * @param  \Illuminate\Http\Request  $req
     * @param  \Throwable  $e
     */
    public static function badRequestException($req, $e): JsonResponse|Response
    {
        self::$message = __('İstek geçersiz!');

        if (self::checkJsonFlag()) {
            return response()->json([
                'status' => [
                    'code' => Response::HTTP_BAD_REQUEST,
                    'message' => self::$message,
                    'url' => $req->fullUrl(),
                ],
                'error' => $e,
            ], Response::HTTP_BAD_REQUEST);
        }

        return response()->view('panel.error-page', [
            'status' => [
                'code' => Response::HTTP_BAD_REQUEST,
                'title' => __('Geçersiz İstek!'),
                'message' => self::$message,
            ],
            'error' => self::debugDetails($e),
        ], Response::HTTP_BAD_REQUEST);
    }

    /**
     * @param  \Illuminate\Http\Request  $req
     * @param  \Throwable  $e
     */
    public static function methodNotAllowedException($req, $e): JsonResponse|Response
    {
        self::$message = __('Belirtilen HTTP metodu bu rota için geçerli değil!');

        if (self::checkJsonFlag()) {
            return response()->json([
                'status' => [
                    'code' => Response::HTTP_METHOD_NOT_ALLOWED,
                    'message' => self::$message,
                    'url' => $req->fullUrl(),
                ],
                'error' => self::debugDetails($e),
            ], Response::HTTP_METHOD_NOT_ALLOWED);
        }

        return response()->view('panel.error-page', [
            'status' => [
                'code' => Response::HTTP_METHOD_NOT_ALLOWED,
                'title' => __('İzin Verilmeyen İstek!'),
                'message' => self::$message,
            ],
            'error' => self::debugDetails($e),
        ], Response::HTTP_METHOD_NOT_ALLOWED);
    }

    /**
     * @param  \Illuminate\Http\Request  $req
     * @param  \Throwable  $e
     */
    public static function tooManyRequestsException($req, $e): JsonResponse|Response
    {
        self::$message = __('Çok fazla istek gönderdiniz. 1 dakika da en fazla 60 istek gönderebilirsiniz!');

        if (self::checkJsonFlag()) {
            return response()->json([
                'status' => [
                    'code' => Response::HTTP_TOO_MANY_REQUESTS,
                    'message' => self::$message,
                    'url' => $req->fullUrl(),
                ],
                'error' => self::debugDetails($e),
            ], Response::HTTP_TOO_MANY_REQUESTS);
        }

        return response()->view('panel.error-page', [
            'status' => [
                'code' => Response::HTTP_TOO_MANY_REQUESTS,
                'title' => __('Çok Fazla İstek!'),
                'message' => self::$message,
            ],
            'error' => self::debugDetails($e),
        ], Response::HTTP_TOO_MANY_REQUESTS);
    }

    /**
     * @param  \Illuminate\Http\Request  $req
     * @param  \Throwable  $e
     */
    public static function queryException($req, $e, ?string $type = null): JsonResponse|Response
    {
        self::$message = match ($type) {
            'server' => __('Sunucu kaynaklı beklenmedik bir hata oluştu!'),
            'mail_transport' => __('E-posta gönderimi sırasında beklenmedik bir hata oluştu!'),
            'data_type' => __('Veri tipi hatalı. Lütfen girdiğiniz verileri kontrol ediniz!'),
            'db_query' => __('Veritabanı sorgusu sırasında beklenmedik bir hata oluştu!'),
            'db_relation' => __('Veritabanı ilişkisi bulunamadı!'),
            default => __('Beklenmedik bir hata oluştu!'),
        };

            return response()->json([
                'status' => [
                    'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
                    'message' => self::$message,
                    'url' => $req->fullUrl(),
                ],
                'error' => self::debugDetails($e),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
