<?php

namespace App\Http\Controllers\dashboard;


use App\Http\Controllers\Controller;
use App\Http\Requests\post\StoreRequest;
use App\Http\Requests\post\UpdateRequest;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
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
        $userID = auth()->user()->id;
        $posts = Post::query()->where("author", "=", $userID)
        ->orderBy("created_at")
        ->get();
        return view("dashboard.myPost", compact("posts"));    
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
        $filePath = "uploads/images/$fileName";
        $file->move("uploads/images", $fileName);
        $result = Post::query()->create([
            "author"=>Auth::user()->id,
            "slug"=>str_replace(" ", "-", strtolower($request["slug"])),
            "title"=>$request["title"],
            "cover"=> $filePath,
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


    public function updateView($id){
        $post = Post::where('id', "=", $id)->firstOrFail();
        return view("dashboard.updatePost", compact("post"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $post = Post::query()->where("id", "=", $id)->firstOrFail();
        $this->authorize('update', $post);
        $filePath = $post->cover;
        if($request->file("cover"))
        {
            $file = $request->file("cover");
            $fileName = time().$file->getClientOriginalName();
            $filePath = "uploads/images/$fileName";
            $file->move("uploads/images", $fileName);
        }

        $result = Post::query()->findOrFail($id)->update([
            "slug"=>$request["slug"],
            "title"=>$request["title"],
            "description"=>$request["description"],
            "cover"=> $filePath
        ]);
        if(!$result) return redirect()->back()->with("error","پست آپدیت نشد");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::query()->findOrFail($id);
        $this->authorize('delete', $post);
        if($post) Comment::query()->where("to",$id)->delete() & $post->delete();
        if(!$post) return redirect()->back()->with("error","پست حذف نشد");
        return redirect()->back();
    }
}
