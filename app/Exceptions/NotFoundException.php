<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class NotFoundException extends Exception
{
    protected $code = Response::HTTP_NOT_FOUND;

    public function __construct($message = null)
    {
        parent::__construct($message, $this->code);
    }

    public function render($request): JsonResponse
    {
        return response()->json([
            'status' => [
                'code' => $this->code,
                'type' => 'not_found',
                'message' => $this->getMessage(),
            ],
        ], $this->code);
    }
}
