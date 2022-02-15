<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrendsController;
use App\Http\Controllers\Catalog\SecondLevelShow;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.mishelovka_main');
});

Route::get('/mishelovka', function () {
    return view('layouts.mishelovka_second');
})->name('mishelovka');

Route::group([
        'prefix' => 'boys', // prefix for url
        'as' => 'boys.',    // prefix for names
        //'namespace' => 'Boys',
        //'middleware' => ['auth'],
], function(){
    //Route::get('/', 'App\Http\Controllers\Boys\BoysController@index')->name('index');
    Route::get('/', [\App\Http\Controllers\Boys\BoysController::class, 'index'] )->name('index');

});

Route::group([
    'prefix' => 'girls', // prefix for url
    'as' => 'girls.',    // prefix for names
    //'namespace' => 'App\Http\Controllers\Girls',
    //'middleware' => ['auth'],
], function(){
    //Route::get('/', 'App\Http\Controllers\Girls\GirlsController@index')->name('index');
    Route::get('/', [\App\Http\Controllers\Girls\GirlsController::class, 'index'] )->name('index');

});

Route::resource('catalog', 'App\Http\Controllers\Catalog\CatalogController'); // ->middleware('verified')
Route::group([
    'prefix' => 'catalog_show',
    'as' => 'catalog_show.'
], function (){
    Route::get('/test', [SecondLevelShow::class, 'test'])->name('test');
    Route::get('/{id}', [SecondLevelShow::class, 'show'])->name('show');

});

Route::resource('brend', 'App\Http\Controllers\BrendsController'); // ->middleware('verified')
Route::delete('brend_delete/{brend}', [BrendsController::class, 'destroyAjax'])->name('brend.destroy_ajax');
Route::post('brend_create', [BrendsController::class, 'storeAjax'])->name('brend.store_ajax');