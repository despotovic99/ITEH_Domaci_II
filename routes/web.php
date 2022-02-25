<?php

use App\Http\Controllers\GostController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HotelskaSobaController;
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
Route::get('/greska', function () {
    return view('greska');
});

Route::resource('gost',GostController::class)->only(['index','show']);
Route::resource('hotel',HotelController::class)->only(['index','show']);
Route::resource('hotelskasoba',HotelskaSobaController::class)->only(['index','show']);
