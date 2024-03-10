<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForgetPasswordRequest extends FormRequest
{
   
    
    public function rules(): array
    {
        return [
            "email"=>["required" ,"email", "exists:users,email"]
        ];
    }
    public function messages(): array
    {
        return[
            'email.email' => 'ایمیل معتبر نیست',
            'email.required' => 'ایمیل معتبر نیست',
            'email.exists' => 'ایمیل ثبت نشده',
        ];
    }
}

