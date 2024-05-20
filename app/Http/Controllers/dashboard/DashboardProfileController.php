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
        if($request->email) $user->email = $request->email;
        if($request->first_name) $user->first_name = $request->first_name;
        if($request->last_name) $user->last_name = $request->last_name;
        if($request->about) $user->about = $request->about;
        $user->save();

        return redirect()->back();
    }
}
