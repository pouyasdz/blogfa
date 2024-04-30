<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $username = $request->input("username");
        $user = User::where("username",$username)->first();
        if(!$user) return view("page.profile")->with("error","شناسه کاربر نا معتبر است");
        $user = [
            "username"=> $user->username,
            "first_name"=> $user->first_name,
            "last_name"=> $user->last_name,
            "about"=> $user->about,
            "profile" => $user->profile,
        ];
        return view("page.profile", compact('user'));
    }

}
