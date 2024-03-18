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

Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/profesi',[App\Http\Controllers\HomeController::class, 'profesi'])->name('home.profesi');
Route::get('/store',[App\Http\Controllers\HomeController::class, 'store'])->name('home.store');