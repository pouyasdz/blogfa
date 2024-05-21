@extends('index')

@section('title')
    خانه
@endsection

@section('main')
    <main class="container mx-auto font-vazir">
        <div class="flex flex-col sm:flex-row sm:justify-center w-full h-max items-center px-3">
            <div class="flex flex-col w1/2">
                <img class="w-full h-500" src="{{ asset('assets/images/landing.svg') }}" alt="">
            </div>
            <div class="flex flex-col w1/2" dir="rtl">
                <h1 class="text-5xl font-black text-blue-900">بلاگـــفا</h1>
                <p class="text-lg font-semibold text-gray-700">یک ابزار قدرتمند برای ساخت و مدیریت وبلاگ است. بلاگفا به شما
                </p>
                <p class="text-lg font-semibold text-gray-700">کمک میکند تا با سرعت و سهولت اطلاعات،خاطرات، مطالب و مقالات
                </p>
                <p class="text-lg font-semibold text-gray-700">خود را در اینترنت منتشر کنید</p>
                <div class="flex gap-5 mt-5">
                    <a  href="{{route("dashboard-article-post")}}"
                        class="px-5 py-2 bg-blue-500 transition-colors delay-150 hover:bg-blue-600 text-white rounded-lg shadow-lg shadow-blue-400"><i
                            class="ri-add-line"></i> ثبت وبلاگ جدید </a>
                    @if(!auth()->guard()->check())
                    <a href="{{route("login")}}"
                        class="px-5 py-2 border-2 border-blue-200 rounded-lg transition-colors delay-150 hover:bg-blue-600 hover:border-blue-600 hover:text-white">ورود</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="text-center text-2xl">
            <h1 class="text-gray-500 py-8">وبلاگ های بروز شده</h1>
        </div>
        <div class="text-right grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-10 md:px-20">
            

            @foreach ($posts as $post)
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="relative">
                        <img class="w-full h-48 object-cover" src="{{ asset($post['cover']) }}">
                        <div class="flex mt-3">
                            <img src="{{ strlen($post->user['profile']) <= 0 ? asset('assets/images/default-image.jpg') : asset($post->user['profile']) }}"
                                class="h-12 w-12 rounded-full mr-2 object-cover" />
                            <div>
                                <p class="font-vazir text-black text-sm">{{$post->user["first_name"]}} {{$post->user["last_name"]}}</p>
                                <p class="font-vazir text-black text-xs">{{$post->created_at}}</p>
                            </div>
                        </div>
                        <div class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">دیروز
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="text-lg font-medium text-gray-800 mb-2">{{$post->title}}</div>
                        <p class="text-gray-500 text-sm text-ellipsis whitespace-nowrap overflow-hidden">{{$post->description}}</p>
                        <a href="/blog/post/{{$post->slug}}">...نمایش بیشتر</a>
                    </div>
                </div>
            @endforeach



        </div>
        <div class="text-center text-lg">
            <a href="{{route("archive")}}" class="text-gray-500">+ مطالعه بیشتر</a>
        </div>
    </main>
@endsection
