@extends('dashboard')

@section('title')
    پست من
@endsection



@section('main')
<main>
<div class=" text-gray-900 bg-gray-200">
    <div class="ml-auto p-4 flex">
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
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5"><p>عنوان</p></td>
                    <td class="p-3 px-5">تاریخ</td>
                    <td class="p-3 px-5">بازدید</td>
                    <td class="p-3 px-5 flex justify-end">
                    <button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">ویرایش</button>
                    <button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">حذف</button></td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>
</main>
@endsection