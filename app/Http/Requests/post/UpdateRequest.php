<?php

namespace App\Http\Requests\post;

use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UpdateRequest extends FormRequest
{
    public function rules(Request $request): array
    {
        return [
            "slug"=>["nullable", "min:3", "max:30", "unique:posts,slug,".$request->id],
            "title"=>["nullable", "min:3", "max:200"],
            "description"=>["nullable", "max:100000"],
            "cover"=>["nullable", "max:5024", "file"],
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
