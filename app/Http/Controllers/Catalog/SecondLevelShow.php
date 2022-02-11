<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;

class SecondLevelShow extends Controller
{
    protected $boysColors  = ['#deeaff', '#2b339c'];
    protected $girlsColors = ['#fcddf9', '#9c2a70'];

    public function show($id)
    {
        //return $id;

        $parentQr = Catalog::where('id', $id)->get();

        $parentCat = 'undefined';
        $parentCatRuss = 'не опознано';
        $colors = [];
        if ($parentQr->count()){
            $parent = $parentQr->first();
            $parentCat = $parent->type == 1 ? 'boys' : 'girls';
            $parentCatRuss = $parent->type == 1 ? 'Мальчики' : 'Девочки';
            $parentCatRuss = $parentCatRuss . " " . $parent->caption;
            $colors = $parent->type == 1 ? $this->boysColors : $this->girlsColors;
        }
        //dd($parentCat);

        $childs = Catalog::where('parent_id', $id)->get();
        //dump($childs);

        return view('catalog.show_catalog.index', ['id' => $id, 'parentUrl' => $parentCat,
            'parentCatRuss' => $parentCatRuss, 'colors' => $colors, 'childs' => $childs
        ]);
    }

    // test LightGallery html5 video + images!
    public function test()
    {
        return view('catalog.show_catalog.test');
    }
}
