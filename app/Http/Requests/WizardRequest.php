<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WizardRequest extends FormRequest
{
    // public function authorize(): bool
    // {
    //     return false;
    // }

    public function rules(): array
    {
        return [
            'uname' => ['required', 'min:3', 'max:50'],
            'email' => 'email',
            'password' => ['required', 'confirmed', 'min:6'],
        ];
    }

    public function messages(): array
    {
        return [
            'uname.required' => 'نام کاربری را وارد کنید',
            'uname.min' => 'نام کاربری حداقل 3 کاراکتر باشد',
            'uname.max' => 'نام کاربری حداکثر 50 کاراکتر است',
            'email.required' => 'ایمیل را وارد کنید',
            'email.email' => 'ایمیل معتبر نیست',
            'password.required' => 'رمزعبور را وارد کنید',
            'password.min' => 'رمزعبور نمیتواند کمتر از 6 کاراکتر باشد',
            'password.confirmed' => 'رمز عبور با تکرار آن برابر نیست',
        ];
    }
}
