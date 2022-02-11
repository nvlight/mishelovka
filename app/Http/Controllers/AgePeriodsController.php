<?php

namespace App\Http\Controllers;

use App\Models\AgePeriods;
use App\Http\Requests\StoreAgePeriodsRequest;
use App\Http\Requests\UpdateAgePeriodsRequest;

class AgePeriodsController extends Controller
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
     * @param  \App\Http\Requests\StoreAgePeriodsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAgePeriodsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AgePeriods  $agePeriods
     * @return \Illuminate\Http\Response
     */
    public function show(AgePeriods $agePeriods)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AgePeriods  $agePeriods
     * @return \Illuminate\Http\Response
     */
    public function edit(AgePeriods $agePeriods)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAgePeriodsRequest  $request
     * @param  \App\Models\AgePeriods  $agePeriods
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAgePeriodsRequest $request, AgePeriods $agePeriods)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AgePeriods  $agePeriods
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgePeriods $agePeriods)
    {
        //
    }
}
