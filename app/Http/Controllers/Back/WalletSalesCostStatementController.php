<?php

namespace App\Http\Controllers\Back;

use App\Http\{
    Controllers\Controller,
};
use App\Models\Wallet_Sales_Cost_Statement;
use App\Http\Requests\StoreWallet_Sales_Cost_StatementRequest;
use App\Http\Requests\UpdateWallet_Sales_Cost_StatementRequest;
use App\Models\WalletCostsheet;
use Illuminate\Http\Request;

class WalletSalesCostStatementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $walletCosts =WalletCostsheet::all();
        return view('back.walletSalesCostStatements.index' ,compact('walletCosts'));
    }

    public function filter(Request $request)
    {
        $walletCosts = WalletCostsheet::query();

        $country = $request->country;



        if ($country) {
            $walletCosts->where('country', 'LIKE', '%' . $country . '%');
        }




        $data = [

            'country' => $country,

            'walletOrderLists' => $walletCosts->latest()->simplePaginate(5),
        ];

        return view('back.walletSalesCostStatements.index', $data);
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