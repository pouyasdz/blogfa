<!DOCTYPE html>
<html lang="fa">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('assets/css/globals.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/fonts/remixicon.css') }}">
        @vite('resources/css/app.css')
        <title>بلاگ فا | ارسال شد</title>
    </head>
</head>

<body
    class="font-vazir w-screen h-screen flex justify-center items-center bg-gradient-to-r from-violet-500 to-purple-500">
    <form action="" class="w-full md:w-400 h-600 mx-5 rounded-xl bg-white shadow-xl flex flex-col p-5 items-center">
        <h3 class="text-center text-gray-700 text-lg font-black" dir="rtl">تمام !</h3>

        {{-- steps --}}
        <div class="flex flex-col items-center gap-3 mt-10" dir="rtl">
            <h3 class="text-base font-semibold text-gray-600">مرحله سوم : تغیر رمز عبور</h3>
            <div class="flex gap-3">
                <span class="w-12 h-2 rounded-sm bg-violet-500"></span>
                <span class="w-12 h-2 rounded-sm bg-violet-500"></span>
                <span class="w-12 h-2 rounded-sm bg-violet-500"></span>
            </div>
        </div>
        {{-- end steps --}}

       <h1 class="text-center text-lg font-black mt-10 text-green-700">تبریک رمز عبور جدید برای حساب شما تنظیم شد</h1>
       <p class="text-center text-base font-semibold mt-5 text-blue-500">اطلاعات حساب شما به ایمیل شما ارسال شد ، لطفا پس از ورود رمزعبور را تغیر دهید</p>

                <button type="submit" class="w-full mt-auto bg-green-500 transition-colors delay-150 hover:bg-green-700 text-white py-2 rounded-xl font-black">ورود به حساب</button>

    </form>
</body>

</html>
