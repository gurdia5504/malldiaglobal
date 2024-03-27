<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class UnprocessableEntityException extends Exception
{
    protected $code = Response::HTTP_UNPROCESSABLE_ENTITY;

    public function __construct($message, $data = [])
    {
        parent::__construct($message, $this->code);
        $this->data = $data;
    }

    public function render($request): JsonResponse
    {
        return response()->json([
            'status' => [
                'code' => $this->code,
                'message' => $this->getMessage(),
            ],
            'data' => $this->data,
        ], $this->code);
    }
}
