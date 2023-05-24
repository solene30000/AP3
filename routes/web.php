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

Route::get('/Adherent', [App\Http\Controllers\AdherentControl::class, 'getAdmin']);

Route::resource('Seances','App\Http\Controllers\SeancesControl');

Route::resource('Seances2','App\Http\Controllers\Seances2Control');

Route::resource('Personnel','App\Http\Controllers\PersonnelControl');

Route::resource('Adherent','App\Http\Controllers\AdherentControl');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Register', [App\Http\Controllers\RegisterController::class, 'CategorieAge']);

Route::resource('auth', 'App\Http\Controllers\RegisterController');

Route::get('/RegisterAd', [App\Http\Controllers\RegisterController::class, 'Adherent']);




