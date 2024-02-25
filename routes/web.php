<?php

use App\Http\Controllers\pages\AccountController;
use App\Http\Controllers\pages\ArchiveController;
use App\Http\Controllers\pages\AuthorizationController;
use App\Http\Controllers\pages\HomeController;
use App\Http\Controllers\pages\PostController;
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

Route::get('/wizard', function(){
    return view('wizard.index');
});

Route::get('/', [HomeController::class,'index']);
Route::get('/account', [AccountController::class,'index']);


Route::prefix('blog')->group(function () {
    Route::get('/archive', [ArchiveController::class,'index']);
    Route::get('/post/{slug}', [PostController::class,'index']);
});

Route::prefix('auth')->group(function () {
    Route::get('/login' , [AuthorizationController::class,'login']);
    Route::get('/register' , [AuthorizationController::class,'register']);
    Route::get('/forget-password' , [AuthorizationController::class,'forgetPassword']);
});

