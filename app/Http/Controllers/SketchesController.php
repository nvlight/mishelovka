<?php

namespace App\Http\Controllers;

use App\Models\Sketches;
use App\Http\Requests\StoreSketchesRequest;
use App\Http\Requests\UpdateSketchesRequest;

class SketchesController extends Controller
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
     * @param  \App\Http\Requests\StoreSketchesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSketchesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sketches  $sketches
     * @return \Illuminate\Http\Response
     */
    public function show(Sketches $sketches)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sketches  $sketches
     * @return \Illuminate\Http\Response
     */
    public function edit(Sketches $sketches)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSketchesRequest  $request
     * @param  \App\Models\Sketches  $sketches
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSketchesRequest $request, Sketches $sketches)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sketches  $sketches
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sketches $sketches)
    {
        //
    }
}
