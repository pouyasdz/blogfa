<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WizardRequest extends FormRequest
{
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            'uname'=>['required'],
            'email'=>['required', 'email'],
            'password'=>['required','min:6'],
            're-password'=>['required','min:6', 'equal:password'],
        ];
    }
}
