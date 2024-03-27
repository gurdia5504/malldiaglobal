<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class AuthResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $tokenCreated = $this->createToken('authToken', ['*']);

        return [
            'user' => [
                'id' => $this->id,
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'email' => $this->email,
                'status' => $this->status,
                'created_at' => $this->created_at,
            ],
            'token' => [
                'type' => 'Bearer',
                'expires_at' => Carbon::parse($tokenCreated->token->expires_at)->format('d.m.Y H:i'),
                'access_key' => $tokenCreated->accessToken,
            ],
        ];
    }
}
