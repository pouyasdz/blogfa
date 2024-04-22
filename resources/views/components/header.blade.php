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
                  <a class="block md:text-black mr-4" href="#">خانه </a>
                </div>
                <div class="flex text-sm" v-else>
                    <a class="p-2 ml-2 bg-white text-teal-500 font-semibold leading-none border border-gray-100 rounded hover:border-transparent hover:bg-gray-100" href="#">ورود</a>
                  <a class="p-2 ml-2 bg-blue-500 text-gray-100 font-semibold leading-none border border-blue-600 rounded hover:border-transparent hover:bg-blue-600" href="#">ثبت نام</a>
                </div>
              </div>
          </nav>
        </header>
        <div class="bottomNav fixed bottom-0 w-full">
          <nav class="md:hidden rounded-3xl bottom-0 w-full bg-blue-500 text-xs">
            <ul class="flex justify-around items-center text-white text-center opacity-75 text-lg font-bold">
              <li class="p-4 hover:bg-gray-500">
                <a href="#">
                  <span></span>
                  <i class="ri-question-line"></i>
                 </a>
              </li>
              <li class="p-4 hover:bg-gray-500">
                <a href="#">
                  <span></span>
                  <i class="ri-phone-fill size-12"></i>
                </a>
              </li>
              
              <li class="p-4 hover:bg-gray-500">
                <a href="">
                  <span></span>
                  <i class="ri-home-4-fill"></i>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div
</body>
</html>