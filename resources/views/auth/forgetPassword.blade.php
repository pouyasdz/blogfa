<!DOCTYPE html>
<html lang="fa">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('assets/css/globals.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/fonts/remixicon.css') }}">
        @vite('resources/css/app.css')
        <title>بلاگ فا | فراموشی رمز عبور</title>
    </head>
</head>

<body
    class="font-vazir w-screen h-screen flex justify-center items-center bg-gradient-to-r from-violet-700 to-blue-800">
    <form action="{{route("forget_password_post")}}" class="w-full md:w-400 h-600 mx-5 rounded-xl bg-white shadow-xl flex flex-col p-5 items-center" method="POST">
        @csrf
        <h3 class="text-center text-gray-700 text-lg font-black">نگران نباش رمز جدیدتو ایمیل میکنیم</h3>

        {{-- steps --}}
        <div class="flex flex-col items-center gap-3 mt-10" dir="rtl">
            <h3 class="text-base font-semibold text-gray-600">مرحله اول: پیدا کردن حساب</h3>
            <div class="flex gap-3">
                <span class="w-12 h-2 rounded-sm bg-violet-500"></span>
                <span class="w-12 h-2 rounded-sm bg-violet-300"></span>
                <span class="w-12 h-2 rounded-sm bg-violet-300"></span>
            </div>
        </div>
        {{-- end steps --}}

        <input type="text"
            placeholder="آدرس ایمیل"
            name="email"
            class="w-full h-10 
                outline-none border-2
                transition-colors
                delay-150 
                border-gray-200 
                focus:border-blue-500 
                rounded-md px-2 mt-10
                placeholder:text-right
                ">
            @error('email')
            <span class="text-red-500 font-bold text-sm text-right">{{ $message }}</span>
            @enderror

                <button type="submit" class="w-full mt-auto bg-green-500 transition-colors delay-150 hover:bg-green-700 text-white py-2 rounded-xl font-black">مرحله بعد</button>

    </form>
</body>

</html>
