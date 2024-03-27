<?php

namespace App\Http\Controllers;

use App\Models\SellerQuotes;
use App\Http\Requests\StoreSellerQuotesRequest;
use App\Http\Requests\UpdateSellerQuotesRequest;

class SellerQuotesController extends Controller
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
     * @param  \App\Http\Requests\StoreSellerQuotesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSellerQuotesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SellerQuotes  $sellerQuotes
     * @return \Illuminate\Http\Response
     */
    public function show(SellerQuotes $sellerQuotes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SellerQuotes  $sellerQuotes
     * @return \Illuminate\Http\Response
     */
    public function edit(SellerQuotes $sellerQuotes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSellerQuotesRequest  $request
     * @param  \App\Models\SellerQuotes  $sellerQuotes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSellerQuotesRequest $request, SellerQuotes $sellerQuotes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SellerQuotes  $sellerQuotes
     * @return \Illuminate\Http\Response
     */
    public function destroy(SellerQuotes $sellerQuotes)
    {
        //
    }
}
