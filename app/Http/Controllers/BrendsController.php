<?php

namespace App\Http\Controllers;

use App\Models\Brends;
use App\Http\Requests\StoreBrendsRequest;
use App\Http\Requests\UpdateBrendsRequest;

class BrendsController extends Controller
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
     * @param  \App\Http\Requests\StoreBrendsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrendsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brends  $brends
     * @return \Illuminate\Http\Response
     */
    public function show(Brends $brends)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brends  $brends
     * @return \Illuminate\Http\Response
     */
    public function edit(Brends $brends)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBrendsRequest  $request
     * @param  \App\Models\Brends  $brends
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrendsRequest $request, Brends $brends)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brends  $brends
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brends $brends)
    {
        //
    }
}
