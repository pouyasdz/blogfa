<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use App\Http\Requests\comment\StoreRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function store(StoreRequest $request){
     Comment::query()->create(([
        "from"=> auth()->user()->id,
        "to"=> $request["to"],
        "content"=> $request["content"]
     ]));
     return redirect()->back()->with("success","ارسال شد");
    }
    public function show($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
}
