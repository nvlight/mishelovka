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
        $attributes = $request->validated();

        try{
            $brend = Brends::create($attributes);
            //session()->flash('crud_message',['message' => 'EventoTag created!', 'class' => 'alert alert-success']);
        }catch (\Exception $e){
            //$this->saveToLog($e);
            return back()
                ->with('store', ['message' => $e->getMessage(), 'class' => 'alert alert-danger', 'success' => 0] );
        }

        return back()
            ->with('store', ['message' => 'Brend created!', 'class' => 'alert alert-success', 'success' => 1]);
    }

    public function show(Brends $brend)
    {
        $columnsNames = $this->getTableColumns();

        return view('brend.show', ['columnsNames' => $columnsNames, 'brend' => $brend] );
    }

    public function edit(Brends $brend)
    {
        return view('brend.edit_modal', ['brend' => $brend]);
    }

    public function update(UpdateBrendsRequest $request, Brends $brend)
    {
        $attributes = $request->validated();
        //return $brend;

        try{
            $brend->update($attributes);
            //$brend->title = $attributes->post('title');
            //$brend->save();
        }catch (\Exception $e){
            return back()
                ->with('update', ['message' => $e->getMessage(), 'class' => 'alert alert-danger', 'success' => 0] );
        }

        return back()
            ->with('update', ['message' => 'Brend updated!', 'class' => 'alert alert-success', 'success' => 1]);
    }

    public function destroy(Brends $brend)
    {
        $deletedId = $brend->id;
        try{
            $brend->delete();
        }catch (\Exception $e){
            return back()
                ->with('delete', ['message' => $e->getMessage(), 'class' => 'alert alert-danger', 'success' => 0] );
        }

        return back()
            ->with('delete', ['message' => "Brend with id: {$deletedId} deleted!", 'class' => 'alert alert-danger',
                'success' => 1]);
    }
}
