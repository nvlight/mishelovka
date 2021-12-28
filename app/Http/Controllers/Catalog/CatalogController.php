<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
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
        //
    }

    public function show(Catalog $catalog)
    {
        //
    }

    public function edit(Catalog $catalog)
    {
        //
    }

    public function update(Request $request, Catalog $catalog)
    {
        //
    }

    public function destroy(Catalog $catalog)
    {
        //
    }
}
