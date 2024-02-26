<?php

use App\Http\Controllers\account\AccountController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\blog\BlogController;
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

Route::get('/wizard', function () {
    return view('wizard.index');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/account', [AccountController::class, 'index']);


Route::prefix('blog')->group(function () {
    Route::get('/archive', [BlogController::class, 'index']);
    Route::get('/post/{slug}', [BlogController::class, 'post']);
});

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'index']);
    Route::get('/register', [AuthController::class, 'register']);
    Route::get('/forget-password', [AuthController::class, 'forgetPassword']);
});

