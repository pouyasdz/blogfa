<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view("auth.login");
    }

    public function register(){
        return view("auth.register");
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
