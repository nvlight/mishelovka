<?php

namespace App\Http\Controllers;

use App\Models\Brends;
use App\Http\Requests\StoreBrendsRequest;
use App\Http\Requests\UpdateBrendsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

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
        if ( !($brends = Brends::where('id', '>', 0)->orderBy('id', 'DESC') ->get() )){
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

    public function destroyAjax(Brends $brend)
    {
        // todo - ???????? ?????????? ?????????????????????? 404 ?? ???????????????? ???????????? ?????? ????????
        try{
            $brend->delete();
            $result['success'] = 1;
            $result['deleteId'] = $brend->id;
            $result['message'] = 'Brend is deleted!';
        }catch (\Exception $e){
            $result['success'] = 0;
            $result['message'] = $e->getMessage();
        }

        return response()->json($result);
    }

    public function storeAjax(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:2|max:111',
        ]);

        if ($validator->fails()){
            $rs = ['success' => 0, 'message' => '???????????? ??????????????????!', 'errors' => $validator->errors()->toArray(),
                'data' => $request->all()
            ];
            return response()->json($rs);
        }

        try{
            $brend = Brends::create($request->all());
            $result['success'] = 1;
            $result['createdId'] = $brend->id;
            $result['message'] = 'Brend is created!';

            $trHtml = View::make('brend.parts.tr', compact('brend'))->render();
            $result['trHtml'] = $trHtml;
        }catch (\Exception $e){
            $result['success'] = 0;
            $result['message'] = $e->getMessage();
        }

        return response()->json($result);
    }

    public function getAjax(Brends $brend)
    {
        $columnsNames = $this->getTableColumns();

        $deleteButtonHtml = View::make('brend.buttons.delete', ['route' => route('brend.destroy', $brend), 'id' => $brend->id]
        )->render();
        $showButtonHtml   = View::make('brend.buttons.show', ['route' => route('brend.show', $brend), 'id' => $brend->id]
        )->render();
        $editButtonHtml   = View::make('brend.buttons.edit', ['route' => route('brend.edit', $brend), 'id' => $brend->id]
        )->render();

        $result['success'] = 1;
        $result['columnsNames'] = $columnsNames;
        $result['brend'] = $brend;
        $result['deleteButtonHtml'] = $deleteButtonHtml;
        $result['showButtonHtml']   = $showButtonHtml;
        $result['editButtonHtml']   = $editButtonHtml;

        return response()->json($result);
    }

    public function updateAjax(Brends $brend)
    {
        //return response()->json(['success' => 1]);

        $validator = Validator::make(\request()->all(), [
            'title' => 'required|string|min:2|max:111',
        ]);

        if ($validator->fails()){
            $rs = ['success' => 0, 'message' => '???????????? ??????????????????!', 'errors' => $validator->errors()->toArray(),
                'data' => \request()->all()
            ];
            return response()->json($rs);
        }

        try{
            $brend->title = \request()->post('title');
            $brend->save();

            $result['success'] = 1;
            $result['updatedId'] = $brend->id;
            $result['message'] = 'Brend is updated!';

            $trHtml = View::make('brend.parts.tr', compact('brend'))->render();
            $result['trHtml'] = $trHtml;
        }catch (\Exception $e){
            $result['success'] = 0;
            $result['message'] = $e->getMessage();
        }

        return response()->json($result);
    }

    // todo - ???? up && down ?????????????? 1 ??????????????, ?????????? ???????????????????? ???????????????????? js ?? ?????????????? ???? 2-?? ???????? ??????????????
    public function upAjax(Brends $brend)
    {
        $result = (new Brends())->brendUp($brend->id);

        return response()->json($result);
    }

    public function downAjax(Brends $brend)
    {
        $result = (new Brends())->brendDown($brend->id);

        return response()->json($result);
    }
}
