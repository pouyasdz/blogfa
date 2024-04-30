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
        return view("");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $user = User::query()->where("id", $id)->firstOrFail();
        if($request->email) $user->email = $request->email;
        if($request->password) $user->password = bcrypt($request->password);
        $user->save();

        Session::flash("message","تغیرات با موفقیت اعمال شد");
    }
}
