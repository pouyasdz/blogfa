<!DOCTYPE html>
<html lang="fa">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('assets/css/globals.css')}}">
  <link rel="stylesheet" href="{{asset('assets/fonts/remixicon.css')}}">
  @vite('resources/css/app.css')
  <title>وبلاگ نصب شد !</title>
</head>

<body class="bg-gradient-to-r from-indigo-400 to-cyan-400 w-screen h-screen flex justify-center items-center" dir="rtl">
  <div class="
  w-300 h-300 
  sm:w-400 sm:h-400 
  md:w-600 md:h-600
  bg-white rounded-lg
  shadow-lg
  border-2 border-gray-200
  font-vazir
  flex flex-col
  p-5
  items-center
  "
  >
    <span class="text-2xl font-black text-green-700">وبلاگ نصب شد !</span>
    <p class="mt-2 text-sm text-gray-600 text-center">
    وبلاگ با موفقیت نصب شد ! اکنون میتوانید با وارد شدن به پنل مدریت وبلاگ خود را مدریت کنید
    همچنین ما پیشنهاد میکنید به صورت هفتگی رمز عبور حساب کاربری خود را تغیر دهید
    </p>
 

    <div class="flex mt-auto mb-auto gap-5">
        <a
        href="{{route("home")}}" 
        class="bg-blue-200 text-blue-500 cursor-pointer px-3 py-2 rounded-lg shadow-md font-semibold transition-colors delay-150 hover:bg-blue-500 hover:text-blue-200 flex items-center gap-2">سایت <i class="ri-global-line font-normal text-xl"></i></a>
        <a
        href="{{route("dashboard")}}" 
        class="bg-purple-200 text-purple-500 cursor-pointer px-3 py-2 rounded-lg shadow-md md font-semibold transition-colors delay-150 hover:bg-purple-500 hover:text-purple-200 flex items-center gap-2">داشبورد <i class="ri-dashboard-2-line font-normal text-xl"></i></a>
        <a
        href="{{route("account")}}" 
        class="bg-green-200 text-green-500 cursor-pointer px-3 py-2 rounded-lg shadow-md font-semibold transition-colors delay-150 hover:bg-green-500 hover:text-green-200 flex items-center gap-2">حساب کاربری <i class="ri-account-pin-circle-line font-normal text-xl"></i></a>
    </div>
  </div>
</body>

</html>