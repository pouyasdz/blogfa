@extends('index')

@section('title')
    آرشیو پست ها
@endsection

@section('main')
    <main class="font-vazir">
    <div class="text-center text-2xl">
        <h1 class="text-gray-500">وبلاگ های بروز شده</h1>
    </div>
    <div class="text-right grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-10 md:px-20">
        @foreach ($posts as $post)
            
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="relative">
                <img class="w-full h-48 object-contain" src="{{asset($post["cover"])}}">
                <div class="flex mt-3">
                    <img src="{{strlen($post->user->profile) <= 0 ? asset("assets/images/default-image.jpg") : asset($post->user->profile)}}"
                      class="h-12 w-12 rounded-full mr-2 object-cover" />
                      <div>
                        <p class="font-vazir text-black text-sm">{{$post->user->first_name}} {{$post->user->last_name}}</p>
                        <p class="font-vazir text-black text-xs">{{$post->update_at}}</p>
                      </div>
                </div>
                <div class="absolute top-0 right-0 bg-indigo-500 text-white font-bold px-2 py-1 m-2 rounded-md">تازه
                </div>
                <div class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">دیروز
                </div>
            </div>
            <div class="p-4">
                <div class="text-lg font-medium text-gray-800 mb-2">{{$post->title}}</div>
                <p class="text-gray-500 text-sm">{{$post->description}}</p>
                <a href="/blog/post/{{$post->slug}}">...نمایش بیشتر</a>   
            </div>
        </div>
        @endforeach
    
    </div>
    <div class="text-center text-lg">
        <a href="" class="text-gray-500">+ مطالعه بیشتر</a>
    </div>
    </main>
@endsection