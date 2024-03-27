<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class BadRequestException extends Exception
{
    protected $code = Response::HTTP_BAD_REQUEST;

    public function __construct($message = null, $exception = null)
    {
        if ($message !== null) {
            $message = __(':msg ile ilgili istemci tarafında bir hata oluştu, sunucu isteği yerine getiremedi!', ['msg' => $message]);
        } else {
            $message = __('İstemci tarafında bir hata oluştu, sunucu isteği yerine getiremedi!');
        }
        parent::__construct($message, $this->code);
        $this->exception = $exception;
    }

    public function render($request): JsonResponse
    {
        $errorDetails = null;
        if (config('app.debug')) {
            $errorDetails = [
                'message' => $this->exception->getMessage(),
                'file' => $this->exception->getFile(),
                'line' => $this->exception->getLine(),
            ];
        }

        return response()->json([
            'status' => [
                'code' => $this->code,
                'message' => $this->message,
            ],
            'error' => $errorDetails,
        ], $this->code);
    }
}
