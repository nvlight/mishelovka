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
        $cats = Catalog::where('id', '>', 0);
        $catsIds = $cats->get();
        //dd($catsIds);

        $cats = $catsIds;
        return view('catalog.index', ['cats' => $cats, 'catsIds' => $catsIds]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $attributes = [];
        $attributes += ['type' => $request->post('type')];
        $attributes += ['caption' => $request->post('caption')];
        $attributes += ['color' => $request->post('color')];
        $attributes += ['parent_id' => $request->post('parent_id') ?? 0];
        $attributes += ['size' => $request->post('size') ?? 0];
        $attributes += ['price' => $request->post('price') ?? 0];

//        dump($request->post('parent_id') ?? 0 );
//        dump($attributes);
//        dump($request->all()); die;

        // img
        if ($file = $request->file('img')){
            $filename = self::SAVE_DIR_PREFIX . Str::random(40) . "." . $file->extension();
            $attributes += ['img' => $filename];
            $attributes += ['img_filename' => $file->getClientOriginalName() ];
        }

        try{
            //dump($file->getClientOriginalName());
            $catalog = Catalog::create($attributes);
            //dd($catalog);

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
            dd($qe);
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
        //dump($catalog);
        //dump($request->all());

        $catalog->type    = $request->post('type');
        $catalog->caption = $request->post('caption');
        $catalog->color   = $request->post('color');
        $catalog->size   = $request->post('size');
        $catalog->price   = $request->post('price');
        $img_filename     = $request->post('img_filename');

        // img_filename
        if ($catalog->img_filename && $img_filename ){
            $catalog->img_filename = $img_filename;
        }

        // img
        if ($file = $request->file('img')){
            try{
                // сначала удалим старую фотографию, если есть :smirk
                if ($catalog->img){
                    $this->deleteFile($catalog->img, 'public');
                }

                // теперь
                $filename = self::SAVE_DIR_PREFIX . Str::random(40) . "." . $file->extension();
                $catalog->img = $filename;
                $catalog->img_filename = $file->getClientOriginalName();

                $file->storeAs($filename, '', ['disk' => 'public']);
            } catch (FileException $fe){
                //$this->saveToLog($fe);
                return back()
                    ->with('crud_message',['message' => 'Ошибка при сохранеии файла!', 'class' => 'alert alert-danger']);
            }
        }

        try {
            $catalog->save();
            session()->flash('crud_message',['message' => 'Запись и картинка сохранены!', 'class' => 'alert alert-success']);
            session()->flash('catalogImageUploaded', 'Файл загружен на сервер!');
        }
        catch (QueryException $qe){
            //$this->saveToLog($qe);
            return back()
                ->with('crud_message',['message' => 'Ошибка при обновлении!', 'class' => 'alert alert-danger']);
        }

        return back();
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
