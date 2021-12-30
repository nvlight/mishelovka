<?php

namespace App\Http\Controllers\Boys;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;

class BoysController extends Controller
{
    CONST BODY_BGC = "#deeaff";

    public function index()
    {
        $boysCats = Catalog::where('type','1')
            ->get();

        return view('boys.index', ['body_bgc' => self::BODY_BGC, 'boysCats' => $boysCats]);
    }
}
