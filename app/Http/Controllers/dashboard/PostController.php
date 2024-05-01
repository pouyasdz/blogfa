<?php

namespace App\Http\Controllers\dashboard;


use App\Http\Controllers\Controller;
use App\Http\Requests\post\StoreRequest;
use App\Http\Requests\post\UpdateRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Can;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("");
    }

    public function storeView(){
        return view("dashboard.post");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        if($request->user()->cannot('create', Post::class)) abort(403);
        $file = $request->file("cover");
        $fileName = time().$file->getClientOriginalName();
        $file->move("uploads/images", $fileName);
        $fileFullPath = "uploads/images/".$file->getClientOriginalName();
        $result = Post::query()->create([
            "author"=>Auth::user()->id,
            "slug"=>$request["slug"],
            "title"=>$request["title"],
            "cover"=> $fileFullPath ,
            "description"=>$request["description"]
        ]);
        if(!$result) return redirect()->back()->with("error","پست ساخته نشد، خطا در ساخت پست");
        return redirect()->back(201)->with("success", "پست با موفقیت ساخته شد");
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $post = Post::query()->findOrFail($request->input("slug"));
        if(!$post) return redirect()->back(404);
        $comments = Comment::query()->where("to",$post->id);
        return view()->with("post", $post)->with("comments", $comments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $result = Post::query()->findOrFail($id)->update([$request]);
        if(!$result) return redirect()->back()->with("error","پست آپدیت نشد");
        return redirect()->back(200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = Post::query()->findOrFail($id)->delete();
        if($result) Comment::query()->where("to",$id)->delete();
        if(!$result) return redirect()->back()->with("error","پست حذف نشد");
    }
}
