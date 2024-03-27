<?php

namespace App\Http\Controllers;

use App\Models\Dovizler;
use App\Http\Requests\StoreDovizlerRequest;
use App\Http\Requests\UpdateDovizlerRequest;

class DovizlerController extends Controller
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
     * @param  \App\Http\Requests\StoreDovizlerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDovizlerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dovizler  $dovizler
     * @return \Illuminate\Http\Response
     */
    public function show(Dovizler $dovizler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dovizler  $dovizler
     * @return \Illuminate\Http\Response
     */
    public function edit(Dovizler $dovizler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDovizlerRequest  $request
     * @param  \App\Models\Dovizler  $dovizler
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDovizlerRequest $request, Dovizler $dovizler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dovizler  $dovizler
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dovizler $dovizler)
    {
        //
    }
}
