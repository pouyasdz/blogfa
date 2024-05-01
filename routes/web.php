<?php

use App\Http\Controllers\account\AccountController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\ForgetPasswordController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\blog\BlogController;
use App\Http\Controllers\dashboard\AdminController;
use App\Http\Controllers\dashboard\DashboardProfileController;
use App\Http\Controllers\dashboard\PostController;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\pages\HomeController;
use App\Http\Controllers\profile\ProfileController;
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
Route::get('/profile/{username}', [ProfileController::class,'show'])->name('profile');

Route::group(['prefix'=>'dashboard', 'middleware'=> ['user_login', 'dashboard_access'] ], function(){
    Route::get('/', [AdminController::class, "index"])->name("dashboard");
    Route::get('/posts', [AdminController::class, "show"])->middleware('admin_access');

    
    // CRUD - user
    Route::group(['prefix'=> 'user','middleware'=> ['admin_access'] ], function(){
        Route::get("/{id}", [UserController::class, "show"]);
        Route::get("/all", [UserController::class,"index"]);
        Route::post("/create-user", [UserController::class,"store"]);
        Route::put("/update-user", [UserController::class,"update"]);
        Route::delete("/delete-user", [UserController::class, "destroy"]);
    });
    
    // CRUD - post
    Route::group(["prefix"=> "post" ], function(){
        Route::get("/my-post", [PostController::class,"index"])->name("dashboard-my-article");
        Route::get("/create-post", [PostController::class,"storeView"])->name("dashboard-article-get");
        Route::post("/create-post", [PostController::class,"store"])->name("dashboard-article-post");
        Route::put("/update-post", [PostController::class,"update"])->name("dashboard-article-put");
        Route::delete("/delete-post", [PostController::class,"destroy"])->name("dashboard-article-delete");
    });
    
    // profile
    Route::get("/profile", [DashboardProfileController::class, "index"]);
    
    // logout
    Route::get("/logout", [DashboardProfileController::class, "destroy"]);
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

