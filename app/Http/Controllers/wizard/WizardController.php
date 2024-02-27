<?php

namespace App\Http\Controllers\wizard;

use App\Http\Controllers\Controller;
use App\Http\Requests\WizardRequest;
use App\Models\User;
use Illuminate\Http\Request;

class WizardController extends Controller
{
    public function checkAdminExists(){
        $users = User::query()->where("role","=", "ADMIN");
        if(!$users->count() > 0) return false;
        return true;
    }
    public function index(){
        if($this->checkAdminExists())return redirect()->route("wizard-finish");
        return view("wizard.index");
    }

    public function store(WizardRequest $request){
        if($this->checkAdminExists())return redirect()->route("wizard-finish");
        User::query()->create([
            "username"=> $request->uname,
            "email"=> $request->email,
            "password"=> bcrypt($request->password),
            "role"=>"ADMIN"
        ]);
        return redirect()->route("wizard-finish");
    }
    public function show($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
    
}
