<?php

namespace App\Http\Controllers\Boys;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BoysController extends Controller
{
    CONST BODY_BGC = "#deeaff";

    public function index()
    {
        return view('boys.index', ['body_bgc' => self::BODY_BGC]);
    }
}
