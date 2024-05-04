<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view("blog.archive", ["posts"=> $posts]);
    }
    public function post($slug){
        $post = Post::query()->where("slug", $slug)->first();
        if(!$post) abort(404);
        $author = User::query()->where("id", "=", $post["author"])->first();
        $author = [
            "username"=> $author["username"],
            "first_name"=> $author["first_name"],
            "last_name"=> $author["last_name"],
            "profile"=> strlen($author["profile"]) <= 0 ? "assets/images/default-image.jpg" : $author["profile"],
        ];
        $comments = Comment::query()->where("to","=", $post["id"])->get();
        $response = ["post"=> $post, "author"=> $author, "comments"=>$comments];
        return view("blog.post", $response);
    }
}
