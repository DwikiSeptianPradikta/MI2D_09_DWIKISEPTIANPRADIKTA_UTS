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

Route::get('/Beranda', function () {
    return view('Beranda');
});
Route::get('/Tentang', function () {
    return view('Tentang');
});
Route::get('/Travel', [App\Http\Controllers\TravelController::class, 'index']);

Route::get('/Form', function () {
    return view('form');
});
Route::get('/Maps', function () {
    return view('Maps');
});