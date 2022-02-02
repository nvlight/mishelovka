<?php

namespace App\Http\Controllers\Boys;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;

class BoysController extends Controller
{
    CONST BODY_BGC = "#deeaff";

    public static function boysLineJistyfyContentByIndex(int $index)
    {
        $style = "";

        switch ($index){
            case 1: $style = 'right'; break;
            case 2: $style = 'center'; break;
            case 3: $style = 'left'; break;
        }

        return $style;
    }

    public function index()
    {
        $boysCats = Catalog::where('type','1')
            ->get();

        return view('boys.index', ['body_bgc' => self::BODY_BGC, 'cats' => $boysCats]);
    }
}
