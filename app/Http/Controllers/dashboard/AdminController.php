<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lastArticles = Post::orderBy("created_at", "desc")->where("author", "=", Auth::user()->id)->paginate(10);
        $loggedInUserId = Auth::user()->id; // Assuming you have a method to get the logged-in user ID

        $comments = Comment::whereHas('post', function ($query) use ($loggedInUserId) {
            $query->where('author', $loggedInUserId);
        })
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();
        return view("dashboard.index", [
            "lastArticles"=> $lastArticles,
            "lastComments" => $comments
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
