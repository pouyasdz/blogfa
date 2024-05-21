@extends('index')
@section('title')
{{$post["title"]}}
@endsection
@section('main')
    <main class="font-vazir text-right">
    <div class="max-w-screen-xl mx-auto">
        <main class="mt-10">
          <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
            <div class="absolute left-0 bottom-0 w-full h-full z-10"
              style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
            <img src="{{asset($post["cover"])}}" class="absolute rounded-lg left-0 top-0 w-full h-full z-0 object-cover" />
            <div class="p-4 absolute bottom-0 left-0 z-20">
              <div class="flex mt-3">
                <img src="{{asset($author["profile"])}}"
                  class="h-12 w-12 rounded-full mr-2 object-cover" />
                  <div>
                    <p class="font-vazir text-gray-200 text-sm">{{$author["first_name"]}} {{$author["last_name"]}}</p>
                    <p class="font-vazir text-gray-400 text-xs">{{$post["updated_at"]}}</p>
                  </div>
              </div>
            </div>
          </div>
          <div class="px-4 font-vazir lg:px-0 mt-12 text-right text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
            <h2 class="text-2xl font-bold text-right text-gray-800 font-vazir mb-4 mt-4">{{$post["title"]}}</h2>
             <p class="pb-6">{{$post["description"]}}</p>
          </div>
          <form method="POST" action="{{route('create-commnet')}}" class="flex flex-col p-4 mx-auto max-w-xl mt-24z">
            @csrf
            @if(Session::has("success"))
              {{Session::get("success")}}
            @endif
            <label class="mb-2 font-bold text-lg text-gray-900" for="comment"> :دیدگاهتان را بنوسید</label>
            <textarea rows="4" class="mb-4 px-3 py-2 border-2 border-gray-300 rounded-lg" id="comment" name="content"></textarea>
            <input type="text" value={{$post["id"]}} name="to" class="hidden">
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded max-w-[100px]">ارسال</button>
            </div>
        </form>
        @foreach ($comments as $item)
        <div class="flex flex-col gap-2 bg-blue-50 p-5 rounded-3xl mt-5 relative">
          <span class="absolute left-0 ml-5 text-sm text-gray-500">{{$item["created_at"]}}</span>
          <div class="flex w-full items-center flex-row-reverse gap-3">
            <img class="w-14 h-14 rounded-full " src="{{strlen($item->user["profile"]) <= 0 ? asset("assets/images/default-image.jpg") : asset($item->user["profile"])}}" alt="">
            <div class="flex flex-col">
              <a href="/profile/{{$item->user["username"]}}"><span class="text-lg text-blue-500">{{$item->user["username"]}}</span></a>
              <span class="text-sm"> {{$item->user->first_name }} {{$item->user->last_name}}</span>
            </div>
          </div>
          <span class="text-lg">نظر کاربر: {{$item["content"]}} </span> 
        </div>
        @endforeach
        </main>
      </div>
    </main>
@endsection