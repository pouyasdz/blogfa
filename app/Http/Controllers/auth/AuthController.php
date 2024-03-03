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
    
    public function logout(){
        auth()->guard()->logout();
        return redirect()->back();
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
