<?php

namespace App\Http\Controllers\Girls;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GirlsController extends Controller
{
    CONST BODY_BGC = "#fcddf9";

    public function index()
    {
        return view('girls.index', ['body_bgc' => self::BODY_BGC]);
    }
}
