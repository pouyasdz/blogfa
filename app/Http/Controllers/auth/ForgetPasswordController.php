<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgetPasswordRequest;
use Illuminate\Http\Request;

class ForgetPasswordController extends Controller
{
    /**
     * step-one
     */
    public function index()
    {
        return view("auth.forgetPassword");
    }
    public function redirectToStepTow(ForgetPasswordRequest $request){
        return redirect()->route("otp");
    }
    /**
     * step-tow
     */
    public function viewStepTow()
    {
        return view("auth.otp");
    }
    public function redirectToStepThree()
    {
        return redirect()->route("reset-success");
    }

    /**
     * step-three
     */
    public function viewStepThree(){
        return view("auth.resetSuccess");
    }

}
