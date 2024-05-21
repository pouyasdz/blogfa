<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\user\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all()->partition(10);
        return view("")->with("users", $users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterRequest $request)
    {
        $user = User::query()->create([
            "username"=> $request["username"],
            "email"=> $request["email"],
            "password"=> bcrypt($request["password"]),
            "role"=> "USER"
        ]);
        if(!$user) return redirect()->back()->with("error","خطا در ساخت حساب کاربری");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::query()->where("id", $id)->firstOrFail();
        return view("")->with("user", $user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {   
        $user = User::query()->where("id", $id)->firstOrFail();
        $this->authorize('update', $user);
        $filePath = $user->profile;
        if($request->file("profile"))
        {
            $file = $request->file("profile");
            $fileName = time().$file->getClientOriginalName();
            $filePath = "uploads/images/$fileName";
            $file->move("uploads/images", $fileName);
        }
        $user->update([
            "first_name"=>$request["first_name"],
            "last_name"=>$request["last_name"],
            "email"=>$request["email"],
            "about"=>$request["about"],
            "profile"=>$filePath
        ]);
        $user->save();

        Session::flash("message","تغیرات با موفقیت اعمال شد");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::query()->where("id", $id)->delete();
    }
}
