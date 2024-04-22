@extends('dashboard')

@section('title')
    خانه
@endsection

@php
    $totalStatus = [
        [
            'icon' => 'ri-eye-2-line',
            'title' => 'بازدید کل',
            'content' => '1000',
        ],
        [
            'icon' => 'ri-chat-1-line',
            'title' => 'تعداد نظرات',
            'content' => '300',
        ],
        [
            'icon' => 'ri-article-line',
            'title' => 'تعداد مقالات',
            'content' => '20',
        ],
        [
            'icon' => 'ri-group-line',
            'title' => 'کل کاربر ها',
            'content' => '100000',
        ],
    ];
@endphp

@section('main')
    <main class="w-full h-full p-2 font-vazir overflow-y-auto">

        <h1 class="text-right text-5xl 
        font-black text-green-300 mt-5">
            داشبورد
        </h1>

        <div
            class="w-full h-300 grid mt-14
        grid-cols-2 grid-rows-2 md:grid-cols-3 lg:grid-cols-4 lg:grid-rows-1 lg:h-200 gap-3">
            @foreach ($totalStatus as $item)
                <div class="w-full h-full bg-slate-800 
            rounded-lg p-3 text-white flex flex-col">
                    <div class="flex items-center justify-between">
                        <i class="{{ $item['icon'] }} text-2xl md:text-4xl text-green-200"></i>
                        <p class="font-bold md:text-2xl">{{ $item['title'] }}</p>
                    </div>
                    <h3 class="text-center text-4xl mt-auto persian-num">{{ $item['content'] }}</h3>
                </div>
            @endforeach
        </div>

        <div class="w-full h-1000 flex flex-col md:flex-row md:justify-between mt-10 px-3">
            <div class="w-full md:w-2/12 h-full ">
                <h3 class="text-right md:text-center text-2xl text-white font-bold">آخرین مقالات</h3>
                <div class="w-full flex flex-col 
                gap-4 items-start md:items-center text-gray-300
                mt-3
                "
                    dir="rtl">

                    <a href="#">لورم اپیسوم متن ساختگی</a>
                    <a href="#">لورم اپیسوم متن ساختگی</a>
                    <a href="#">لورم اپیسوم متن ساختگی</a>
                    <a href="#">لورم اپیسوم متن ساختگی</a>

                </div>
            </div>

            <div class="w-full md:w-9/12  flex flex-col gap-10 mt-20 md:mt-0 md:gap-20">

                <div class="w-full h-500 max-h-500 ">
                    <h3 class="text-right h-2/12 text-2xl font-black text-white">آخرین نظرات</h3>
                    <div class="w-full h-full  overflow-y-auto">

                        <div class="w-full h-20
                        bg-white mt-5 
                        rounded-md flex items-center gap-5 p-2"
                            dir="rtl">
                            <img src="https://picsum.photos/200/300" alt="avatar" class="h-10 w-10 rounded-full">
                            <div class="flex flex-col">
                                <p class="text-xs font-bold text-gray-600">محمد علی ناصری</p>
                                <p>مقاله بسیار خوبی بود</p>
                            </div>
                            <span class="hidden md:block mr-auto text-sm text-gray-500 font-black self-end">1403/01/01</span>
                        </div>

                        <div class="w-full h-20
                        bg-white mt-5 
                        rounded-md flex items-center gap-5 p-2"
                            dir="rtl">
                            <img src="https://picsum.photos/200/300" alt="avatar" class="h-10 w-10 rounded-full">
                            <div class="flex flex-col">
                                <p class="text-xs font-bold text-gray-600">محمد علی ناصری</p>
                                <p>مقاله بسیار خوبی بود</p>
                            </div>
                        </div>

                        <div class="w-full h-20
                        bg-white mt-5 
                        rounded-md flex items-center gap-5 p-2"
                            dir="rtl">
                            <img src="https://picsum.photos/200/300" alt="avatar" class="h-10 w-10 rounded-full">
                            <div class="flex flex-col">
                                <p class="text-xs font-bold text-gray-600">محمد علی ناصری</p>
                                <p>مقاله بسیار خوبی بود</p>
                            </div>
                        </div>

                        <div class="w-full h-20
                        bg-white mt-5 
                        rounded-md flex items-center gap-5 p-2"
                            dir="rtl">
                            <img src="https://picsum.photos/200/300" alt="avatar" class="h-10 w-10 rounded-full">
                            <div class="flex flex-col">
                                <p class="text-xs font-bold text-gray-600">محمد علی ناصری</p>
                                <p>مقاله بسیار خوبی بود</p>
                            </div>
                        </div>
                        <div class="w-full h-20
                        bg-white mt-5 
                        rounded-md flex items-center gap-5 p-2"
                            dir="rtl">
                            <img src="https://picsum.photos/200/300" alt="avatar" class="h-10 w-10 rounded-full">
                            <div class="flex flex-col">
                                <p class="text-xs font-bold text-gray-600">محمد علی ناصری</p>
                                <p>مقاله بسیار خوبی بود</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="w-full h-500 max-h-500 ">
                    <h3 class="text-right text-2xl font-black text-white">محبوب ترین مقالات</h3>
                    <div 
                    class="w-full h-full 
                    flex flex-col items-end 
                    bg-white p-2 mt-5 rounded-lg
                    justify-evenly">
                        <a href="#">لورم اپیسوم متن ساختگی</a>
                        <a href="#">لورم اپیسوم متن ساختگی</a>
                        <a href="#">لورم اپیسوم متن ساختگی</a>
                        <a href="#">لورم اپیسوم متن ساختگی</a>
                        <a href="#">لورم اپیسوم متن ساختگی</a>
                        <a href="#">لورم اپیسوم متن ساختگی</a>
                        <a href="#">لورم اپیسوم متن ساختگی</a>
                        <a href="#">لورم اپیسوم متن ساختگی</a>
                        <a href="#">لورم اپیسوم متن ساختگی</a>
                        <a href="#">لورم اپیسوم متن ساختگی</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
