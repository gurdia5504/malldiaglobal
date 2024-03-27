<?php

namespace App\Http\Controllers;

use App\Models\SeliciKotalar;
use App\Http\Requests\StoreSeliciKotalarRequest;
use App\Http\Requests\UpdateSeliciKotalarRequest;

class SeliciKotalarController extends Controller
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
     * @param  \App\Http\Requests\StoreSeliciKotalarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSeliciKotalarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SeliciKotalar  $seliciKotalar
     * @return \Illuminate\Http\Response
     */
    public function show(SeliciKotalar $seliciKotalar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SeliciKotalar  $seliciKotalar
     * @return \Illuminate\Http\Response
     */
    public function edit(SeliciKotalar $seliciKotalar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSeliciKotalarRequest  $request
     * @param  \App\Models\SeliciKotalar  $seliciKotalar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSeliciKotalarRequest $request, SeliciKotalar $seliciKotalar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SeliciKotalar  $seliciKotalar
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeliciKotalar $seliciKotalar)
    {
        //
    }
}
