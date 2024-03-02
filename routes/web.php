<?php

use App\Http\Controllers\account\AccountController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\blog\BlogController;
use App\Http\Controllers\pages\HomeController;
use App\Http\Controllers\wizard\WizardController;
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

Route::get('/wizard', [WizardController::class,'index'])->name('wizard');
Route::get('/wizard/install-successfull',function(){return view("wizard.finish");})->name('wizard-finish');
Route::post('/wizard', [WizardController::class,'store'])->name('wizard_post');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/account', [AccountController::class, 'index'])->name("account")->middleware("user_login");


Route::prefix('blog')->group(function () {
    Route::get('/archive', [BlogController::class, 'index'])->name("archive");
    Route::get('/post/{slug}', [BlogController::class, 'post'])->name('post');
});

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login_post');
    Route::get('/logout', [AuthController::class,'logout'])->name("logout");
    Route::get('/register', [AuthController::class, 'registerGet'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register_post');
    Route::prefix('forget-password')->group(function () {
        Route::get('/step-one', [AuthController::class, 'forgetPassword'])->name('forget-password');
        Route::get('/step-tow', [AuthController::class, 'otp'])->name('otp');
        Route::get('/step-thre', [AuthController::class, 'resetSuccessFull'])->name('reset-success');

    });
});

