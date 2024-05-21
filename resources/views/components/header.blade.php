<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/globals.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/remixicon.css') }}">
    @vite('resources/css/app.css')
    <title>blog fa</title>
</head>
<body class="font-vazir">
    <div class="w-full h-screen">
        <header class="bg-teal-400">
          <nav class="flex justify-between w-full bg-white text-black p-4">
            <img src="{{asset('assets/images/blogfa-logo.png')}}" alt="blog fa">
              <div class="md:items-center md:w-auto flex">
                <div class="font-vazir md:flex hidden">
                  <a class="block md:text-inherit mr-4" href="#">راهنما</a>
                  <a class="block md:text-inherit mr-4" href="#">تماس با ما </a>
                  <a class="block md:text-black mr-4" href="{{route("home")}}">خانه </a>
                </div>
                <div class="flex text-sm">
                  @if(!auth()->guard()->check())
                    <a class="p-2 ml-2 bg-white text-teal-500 font-semibold leading-none border border-gray-100 rounded hover:border-transparent hover:bg-gray-100" href="{{route("login")}}">ورود</a>
                  <a class="p-2 ml-2 bg-blue-500 text-gray-100 font-semibold leading-none border border-blue-600 rounded hover:border-transparent hover:bg-blue-600" href="{{route("register")}}">ثبت نام</a>
                  @endif
                  @if(auth()->guard()->check())
                  <div class="flex gap-2 items-center">
                    <a class="text-xl font-black text-blue-700 font-vazir" href={{route("account")}}>{{auth()->user()->first_name}} {{auth()->user()->last_name}}</a>
                    <img 
                    src="{{asset(strlen(auth()->user()->profile) 
                    <= 0 ? "assets/images/default-image.jpg" 
                    : auth()->user()->profile)}}" alt="profile"
                    class="w-10 h-10 rounded-full"
                    >
                  </div>
                  @endif
                </div>
              </div>
          </nav>
        </header>
       
      </div
</body>
</html>