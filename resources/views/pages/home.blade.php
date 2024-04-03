@extends('index')

@section('main')
    <main class="container mx-auto font-vazir">
        <div class="flex flex-col sm:flex-row sm:justify-center w-full h-max items-center px-3">
            <div class="flex flex-col w1/2">
                <img class="w-full h-500" src="{{asset('assets/images/landing.svg')}}" alt="">
            </div>
            <div class="flex flex-col w1/2" dir="rtl">
                <h1 class="text-5xl font-black text-blue-900">بلاگـــفا</h1>
                <p class="text-lg font-semibold text-gray-700">یک ابزار قدرتمند برای ساخت و مدریت وبلاگ است. بلاگفا به شما</p>
                <p class="text-lg font-semibold text-gray-700">کمک میکند تا با سرعت و سهولت اطلاعات،خاطرات، مطالب و مقالات</p>
                <p class="text-lg font-semibold text-gray-700">خود را در اینترنت منتشر کنید</p>
                <div class="flex gap-5 mt-5">
                    <button class="px-5 py-2 bg-blue-500 transition-colors delay-150 hover:bg-blue-600 text-white rounded-lg shadow-lg shadow-blue-400"><i class="ri-add-line"></i> ثبت وبلاگ جدید </button>
                    <button class="px-5 py-2 border-2 border-blue-200 rounded-lg transition-colors delay-150 hover:bg-blue-600 hover:border-blue-600 hover:text-white">ورود</button>
                </div>
            </div>
        </div>
    </main>
@endsection