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
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





#ruta de cotizaciones de productos cotizacion.index Dashboard
Route::get('', function () {
    return view('cotizacion.index');
});

#rutas de cotizacion.index
Route::get('/create', function () {
    return view('cotizacion.create');
});
Route::get('/edit', function () {
    return view('cotizacion.edit');
});
Route::get('/show', function () {
    return view('cotizacion.show');
});