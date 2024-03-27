<?php

namespace App\Http\Controllers;

use App\Models\Ilce;
use App\Http\Requests\StoreIlceRequest;
use App\Http\Requests\UpdateIlceRequest;

class IlceController extends Controller
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
     * @param  \App\Http\Requests\StoreIlceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIlceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ilce  $ilce
     * @return \Illuminate\Http\Response
     */
    public function show(Ilce $ilce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ilce  $ilce
     * @return \Illuminate\Http\Response
     */
    public function edit(Ilce $ilce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIlceRequest  $request
     * @param  \App\Models\Ilce  $ilce
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIlceRequest $request, Ilce $ilce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ilce  $ilce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ilce $ilce)
    {
        //
    }
}
