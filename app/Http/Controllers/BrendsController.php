<?php

namespace App\Http\Controllers;

use App\Models\Brends;
use App\Http\Requests\StoreBrendsRequest;
use App\Http\Requests\UpdateBrendsRequest;

class BrendsController extends Controller
{
    protected function getTableColumns($tableName = 'brends')
    {
        // Through DB Facade
        $columns = \DB::getSchemaBuilder()->getColumnListing($tableName);
        // or
        // $columns = \DB::connection()->getSchemaBuilder()->getColumnListing($tableName);

        return $columns;
    }

    public function index()
    {
        if ( !($brends = Brends::all()) ){
            abort(404);
        }
        $columnsNames = $this->getTableColumns();

        return view('brend.index', ['brends' => $brends, 'columnsNames' => $columnsNames]);
    }

    public function create()
    {
        //
    }

    public function store(StoreBrendsRequest $request)
    {
        //
    }

    public function show(Brends $brend)
    {
        $columnsNames = $this->getTableColumns();

        return view('brend.show', ['columnsNames' => $columnsNames, 'brend' => $brend] );
    }

    public function edit(Brends $brend)
    {
        //
    }

    public function update(UpdateBrendsRequest $request, Brends $brend)
    {
        //
    }

    public function destroy(Brends $brend)
    {
        return $brend;
    }
}
