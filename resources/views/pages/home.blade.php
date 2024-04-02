@extends('index')

@section('main')
    <main class="container mx-auto font-vazir">
        <div class="flex flex-col w-full h-max bg-red-200">
            <div class="flex flex-col w1/2">
                <img class="w-full h-5" src="{{asset('assets/images/landing.svg')}}" alt="">
            </div>
            <div class="flex flex-col w1/2" dir="rtl">
                <h1 class="text-3xl font-black">بلاگفا</h1>
                <p class="text-lg font-semibold">یک ابزار قدرتمند برای ساخت و مدریت وبلاگ است. بلاگفا به شما</p>
                <p class="text-lg font-semibold">کمک میکند تا با سرعت و سهولت اطلاعات،خاطرات، مطالب و مقالات</p>
                <p class="text-lg font-semibold">خود را در اینترنت منتشر کنید</p>
                <div class="flex">
                    <button>ثبت وبلاگ جدید</button>
                    <button>ورود</button>
                </div>
            </div>
        </div>
    </main>
@endsection