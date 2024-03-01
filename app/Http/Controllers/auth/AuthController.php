<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view("auth.login");
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
        return redirect()->back()->with("success","حساب کاربری شما با موفقیت ساخته شد");
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
