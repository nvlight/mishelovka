<?php

namespace App\Http\Controllers\Girls;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GirlsController extends Controller
{
    public function index()
    {
        return view('girls.index');
    }
}
