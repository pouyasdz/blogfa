@extends('dashboard')

@section('title')
    افزودن پست جدید 
@endsection



@section('main')
<main class="font-vazir" >
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
	<div class="sm:max-w-lg w-full p-10  rounded-xl z-10">
		<div class="text-center">
			<h2 class="mt-5 text-3xl font-bold text-gray-900">
				پست جدید
			</h2>
		</div>
        <form class="mt-8 space-y-3"  method="post" enctype="multipart/form-data" action="{{route("dashboard-article-post")}}" >
            @csrf
                    <div class="grid grid-cols-1 space-y-2">
                        <label class="text-right text-sm font-bold text-gray-500 "> پیوند یکتا </label>
                            <input 
                            class="text-base p-2 border 
                            border-gray-300 rounded-lg 
                            focus:outline-none 
                            focus:border-indigo-500" 
                            type="text" 
                            placeholder="my-slug"
                            name="slug"
                            >
                            @error("slug")
                                <span class="text-red-500">{{$message}}</span>
                            @enderror
                    </div>
                    <div class="grid grid-cols-1 space-y-2">
                        <label class="text-right text-sm font-bold text-gray-500 ">موضوع</label>
                            <input name="title" class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" type="text">
                            
                            @error("title")
                                <span class="text-red-500">{{$message}}</span>
                            @enderror
                    </div>
                    <div class="grid grid-cols-1 space-y-2">
                        <label class="text-right text-sm font-bold text-gray-500 ">متن پست  را وارد کنید</label>
                        <textarea class="text-right rounded-lg  border border-gray-300 leading-normal w-full h-40 py-2 px-3" name="description" placeholder='. . . بنوسید' required></textarea>
                        >
                            @error("description")
                                <span class="text-red-500">{{$message}}</span>
                            @enderror
                    </div>
                    <div class="text-right grid grid-cols-1 space-y-2">
                                    <label class="text-sm font-bold text-gray-500 tracking-wide">تصویر</label>
                        <div class="flex items-center justify-center w-full">
                            <label class="flex flex-col rounded-lg border-4 border-dashed w-full h-60 p-10 group text-center">
                                <div class="h-full w-full text-center flex flex-col items-center justify-center">
                                    <div class="flex flex-auto max-h-48 w-2/5 mx-auto -mt-10">
                                    <img class="has-mask h-36 object-center" src="{{asset('assets/images/6183507_3129490.svg')}}" alt="Upload">
                                    </div>
                                    <p class="pointer-none text-gray-500 "><span class="text-sm"></span> فایل ها را در اینجا بکشید و رها کنید<br /><a href="" id="" class="text-blue-600 hover:underline">یا فایلی را از رایانه خود انتخاب کنید</a> </p>
                                </div>
                                <input type="file" class="hidden" accept="image/png, image/gif, image/jpeg" name="cover">
                            </label>
                        </div>
                    </div>
                            <p class="text-right text-sm text-gray-300">
                                <span> بارگذاری کنیدjpg , pngفقط تصاویر را با پسوند های </span>
                            </p>
                    <div>
                        <button type="submit" class="my-5 w-full flex justify-center bg-blue-500 text-gray-100 p-4  rounded-full tracking-wide
                         focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
                        ارسال
                    </button>
                    </div>
        </form>
	</div>
</div>

</main>
@endsection
