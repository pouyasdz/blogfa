<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\comment\StoreRequest;
use App\Http\Requests\user\SotreRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

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
    public function update(StoreRequest $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
