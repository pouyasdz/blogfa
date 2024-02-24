<?php

use App\Http\Controllers\pages\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index']);

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/archive', function () {
    return view('pages.archive');
});

Route::get('/account', function () {
    return view('pages.account');
});

Route::get('/post', function () {
    return view('pages.post');
});