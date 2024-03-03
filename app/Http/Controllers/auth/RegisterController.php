<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("auth.register");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterRequest $request)
    {
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
}
