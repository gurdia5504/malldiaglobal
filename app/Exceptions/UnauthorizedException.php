<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class UnauthorizedException extends Exception
{
    protected $code = Response::HTTP_UNAUTHORIZED;

    public function __construct($message = null)
    {
        if ($message === null) {
            $message = __('Erişim yetkiniz bulunmamaktadır, lütfen tekrar deneyiniz!');

            /* TODO: $settings = new \App\Http\Resources\SettingResource(\App\Models\Setting::all()->first());
            if ($settings->maintenance_mode === \App\Enums\StatusEnum::ACTIVE) {
                $message = __('Website şu an bakım modunda olduğu için giriş yapanıza izin verilmemektedir!');
            }*/
        }
        parent::__construct($message, $this->code);
    }

    public function render(): JsonResponse
    {
        return response()->json([
            'status' => [
                'code' => $this->code,
                'message' => $this->message,
            ],
        ], $this->code);
    }
}
