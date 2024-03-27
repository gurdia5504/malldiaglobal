<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ServiceUnavailableException extends Exception
{
    protected $code = Response::HTTP_SERVICE_UNAVAILABLE;

    public function __construct($message = null)
    {
        parent::__construct($message, $this->code);
    }

    public function render($request): JsonResponse
    {
        return response()->json([
            'status' => [
                'code' => $this->code,
                'message' => $this->getMessage(),
            ],
        ], $this->code);
    }
}
