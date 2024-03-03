<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("auth.login");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LoginRequest $request)
    {
        $user = User::where("email", "=", $request->login)->orWhere("username","=", $request->login)->first();
        if(!$user) return redirect()->back()->with("error","نام کاربری یا رمزعبور اشتباه است");
        if(!Hash::check($request->password, $user->password)) return redirect()->back()->with("error","نام کاربری یا رمزعبور اشتباه است");
        auth()->guard()->login($user);
        return redirect()->route("home");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        auth()->guard()->logout();
        return redirect()->back();
    }
}
