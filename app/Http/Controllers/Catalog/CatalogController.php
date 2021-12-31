<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Illuminate\Database\QueryException;

class CatalogController extends Controller
{
    const SAVE_DIR_PREFIX = "catalogImages" . '/';

    public function index()
    {
        $cats = Catalog::all();

        return view('catalog.index', ['cats' => $cats]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //dump($request->all());

        $attributes = [];
        $attributes += ['type' => $request->post('type')];
        $attributes += ['caption' => $request->post('caption')];
        $attributes += ['color' => $request->post('color')];

        // img
        if ($file = $request->file('img')){
            $filename = self::SAVE_DIR_PREFIX . Str::random(40) . "." . $file->extension();
            $attributes += ['img' => $filename];

            $attributes += ['img_filename' => $file->getClientOriginalName() ];
        }

        try{
            //dump($file->getClientOriginalName());
            //dd($attributes);
            $catalog = Catalog::create($attributes);

            if ($file){
                try{
                    $file->storeAs($filename, '', ['disk' => 'public'] );
                } catch (FileException $fe){
                    // созданную запись нужно удалить, если файл не был сохранен
                    try{
                        $catalog->delete();
                    }catch (QueryException $qe){
                        return back()->with('crud_message',['message' => 'Delete error!', 'class' => 'alert alert-danger']);
                    }
                    //$this->saveToLog($fe);
                    return back()->with('crud_message',['message' => 'File save error!', 'class' => 'alert alert-danger']);
                }
            }
            session()->flash('crud_message',['message' => 'Запись и картинка сохранены!', 'class' => 'alert alert-success']);
        }catch (QueryException $qe){
            //$this->saveToLog($qe);
            return back()->with('crud_message',['message' => 'Create error!', 'class' => 'alert alert-danger']);
        }

        session()->flash('catalogImageUploaded', 'Файл загружен на сервер');

        return back();
    }

    public function show(Catalog $catalog)
    {
        //dump($catalog);

        return view('catalog.show', ['catalog' => $catalog]);
    }

    public function edit(Catalog $catalog)
    {
        //dump($catalog);

        return view('catalog.edit', ['catalog' => $catalog]);
    }

    public function update(Request $request, Catalog $catalog)
    {
        dump($catalog);
        dump($request->all());

    }

    public function destroy(Catalog $catalog)
    {
        try{
            $catalog->delete();
            if ($catalog->img){
                $this->deleteFile($catalog->img, 'public');
            }
        }catch(\Exception $e){
            //$this->saveToLog($e);
            return back()->with('crud_message',['message' => 'Ошибка! Каталог НЕ удален!', 'class' => 'alert alert-danger']);
        }

        return redirect()->route('catalog.index')
            ->with('crud_message',['message' => 'Каталог удален!', 'class' => 'alert alert-danger']);;
    }

    protected function deleteFile(string $filename, string $driver)
    {
        if (Storage::disk($driver)->exists($filename)){
            Storage::disk($driver)->delete($filename);
        }
    }

}
