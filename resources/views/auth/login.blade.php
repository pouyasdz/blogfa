<!DOCTYPE html>
<html lang="fa">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('assets/css/globals.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/fonts/remixicon.css') }}">
        @vite('resources/css/app.css')
        <title>بلاگ فا | ورود</title>
    </head>
</head>

<body>
    <main class="flex w-screen h-screen ~ md:justify-between ">
        <div
            class="hidden md:flex flex-col relative
        w-1/2 h-full bg-gradient-to-r 
        from-blue-700 to-indigo-900 justify-center items-center">
            <div class="flex flex-col w-500 h-auto gap-2 " dir="rtl">
                <h1 class="text-4xl font-black text-white">دلمون برات تنگ شده بود</h1>
                <p class="text-white text-lg font-semibold">این چند وقته که نبودی دل ما برات تنگ شده بود ممنون که برگشتی
                </p>
                <img src="{{ asset('assets/images/heart-in-hand.png') }}" class="absolute w-100  md:w-200 bottom-0 left-1">
            </div>
        </div>
        <form
            class="flex flex-col w-full md:w-2/4 lg:w-2/4 xl:w-2/6 h-full md:h-600 px-3 py-2 md:my-auto md:mx-auto md:shadow-2xl md:rounded-3xl"
            method="POST" action="{{ route('login_post') }}">

            @csrf

            @if (Session::has('error'))
                <span class="text-center font-bold text-red-500">
                    {!! Session::get('error') !!}
                </span>
            @endif

            <h2 class="text-2xl text-gray-800 text-center font-bold" dir="rtl">سلام</h2>
            <p class="text-base text-gray-800 text-center font-semibold" dir="rtl">خوش برگشتی 👋</p>

            <input type="text"
                class="w-full h-10 
                outline-none border-2
                transition-colors
                delay-150 
                border-gray-200 
                focus:border-blue-500 
                rounded-md px-2 mt-10
                placeholder:text-right
                "
                name="login" placeholder="نام کاربری">
            @error('login')
                <span class="text-red-500 font-bold text-sm text-right">{{ $message }}</span>
            @enderror
            <div id="input-controller"
                class="flex mt-5 outline-none border-2
                border-gray-200 
                focus:border-blue-500
                pl-1 
                rounded-md">
                <input type="password"
                    class="w-full h-10 
                     px-2 outline-none placeholder:text-right"
                    placeholder="رمزعبور" name="password">
                <button type="button"><i class="ri-eye-line text-xl text-blue-600 mr-2"></i></button>
            </div>

            @error('password')
                <span class="text-red-500 font-bold text-sm text-right">{{ $message }}</span>
            @enderror

            <div class="flex w-full items-center justify-between mt-5" dir="rtl">
                <a href="{{ route('register') }}" class="text-right text-sm text-blue-500 font-bold">حساب کاربری ندارید
                    ؟ ثبت نام</a>
                <a href="{{ route('forget-password') }}" class="text-right text-sm text-slate-500 font-bold">فراموشی رمز
                    عبور !</a>
            </div>
            <div class="mt-auto flex flex-col w-full gap-5">

                {{-- checkbox --}}
                <div class="inline-flex items-center ml-auto">
                    <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="check">
                        <input type="checkbox"
                            class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-gray-900 checked:before:bg-gray-900 hover:before:opacity-10"
                            id="check" />
                        <span
                            class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20"
                                fill="currentColor" stroke="currentColor" stroke-width="1">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </label>
                    <label class="mt-px font-semibold text-gray-500 cursor-pointer select-none text-sm" htmlFor="check">
                        من را فراموش نکن
                    </label>
                </div>
                {{-- end checkbox --}}

                <button type="submit"
                    class="mt-auto bg-green-500 transition-colors delay-150 hover:bg-green-700 text-white py-2 rounded-xl font-black">ورود</button>
            </div>
        </form>

    </main>

    <script src="{{ asset('assets/js/auth/register.js') }}"></script>
</body>

</html>
