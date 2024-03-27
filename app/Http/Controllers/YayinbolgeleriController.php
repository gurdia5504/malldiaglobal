<?php

namespace App\Http\Controllers;

use App\Models\Yayinbolgeleri;
use App\Http\Requests\StoreYayinbolgeleriRequest;
use App\Http\Requests\UpdateYayinbolgeleriRequest;

class YayinbolgeleriController extends Controller
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
     * @param  \App\Http\Requests\StoreYayinbolgeleriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreYayinbolgeleriRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Yayinbolgeleri  $yayinbolgeleri
     * @return \Illuminate\Http\Response
     */
    public function show(Yayinbolgeleri $yayinbolgeleri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Yayinbolgeleri  $yayinbolgeleri
     * @return \Illuminate\Http\Response
     */
    public function edit(Yayinbolgeleri $yayinbolgeleri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateYayinbolgeleriRequest  $request
     * @param  \App\Models\Yayinbolgeleri  $yayinbolgeleri
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateYayinbolgeleriRequest $request, Yayinbolgeleri $yayinbolgeleri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Yayinbolgeleri  $yayinbolgeleri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Yayinbolgeleri $yayinbolgeleri)
    {
        //
    }
}
