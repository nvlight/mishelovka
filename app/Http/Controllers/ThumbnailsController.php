<?php

namespace App\Http\Controllers;

use App\Models\Thumbnails;
use App\Http\Requests\StoreThumbnailsRequest;
use App\Http\Requests\UpdateThumbnailsRequest;

class ThumbnailsController extends Controller
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
     * @param  \App\Http\Requests\StoreThumbnailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreThumbnailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thumbnails  $thumbnails
     * @return \Illuminate\Http\Response
     */
    public function show(Thumbnails $thumbnails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thumbnails  $thumbnails
     * @return \Illuminate\Http\Response
     */
    public function edit(Thumbnails $thumbnails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateThumbnailsRequest  $request
     * @param  \App\Models\Thumbnails  $thumbnails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateThumbnailsRequest $request, Thumbnails $thumbnails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thumbnails  $thumbnails
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thumbnails $thumbnails)
    {
        //
    }
}
