<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view("auth.login");
    }
    public function login(LoginRequest $request){
        $user = User::where("email", "=", $request->login)->orWhere("username","=", $request->login)->first();
        if(!$user) return redirect()->back()->with("error","نام کاربری یا رمزعبور اشتباه است");
        if(!Hash::check($request->password, $user->password)) return redirect()->back()->with("error","نام کاربری یا رمزعبور اشتباه است");
        auth()->guard()->login($user);
        return redirect()->route("home");
    }
    public function logout(){
        auth()->guard()->logout();
        return redirect()->back();
    }
    public function registerGet(){
        return view("auth.register");
    }
    public function registerPost(RegisterRequest $request){
        $user = User::query()->create([
            "username"=> $request["username"],
            "email"=> $request["email"],
            "password"=> bcrypt($request["password"]),
            "role"=> "USER"
        ]);
        if(!$user) return redirect()->back()->with("error","خطا در ساخت حساب کاربری");
        Auth::login($user);
        return redirect()->route("home",[],201);
    }

    public function forgetPassword(){
        return view("auth.forgetPassword");
    }
    public function otp(){
        return view("auth.otp");
    }
    public function resetSuccessFull(){
        return view("auth.resetSuccess");
    }
}
