<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::resource('home', HomeController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

                          /* SACRAMENTOS */
/* Bautismo */
Route::middleware(['auth:sanctum', 'verified'])->resource('/bautismo', 'App\Http\Controllers\Sacramentos\BautismoController')->names('bautismo');

//Route::resource('/bautismo', 'App\Http\Controllers\Sacramentos\BautismoController')->names('bautismo');

/* Comunion */
Route::middleware(['auth:sanctum', 'verified'])->resource('/comunion', 'App\Http\Controllers\Sacramentos\ComunionController')->names('comunion');

/* Confirmacion */
Route::middleware(['auth:sanctum', 'verified'])->resource('/confirmacion', 'App\Http\Controllers\Sacramentos\ConfirmacionController')->names('confirmacion');

/* Matrimonio */
Route::middleware(['auth:sanctum', 'verified'])->resource('/matrimonio', 'App\Http\Controllers\Sacramentos\MatrimonioController')->names('matrimonio');
