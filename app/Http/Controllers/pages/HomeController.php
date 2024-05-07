<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::orderBy("created_at","desc")->paginate(10);
        return view("pages.home", compact("posts"));
    }
}
