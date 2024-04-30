@extends('index')

@section('main')
    <main>
        @if ($error)
        <div class="w-full h-screen relative flex justify-center items-center">

            <h1 class="
            text-red-500
            text-4xl font-vazir
            font-black
            ">
                {{ $message }}
            </h1>
        </div>
        @endif

        @if (!$error)
            @section('title')
            {{$user["username"]}}
            @endsection
            <div class="font-vazir">
                <div class="w-full h-[250px]">
                    <img src="{{ asset('assets/images/bguser.jpg') }}" class="w-full h-full rounded-tl-lg rounded-tr-lg">
                </div>
                <div class="flex flex-col items-center -mt-20 ">
                    <img src="{{ $user["profile"] }}" class="w-40 border-4 border-white rounded-full">
                    <div class="flex items-center space-x-2">
                        <p class="text-2xl font-bold">@ {{$user["username"]}}</p>
                    </div>
                    <p class="text-gray-700">مدت فعالیت</p>
                    <p class="text-sm text-gray-500">10 روز</p>
                </div>
                <div class="border-2 rounded-lg border-spacing-2 shadow-xl p-8">
                    <h1 class="text-right text-slate-500 font-bold m-2 text-2xl">بیوگرافی</h1>
                    <div class="text-right m-8 font-bold">
                        <p class="text-lg text-zinc-800 pb-4"> : نام</p>
                        <p class="text-lg text-zinc-800">{{$user["first_name"]}} {{$user["last_name"]}}</p>
                        <br>
                        <p class="text-lg text-zinc-800 pb-4">: درباره من</p>
                        <p class="text-lg text-zinc-800">{{$user["about"]}}</p>
                    </div>
                </div>
                <div class="text-center text-slate-400 m-8 text-2xl not-italic font-bold pb-8">
                    <h2>وبلاگ های اخیر</h2>
                    <div class="text-right grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-10 md:px-20">
                        <div class="bg-white rounded-xl shadow-md overflow-hidden">
                            <div class="relative">
                                <img class="w-full h-48 object-cover" src="{{ asset('assets/images/img.jfif') }}">
                                <div class="flex mt-3">
                                    <img src="{{ asset('assets/images/imgpost.jpg') }}"
                                        class="h-12 w-12 rounded-full mr-2 object-cover" />
                                    <div>
                                        <p class="font-vazir text-black text-sm">رضا رضایی</p>
                                        <p class="font-vazir text-black text-xs"> 1401/02/05</p>
                                    </div>
                                </div>
                                <div
                                    class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">
                                    دیروز
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="text-lg font-medium text-gray-800 mb-2">لورم ایپسوم</div>
                                <p class="text-gray-500 text-sm">اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار
                                    دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند. لورم ایپسوم یا
                                    طرح‌نما (به انگلیسی: Lorem ipsum) متنی ساختگی و بدون معنی است که برای امتحان فونت و یا
                                    پر کردن فضا در یک طراحی گرافیکی و یا صنعت چاپ استفاده میشود</p>
                                <a href="">...نمایش بیشتر</a>
                            </div>
                        </div>


                        <div class="bg-white rounded-xl shadow-md overflow-hidden">
                            <div class="relative">
                                <img class="w-full h-48 object-cover" src="{{ asset('assets/images/img.jfif') }}">
                                <div class="flex mt-3">
                                    <img src="{{ asset('assets/images/imgpost.jpg') }}"
                                        class="h-12 w-12 rounded-full mr-2 object-cover" />
                                    <div>
                                        <p class="font-vazir text-black text-sm">رضا رضایی</p>
                                        <p class="font-vazir text-black text-xs"> 1401/02/05</p>
                                    </div>
                                </div>
                                <div
                                    class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">
                                    دیروز
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="text-lg font-medium text-gray-800 mb-2">لورم ایپسوم</div>
                                <p class="text-gray-500 text-sm">اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار
                                    دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند. لورم ایپسوم یا
                                    طرح‌نما (به انگلیسی: Lorem ipsum) متنی ساختگی و بدون معنی است که برای امتحان فونت و یا
                                    پر کردن فضا در یک طراحی گرافیکی و یا صنعت چاپ استفاده میشود</p>
                                <a href="">...نمایش بیشتر</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-md overflow-hidden">
                            <div class="relative">
                                <img class="w-full h-48 object-cover" src="{{ asset('assets/images/img.jfif') }}">
                                <div class="flex mt-3">
                                    <img src="{{ asset('assets/images/imgpost.jpg') }}"
                                        class="h-12 w-12 rounded-full mr-2 object-cover" />
                                    <div>
                                        <p class="font-vazir text-black text-sm">رضا رضایی</p>
                                        <p class="font-vazir text-black text-xs"> 1401/02/05</p>
                                    </div>
                                </div>
                                <div
                                    class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">
                                    دیروز
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="text-lg font-medium text-gray-800 mb-2">لورم ایپسوم</div>
                                <p class="text-gray-500 text-sm">اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار
                                    دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند. لورم ایپسوم یا
                                    طرح‌نما (به انگلیسی: Lorem ipsum) متنی ساختگی و بدون معنی است که برای امتحان فونت و یا
                                    پر کردن فضا در یک طراحی گرافیکی و یا صنعت چاپ استفاده میشود</p>
                                <a href="">...نمایش بیشتر</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-md overflow-hidden">
                            <div class="relative">
                                <img class="w-full h-48 object-cover" src="{{ asset('assets/images/img.jfif') }}">
                                <div class="flex mt-3">
                                    <img src="{{ asset('assets/images/imgpost.jpg') }}"
                                        class="h-12 w-12 rounded-full mr-2 object-cover" />
                                    <div>
                                        <p class="font-vazir text-black text-sm">رضا رضایی</p>
                                        <p class="font-vazir text-black text-xs"> 1401/02/05</p>
                                    </div>
                                </div>
                                <div
                                    class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">
                                    دیروز
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="text-lg font-medium text-gray-800 mb-2">لورم ایپسوم</div>
                                <p class="text-gray-500 text-sm">اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار
                                    دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند. لورم ایپسوم یا
                                    طرح‌نما (به انگلیسی: Lorem ipsum) متنی ساختگی و بدون معنی است که برای امتحان فونت و یا
                                    پر کردن فضا در یک طراحی گرافیکی و یا صنعت چاپ استفاده میشود</p>
                                <a href="">...نمایش بیشتر</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-md overflow-hidden">
                            <div class="relative">
                                <img class="w-full h-48 object-cover" src="{{ asset('assets/images/img.jfif') }}">
                                <div class="flex mt-3">
                                    <img src="{{ asset('assets/images/imgpost.jpg') }}"
                                        class="h-12 w-12 rounded-full mr-2 object-cover" />
                                    <div>
                                        <p class="font-vazir text-black text-sm">رضا رضایی</p>
                                        <p class="font-vazir text-black text-xs"> 1401/02/05</p>
                                    </div>
                                </div>
                                <div
                                    class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">
                                    دیروز
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="text-lg font-medium text-gray-800 mb-2">لورم ایپسوم</div>
                                <p class="text-gray-500 text-sm">اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار
                                    دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند. لورم ایپسوم یا
                                    طرح‌نما (به انگلیسی: Lorem ipsum) متنی ساختگی و بدون معنی است که برای امتحان فونت و یا
                                    پر کردن فضا در یک طراحی گرافیکی و یا صنعت چاپ استفاده میشود</p>
                                <a href="">...نمایش بیشتر</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-md overflow-hidden">
                            <div class="relative">
                                <img class="w-full h-48 object-cover" src="{{ asset('assets/images/img.jfif') }}">
                                <div class="flex mt-3">
                                    <img src="{{ asset('assets/images/imgpost.jpg') }}"
                                        class="h-12 w-12 rounded-full mr-2 object-cover" />
                                    <div>
                                        <p class="font-vazir text-black text-sm">رضا رضایی</p>
                                        <p class="font-vazir text-black text-xs"> 1401/02/05</p>
                                    </div>
                                </div>
                                <div
                                    class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">
                                    دیروز
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="text-lg font-medium text-gray-800 mb-2">لورم ایپسوم</div>
                                <p class="text-gray-500 text-sm">اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار
                                    دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند. لورم ایپسوم یا
                                    طرح‌نما (به انگلیسی: Lorem ipsum) متنی ساختگی و بدون معنی است که برای امتحان فونت و یا
                                    پر کردن فضا در یک طراحی گرافیکی و یا صنعت چاپ استفاده میشود</p>
                                <a href="">...نمایش بیشتر</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-md overflow-hidden">
                            <div class="relative">
                                <img class="w-full h-48 object-cover" src="{{ asset('assets/images/img.jfif') }}">
                                <div class="flex mt-3">
                                    <img src="{{ asset('assets/images/imgpost.jpg') }}"
                                        class="h-12 w-12 rounded-full mr-2 object-cover" />
                                    <div>
                                        <p class="font-vazir text-black text-sm">رضا رضایی</p>
                                        <p class="font-vazir text-black text-xs"> 1401/02/05</p>
                                    </div>
                                </div>
                                <div
                                    class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">
                                    دیروز
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="text-lg font-medium text-gray-800 mb-2">لورم ایپسوم</div>
                                <p class="text-gray-500 text-sm">اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار
                                    دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند. لورم ایپسوم یا
                                    طرح‌نما (به انگلیسی: Lorem ipsum) متنی ساختگی و بدون معنی است که برای امتحان فونت و یا
                                    پر کردن فضا در یک طراحی گرافیکی و یا صنعت چاپ استفاده میشود</p>
                                <a href="">...نمایش بیشتر</a>
                            </div>
                        </div>
                    </div>
        @endif
    </main>
@endsection