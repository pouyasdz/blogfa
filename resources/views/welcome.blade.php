<!DOCTYPE html>
<html lang="fa">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('assets/css/globals.css')}}">
  <link rel="stylesheet" href="{{asset('assets/fonts/remixicon.css')}}">
  @vite('resources/css/app.css')
  <title>به نصب کننده خوش آمدید</title>
</head>

<body class="w-screen h-screen bg-gradient-to-r from-blue-800 to-indigo-900 flex flex-col items-center justify-center font-vazir">
  <h1 class="mb-1 text-white text-2xl font-black ">👋 خوش آمدید</h1>
  <h2 class="m-2 text-white text-xl font-bold ">نصب کننده مالک وبلاگ</h2>
  <form class="w-80 h-96 md:w-500 md:h-500 bg-white rounded-xl border-2 border-gray-300 flex flex-col p-3 " dir="rtl">

    @foreach (
    [
    [
    'title'=>'نام کاربری',
    'id'=>'uname',
    'type'=>'text'
    ],
    [
    'title'=>'ایمیل',
    'id'=>'email',
    'type'=>'text'
    ],
    [
    'title'=>'رمزعبور',
    'id'=>'password',
    'type'=>'password'
    ],
    [
    'title'=>'تکرار رمزعبور',
    'id'=>'re-password',
    'type'=>'password'
    ],
    ] as $item)
    <label class="mt-2 md:mt-4" for="{{$item['id']}}">{{$item['title']}}</label>
    <input type="{{$item['type']}}" 
    id="{{$item['id']}}"
    class="w-full h-8 md:h-10 outline-none border-2 border-gray-200 focus:border-gray-300 rounded-md px-2" 
    dir="ltr"
    >
    @endforeach

    {{-- liner progress for display password status --}}
    <div class="w-full h-1 bg-gray-300 mt-5 rounded-md" dir="ltr">
      <div style="width: 70%" class="bg-green-500 h-full">
      </div>
    </div>

    <button type="submit" 
    class="mt-auto w-full h-10 rounded-md
    shadow-lg shadow-blue-500
    bg-blue-600 text-white 
    flex justify-center items-center 
    transition-all delay-150 
    hover:bg-blue-500 
    hover:shadow-blue-300
    font-black gap-3
    ">
     شروع 
  </button>
  </form>
</body>

</html>