<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loggedInUserId = Auth::user()->id; // Assuming you have a method to get the logged-in user ID
        $lastArticles = Post::orderBy("created_at", "desc")->where("author", "=", $loggedInUserId)->paginate(10);
        $totalUsers = User::get()->count();
        $totalPosts = Post::where("author", "=", $loggedInUserId)->get()->count();
        $sumViewPosts = Post::where("author", "=", $loggedInUserId)->sum("view");
        $totalComments = Comment::whereHas('post', function ($query) use ($loggedInUserId) {
            $query->where('author', $loggedInUserId);
        })
            ->get()
            ->count();

        $comments = Comment::whereHas('post', function ($query) use ($loggedInUserId) {
            $query->where('author', $loggedInUserId);
        })
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();

        return view("dashboard.index", [
            "lastArticles"=> $lastArticles,
            "lastComments" => $comments,
            "totalUsers"=>$totalUsers,
            "totalPosts"=>$totalPosts,
            "totalComments"=>$totalComments,
            "postsView"=>$sumViewPosts

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
