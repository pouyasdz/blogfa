<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/globals.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/remixicon.css') }}">
     @vite('resources/css/app.css')
    <title>header</title>
</head>
<body class="font-vazir">
   <header>
    <nav class="font-sans font-vazir flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full">

      <div class="mb-2 sm:mb-0 flex flex-row
      ">
        <div class="h-10 w-10 self-center mr-2">
          <img class="h-10 w-10 self-center" src="/icons8-b-67.png" />
        </div>
        <div>
          <a href="/home" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold"></a>Blog fa</a><br>
          <span class="text-xs text-grey-dark">با بلاگفا به سادگی و رایگان وبلاگ بسازید</span>
        </div>
      </div>
    
      <div class="sm:mb-0 self-center">
        <a href="#" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1">صفحه اصلی </a>
        <a href="#" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">راهنما</a>
        <a href="#" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">تماس باما </a>
        
      </div>
      
    </nav>
   </header>
      
</body>
</html>