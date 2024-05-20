<?php

namespace App\Http\Requests\user;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $u = User::find(auth()->user()->id)->firstOrFail();
        return [
            "first_name"=> ["nullable", "min:3", "max:30"],
            "last_name" => ["nullable", "min:4", "max:100"],
            "email"=>["required","email", "unique:users,email,".$u->id.",id"],
            "about"=>["nullable", "max:400"]
        ];
    }

    public function messages(): array
    {
        return [
            "first_name.min" => "حداقل 3 کاراکتر",
            "first_name.max" => "حداکثر 30 کاراکتر",
            "last_name.min" => "حداقل 4 کاراکتر",
            "last_name.max" => "حداکثر 100 کاراکتر",
            'email.email' => 'ایمیل معتبر نیست',
            'email.unique' => 'ایمیل قبلا استفاده شده',
            'about.max' => 'حداکثر 400 کاراکتر'
        ];
    }
}
