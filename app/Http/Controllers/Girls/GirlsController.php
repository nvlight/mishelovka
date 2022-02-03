<?php

namespace App\Http\Controllers\Girls;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalog;

class GirlsController extends Controller
{
    CONST BODY_BGC = "#fcddf9";

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
        $girlsCats = Catalog::where('type','2')
            ->where('parent_id', 0)
            ->get();

        return view('girls.index', ['body_bgc' => self::BODY_BGC, 'cats' => $girlsCats]);
    }
}
