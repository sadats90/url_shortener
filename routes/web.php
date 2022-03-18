<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortController;
use App\Http\Controllers\UserController;

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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [ShortController::class, 'index']);

Route::post('/shorten', [ShortController::class, 'short'])->name('shorten');

Route::get('/{code}', [ShortController::class, 'showUrl'])->name('show');



 



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
