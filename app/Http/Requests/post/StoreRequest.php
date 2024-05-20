<?php

namespace App\Http\Requests\post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            "slug"=>["required", "min:3", "max:30", "unique:posts"],
            "title"=>["required", "min:3", "max:200"],
            "description"=>["required", "max:100000"],
            "cover"=>["required", "max:5024", "file"],
        ];
    }

    public function messages(): array
    {
        return [
            "slug.min"=> "حداقل 3 کاراکتر",
            "slug.max"=>"حداکثر 200 کاراکتر",
            "slug.unique"=>"پیوند یکتا قبلا استقاده شده",
            "slug.required"=>"مورد نیاز",
            "title.min"=>"حداقل 3 کاراکتر",
            "title.max"=>"حداکثر 30 کاراکتر",
            "title.required"=>"مورد نیاز",
            "description.max"=>"حداکثر 100000 کاراکتر",
            "description.required"=>"مورد نیاز است",
            "cover.max"=>"سایز تصویر باید کمتر از 5 مگابایت باشد",
            "cover.required"=>"مورد نیاز است",
        ];
    }
}
