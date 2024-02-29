<!DOCTYPE html>
<html lang="fa">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('assets/css/globals.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/fonts/remixicon.css') }}">
        @vite('resources/css/app.css')
        <title>بلاگ فا | ثبت نام</title>
    </head>
</head>

<body>
    <main class="flex w-screen h-screen font-vazir md:justify-between ">
        <div 
        class="hidden md:flex flex-col relative
        w-1/2 h-full bg-gradient-to-r 
        from-blue-700 to-indigo-900 justify-center items-center">
        <div class="flex flex-col w-400 h-auto gap-2 " dir="rtl">
            <h1 class="text-4xl font-black text-white">به بلاگ فا خوش آمدید</h1>
            <p class="text-white text-lg font-semibold">با عضویت در سایت شما هم عضو خانواده بلاگ فا شوید</p>
             <img src="{{ asset('assets/images/stars.png') }}" 
             class="absolute w-300 bottom-1 right-1">
             <img src="{{ asset('assets/images/feed.png') }}" 
             class="absolute w-400 top-1 left-1">
        </div>
        </div>
        <form class="flex flex-col w-full md:w-2/4 lg:w-2/4 xl:w-1/4  h-full md:h-600 px-3 py-2 md:my-auto md:mx-auto md:shadow-2xl md:rounded-3xl">


            <h2 class="text-2xl text-gray-800 text-center md:text-right font-bold" dir="rtl">سلام !</h2>
            <p class="text-base text-gray-800 text-center md:text-right font-semibold" dir="rtl">برای شروع ثبت نام
                کنید ✍️</p>

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
                placeholder="نام کاربری">
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
                placeholder="ایمیل">

            <div
                id="input-controller"
                class="flex mt-10 outline-none border-2
                border-gray-200 
                focus:border-blue-500 
                rounded-md">
                <input type="password" class="w-full h-10 
                     px-2 outline-none placeholder:text-right" placeholder="رمزعبور">
                <button type="button"><i class="ri-eye-line text-xl text-blue-600 mr-2"></i></button>
            </div>

            <a href="" class="text-right mt-3 text-sm text-blue-500 font-bold">حساب کاربری دارید ؟ وارد شوید</a>

            <button type="submit" class="mt-auto bg-green-500 transition-colors delay-150 hover:bg-green-700 text-white py-2 rounded-xl font-black">ثبت نام</button>
        </form>

    </main>

    <script src="{{asset('assets/js/auth/register.js')}}"></script>
</body>

</html>
