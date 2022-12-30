<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessController;

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
    return view('home');
})->name("home");

Route::get('/profile', [BusinessController::class,"get"])
      ->name("business.profile.get");

Route::post('/profile',[BusinessController::class,"store"])
      ->name("business.profile.update");