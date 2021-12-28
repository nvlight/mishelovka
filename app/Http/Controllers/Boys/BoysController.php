<?php

namespace App\Http\Controllers\Boys;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BoysController extends Controller
{
    public function index()
    {

        return view('boys.index');
    }
}
