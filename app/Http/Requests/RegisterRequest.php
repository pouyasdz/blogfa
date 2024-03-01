<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
   
    // public function authorize(): bool
    // {
    //     return false;
    // }

   
    public function rules(): array
    {
        return [
            "username"=>["required","min:3", "max:50", "unique:users"],
            "email"=>["required","email", "unique:users"],
            "password"=>["min:6"],
        ];
    }

    public function messages(): array
    {
        return [
            'username.required' => 'نام کاربری را وارد کنید',
            'username.min' => 'نام کاربری حداقل 3 کاراکتر باشد',
            'username.max' => 'نام کاربری حداکثر 50 کاراکتر است',
            'username.unique' => 'نام کاربری قبلا استفاده شده',
            'email.email' => 'ایمیل معتبر نیست',
            'email.required' => 'ایمیل معتبر نیست',
            'email.unique' => 'ایمیل قبلا استفاده شده',
            'password.required' => 'رمزعبور را وارد کنید',
            'password.min' => 'رمزعبور نمیتواند کمتر از 6 کاراکتر باشد',
        ];
    }
}
