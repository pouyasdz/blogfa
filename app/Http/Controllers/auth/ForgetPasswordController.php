<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgetPasswordRequest;
use App\Models\otp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

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
        // $otp = getRandomDigist();
        $otp = "123456";
        $now = Carbon::now();
        $user = User::query()->where("email", "=", $request->email)->firstOrFail();
        otp::query()->create([
            "for"=>$user->id,
            "expTime"=>$now->addSeconds(90),
            "code"=>bcrypt($otp)
        ]);
        return redirect()->route("forget_password_otp", ["email"=>$request->email]);
    }
    /**
     * step-tow
     */
    public function viewStepTow()
    {
        return view("auth.otp");
    }
    public function redirectToStepThree(Request $request)
    {
        $email = $request->input("email");
        $user = User::query()->where("email", "=", $email)->firstOrFail();
        $targetOTP = otp::query()->where("for","=", $user->id);
        if(!Hash::check($targetOTP->code, $request->otp)) return redirect()->route("reset-success");
        return redirect()->route("reset-success");
    }

    /**
     * step-three
     */
    public function viewStepThree(){
        return view("auth.resetSuccess");
    }

}
