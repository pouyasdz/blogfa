<?php

namespace App\Http\Requests\comment;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            "content" => "required"
        ];
    }

    public function messages()
    {
        return [
            "content.required" => "فیلد خالی است"
        ];
    }
}
