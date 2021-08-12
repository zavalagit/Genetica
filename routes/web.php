<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcomes');
});

Route::get('home','GeneticaController@home');
Route::get('inicio','GeneticaController@inicio');
Route::get('muestras/{buscar?}','GeneticaController@todas');
Route::get('kit/{buscar?}','GeneticaController@kit');