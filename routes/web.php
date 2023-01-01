<?php
use App\Http\Controllers\ClientController;
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
    return view('welcome');
});

Route::get('/labas', function () {
    return view('labas');
});
Route::get('/pagrindinis', function () {
    return view('pagrindinis');
});

// Route::get('/register', 'RegisterControler@index'); //jei norime kreiptis i controleri, mes rasome jo pavadinima be php

// Laravel 7<= 'RegisterController@index'
// Laravel 8> 'App\Http\Controllers\ClientController@create' //nereikia rasyt use virsuje
// arba [ClientController::class, 'index']


Route::get('/klientai/index',[ClientController::class, 'index']); //echo visi klientai
Route::get('/klientai/create', 'App\Http\Controllers\ClientController@create'); // echo kliento sukurimas
Route::get('/klientai/show', 'App\Http\Controllers\ClientController@show');
Route::get('/klientai/edit', 'App\Http\Controllers\ClientController@edit');
Route::get('/klientai/super', 'App\Http\Controllers\ClientController@manoMetodas');
Route::get('/klientai/sudek', 'App\Http\Controllers\ClientController@sudek');


