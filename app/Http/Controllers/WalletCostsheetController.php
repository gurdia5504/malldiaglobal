<?php

namespace App\Http\Controllers;

use App\Models\WalletCostsheet;
use App\Http\Requests\StoreWalletCostsheetRequest;
use App\Http\Requests\UpdateWalletCostsheetRequest;

class WalletCostsheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreWalletCostsheetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWalletCostsheetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WalletCostsheet  $walletCostsheet
     * @return \Illuminate\Http\Response
     */
    public function show(WalletCostsheet $walletCostsheet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WalletCostsheet  $walletCostsheet
     * @return \Illuminate\Http\Response
     */
    public function edit(WalletCostsheet $walletCostsheet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWalletCostsheetRequest  $request
     * @param  \App\Models\WalletCostsheet  $walletCostsheet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWalletCostsheetRequest $request, WalletCostsheet $walletCostsheet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WalletCostsheet  $walletCostsheet
     * @return \Illuminate\Http\Response
     */
    public function destroy(WalletCostsheet $walletCostsheet)
    {
        //
    }
}
