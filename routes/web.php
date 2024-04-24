<?php

use App\Http\Controllers\account\AccountController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\ForgetPasswordController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\blog\BlogController;
use App\Http\Controllers\pages\HomeController;
use App\Http\Controllers\wizard\WizardController;
use App\Http\Requests\ForgetPasswordRequest;
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

Route::group(['prefix'=>'dashboard', 'middleware'=> ['user_login', 'dashboard_access'] ], function(){
    Route::get('/', function(){ return view("dashboard.index");});
    Route::get('/posts', function(){})->middleware('admin_access');

    
    // CRUD - user
    Route::group(['prefix'=> 'user','middleware'=> ['admin_access'] ], function(){
        Route::get("/all", function(){ return view("");});
        Route::post("/create-user", function(){ });
        Route::put("/update-user", function(){ });
        Route::delete("/delete-user", function(){ });
    });
    
    // CRUD - post
    Route::group(["prefix"=> "post" ], function(){
        Route::get("/my-post", function(){ return view("");});
        Route::post("/create-post", function(){ });
        Route::put("/update-post", function(){ });
        Route::delete("/delete-post", function(){ });
    });
    
    // profile
    Route::get("/profile", function(){ return view("");});
    
    // logout
    Route::get("/logout", function(){ return view("");});
});

Route::prefix('blog')->group(function () {
    Route::get('/archive', [BlogController::class, 'index'])->name("archive");
    Route::get('/post/{slug}', [BlogController::class, 'post'])->name('post');
});

Route::prefix('auth')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware("auth_page");
    Route::post('/login', [LoginController::class, 'store'])->name('login_post');
    Route::get('/logout', [LoginController::class,'destroy'])->name("logout");

    Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware("auth_page");
    Route::post('/register', [RegisterController::class, 'store'])->name('register_post');

    Route::prefix('forget-password')->group(function () {
        Route::get('/step-one', [ForgetPasswordController::class, 'index'])->name('forget-password');
        Route::post('/step-one', [ForgetPasswordController::class, 'redirectToStepTow'])->name('forget_password_post');
        Route::get('/step-tow', [ForgetPasswordController::class, 'viewStepTow'])->name('forget_password_otp');
        Route::post('/step-tow', [ForgetPasswordController::class, 'redirectToStepThree'])->name('forget_password_otp_post');
        Route::get('/step-thre', [ForgetPasswordController::class, 'viewStepThree'])->name('reset-success');
    });
});

