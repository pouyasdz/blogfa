<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
   
    public function rules(): array
    {
        return [
            "login"=>"required",
            "password"=>"required",
        ];
    }

    public function messages(): array
    {
        return [
            "login.required"=>"نام کاربری یا ایمیل نمیتواند خالی باشد",
            "password.required"=> "رمز عبور نمیتواند خالی باشد",
        ];
    }
}
