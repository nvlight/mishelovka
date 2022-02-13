<?php

namespace App\Http\Controllers;

use App\Models\Garments;
use App\Http\Requests\StoreGarmentsRequest;
use App\Http\Requests\UpdateGarmentsRequest;

class GarmentsController extends Controller
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
     * @param  \App\Http\Requests\StoreGarmentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGarmentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Garments  $garments
     * @return \Illuminate\Http\Response
     */
    public function show(Garments $garments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Garments  $garments
     * @return \Illuminate\Http\Response
     */
    public function edit(Garments $garments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGarmentsRequest  $request
     * @param  \App\Models\Garments  $garments
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGarmentsRequest $request, Garments $garments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Garments  $garments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Garments $garments)
    {
        //
    }
}
