<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view("blog.archive");
    }
    public function post(){
        return view("blog.post");
    }
}
