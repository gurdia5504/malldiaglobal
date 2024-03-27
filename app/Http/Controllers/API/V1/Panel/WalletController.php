<?php

namespace App\Http\Controllers\API\V1\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\WalletRequest;
use App\Repositories\V1\WalletRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function __construct(protected WalletRepository $walletRepository)
    {
    }

    public function index(): JsonResponse
    {
        return $this->walletRepository->index();
    }

    public function store(WalletRequest $request): JsonResponse
    {
        return $this->walletRepository->store($request);
    }

    public function show(string $id): JsonResponse
    {
        return $this->walletRepository->show($id);
    }

    public function update(WalletRequest $request, string $id): JsonResponse
    {
        return $this->walletRepository->update($request, $id);
    }

    public function destroy(string $id): JsonResponse
    {
        return $this->walletRepository->destroy($id);
    }
}
