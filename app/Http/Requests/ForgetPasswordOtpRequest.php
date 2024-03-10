<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForgetPasswordOtpRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            "otp"=> "min:6"
        ];
    }

    public function messages(): array
    {
        return [
            "min" => "رمز یکبار مصرف 6 کاراکتر است !"
        ];
    }
}
