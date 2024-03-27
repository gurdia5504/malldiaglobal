<?php

declare(strict_types=1);

namespace App\Repositories\V1;

use App\Exceptions\ServerErrorException;
use App\Http\Resources\WalletResource;
use App\Http\Requests\WalletRequest;
use Illuminate\Http\JsonResponse;
use App\Traits\Repository;
use App\Models\WalletCostsheet as Wallet;

class WalletRepository extends BaseRepository
{
    use Repository;

    /**
     * @var string
     */
    private $exMssg = 'cüzdan';

    public function index(): JsonResponse
    {
        $wallets = Wallet::all();

        if (isset($wallets)) {
            $message = __('Cüzdan bilgileri başarıyla listelendi.');
            $data = [
                'wallets' => WalletResource::collection($wallets->sortByDesc('created_at')),
            ];

            return self::success($message, $data);
        }

        return self::notFound(__($this->exMssg));
    }

    public function store(WalletRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();
            $newWallet = Wallet::create($data);

            if (isset($newWallet)) {
                $message = __('Cüzdan bilgisi başarıyla kaydedildi.');
                $data = [
                    'wallet' => new WalletResource($newWallet->refresh()),
                ];

                return self::created($message, $data);
            }

        } catch (ServerErrorException $e) {
            return self::serverError($this->exMssg, $e);
        }

        return self::serverError(__($this->exMssg));
    }

    public function show(string $id): JsonResponse
    {
        $wallet = Wallet::find($id);

        if (isset($wallet)) {
            $message = __('Cüzdan bilgisi başarıyla listelendi.');
            $data = [
                'wallet' => new WalletResource($wallet),
            ];

            return self::success($message, $data);
        }

        return self::notFound($this->exMssg, true);
    }

    public function update(WalletRequest $request, string $id): JsonResponse
    {
        try {
            $wallet = Wallet::find($id);
            if (isset($wallet)) {
                $data = $request->validated();
                $wallet->update($data);

                $message = __('Cüzdan bilgisi başarıyla güncellendi.');
                $data = [
                    'wallet' => new WalletResource($wallet),
                ];

                return self::success($message, $data);
            } else {
                return self::notFound($this->exMssg, true);
            }
        } catch (ServerErrorException $e) {
            return self::serverError($this->exMssg, $e);
        }
    }

    public function destroy(string $id): JsonResponse
    {
        $wallet = Wallet::find($id);

        if (isset($wallet)) {
            $wallet->delete();
            $message = __('Cüzdan bilgisi başarıyla silindi.');

            return self::success($message);
        }

        return self::notFound($this->exMssg, true);
    }
}
