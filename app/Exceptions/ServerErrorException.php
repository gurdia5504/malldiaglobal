<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ServerErrorException extends Exception
{
    protected $code = Response::HTTP_INTERNAL_SERVER_ERROR;

    public function __construct($message = null, $exception = null)
    {
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
                'type' => 'server_error',
                'message' => $this->message,
            ],
            'error' => $errorDetails,
        ], $this->code);
    }
}
