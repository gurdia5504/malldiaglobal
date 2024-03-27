<?php

namespace App\Http\Controllers\API;

use App\Http\{
    Controllers\Controller,
};
use App\Http\Controllers\API\BaseController;
use App\Models\Wallet_Sales_Cost_Statement;
use App\Http\Requests\StoreWallet_Sales_Cost_StatementRequest;
use App\Http\Requests\UpdateWallet_Sales_Cost_StatementRequest;
use App\Models\WalletCostsheet;

class WalletSalesCostStatementController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AllWalletSalleCosts()
    {

        $walletCosts =WalletCostsheet::all();
        return $this->getResponse($walletCosts, "All wallets costs");
    }

    public function individual()
    {

        $walletCosts = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('registration_type', 'INDIVIDUAL')
            ->paginate(5);

        return $this->getResponse($walletCosts, "All wallets costs");
       // return view('back.walletSellerMoneyTransferLists.index', compact('walletCosts'));
    }


    public function corporate()
    {

        $walletCosts = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('registration_type', 'CORPORATE')
            ->paginate(5);

        return $this->getResponse($walletCosts, "All wallets costs");
        // view('back.walletSellerMoneyTransferLists.index', compact('walletCosts'));
    }

    public function actifUser()
    {


        $walletCosts = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('status', '1')
            ->paginate(5);

        return $this->getResponse($walletCosts, "All wallets costs");
       // return view('back.walletSellerMoneyTransferLists.index', compact('walletCosts'));
    }


    public function passifUser()
    {

        $walletCosts = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('status', '0')
            ->paginate(5);

        return $this->getResponse($walletCosts, "All wallets costs");
       // return view('back.walletSellerMoneyTransferLists.index', compact('walletCosts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWallet_Sales_Cost_StatementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWallet_Sales_Cost_StatementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wallet_Sales_Cost_Statement  $wallet_Sales_Cost_Statement
     * @return \Illuminate\Http\Response
     */
    public function show(Wallet_Sales_Cost_Statement $wallet_Sales_Cost_Statement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wallet_Sales_Cost_Statement  $wallet_Sales_Cost_Statement
     * @return \Illuminate\Http\Response
     */
    public function edit(Wallet_Sales_Cost_Statement $wallet_Sales_Cost_Statement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWallet_Sales_Cost_StatementRequest  $request
     * @param  \App\Models\Wallet_Sales_Cost_Statement  $wallet_Sales_Cost_Statement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWallet_Sales_Cost_StatementRequest $request, Wallet_Sales_Cost_Statement $wallet_Sales_Cost_Statement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wallet_Sales_Cost_Statement  $wallet_Sales_Cost_Statement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wallet_Sales_Cost_Statement $wallet_Sales_Cost_Statement)
    {
        //
    }
}