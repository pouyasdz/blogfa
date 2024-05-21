@extends('dashboard')

@section('title')
    پست من
@endsection



@section('main')
<main class="font-vazir h-screen">
<div class=" text-gray-900 bg-gray-200 h-full">
    <div class="ml-auto p-4 flex">
        <a href="{{route("dashboard-article-get")}}" class="bg-blue-500 flex items-center justify-center rounded-lg px-2 text-white">ساخت جدید</a>
        <h1 class="ml-auto text-3xl">
            پست ها
        </h1>
    </div>
    <div class="px-3 py-4 flex justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">عنوان</th>
                    <th class="text-left p-3 px-5">تاریخ</th>
                    <th class="text-left p-3 px-5">بازدید</th>
                    <th></th>
                </tr>
                @foreach ($posts as $post)
                    <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5"><a href="{{route("post", $post["slug"])}}">{{$post["title"]}}</a></td>
                    <td class="p-3 px-5">{{$post["created_at"]}}</td>
                    <td class="p-3 px-5">{{$post["view"]}}</td>
                    <td class="p-3 px-5 flex justify-end">
                    <a href="{{route("dashboard-update-view",$post["id"])}}" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">ویرایش</a>
                    <a href="{{route("dashboard-article-delete", $post["id"])}}" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">حذف</a></td>
                </tr>
                @endforeach
                
                
            </tbody>
        </table>
    </div>
</div>
</main>
@endsection