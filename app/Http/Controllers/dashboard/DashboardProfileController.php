<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\user\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class DashboardProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userID = auth()->user()->id;
        $data = User::query()->where("id", "=", $userID)->firstOrFail();
        return view("dashboard.profile", compact("data"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request)
    {
     
        $userID = auth()->user()->id;
        $user = User::query()->where("id", $userID)->firstOrFail();
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

        return redirect()->back();
    }
}
