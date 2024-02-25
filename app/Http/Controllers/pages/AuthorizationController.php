<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorizationController extends Controller
{
    public function register(){
        return view("auth.register");
    }
    public function login(){
        return view("auth.login");
    }
    public function forgetPassword(){
        return view("auth.forgetPassword");
    }
}
