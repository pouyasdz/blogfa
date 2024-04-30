<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show($username)
    {
        $user = User::where("username",$username)->first();
        if(!$user) return view("pages.profile", [
            "error"=> true ,
            "message"=> "$username  شناسه کاربر نامعتبر است"
        ]);

        $posts = Post::where("author", "=", $user->id)->get();

        $user = [
            "username"=> $user->username,
            "first_name"=> $user->first_name,
            "last_name"=> $user->last_name,
            "about"=> $user->about,
            "profile" => $user->profile,
        ];
        
        return view("pages.profile", [
            "error"=>false,
            "user"=>$user,
            "posts"=>$posts
        ]);
    }

}
