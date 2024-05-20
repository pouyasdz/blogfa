@extends('dashboard')

@section('title')
    پروفایل
@endsection



@section('main')
    <main class="font-vazir">
        <div class="items-center bg-white text-right w-full flex flex-col gap-5 px-3 md:px-16 lg:px-28 md:flex-row">
            <form class="w-full min-h-screen py-1 md:w-2/3 lg:w-3/4" method="POST" action="{{ route('update-profile') }}">
                @csrf
                <div class="p-2 md:p-4">
                    <div class="w-full px-6 pb-8 mt-8 sm:max-w-xl sm:rounded-lg">
                        <h2 class="pl-6 text-2xl font-bold sm:text-xl">پروفایل</h2>

                        <div class="grid max-w-2xl mx-auto mt-8">
                            <div class="flex flex-col items-center space-y-5 sm:flex-row sm:space-y-0">

                                <img class="object-cover w-40 h-40 p-1 rounded-full ring-2 ring-indigo-300 dark:ring-indigo-500"
                                    src="{{ strlen($data['profile']) <= 0 ? asset('assets/images/default-image.jpg') : asset($data['profile']) }}"
                                    alt="">

                                <div class="flex flex-col space-y-5 sm:ml-8 ml-8">
                                    <button type="button"
                                        class="py-3.5 px-7 text-base font-medium text-indigo-100 focus:outline-none bg-[#202142] rounded-lg border border-indigo-200 hover:bg-indigo-900 focus:z-10 focus:ring-4 focus:ring-indigo-200 ">
                                        تغییر پروفایل
                                    </button>
                                </div>

                            </div>
                            <h1 dir="rtl"> نام کاربری : {{ $data['username'] }}</h1>
                            <div class="items-center mt-8 sm:mt-14 text-[#202142]">

                                <div
                                    class="flex flex-col items-center w-full mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-4 sm:space-y-0 sm:mb-6">
                                    <div class="w-full">
                                        <label for="first_name" class="block mb-2 text-sm font-medium text-indigo-900">نام
                                            خانوادگی</label>
                                        <input type="text" id="first_name"
                                            class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 h-10 px-2"
                                            placeholder="Your first name" name="last_name" value="{{ $data['last_name'] }}"
                                            required>
                                        @error('first_name')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="w-full">
                                        <label for="last_name"
                                            class="block mb-2 text-sm font-medium text-indigo-900 ">نام</label>
                                        <input type="text" id="last_name"
                                            class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 h-10 px-2"
                                            placeholder="Your last name" name="first_name" value="{{ $data['first_name'] }}"
                                            required>
                                        @error('last_name')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="mb-2 sm:mb-6">
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-indigo-900 ">ایمیل</label>
                                    <input type="email" id="email"
                                        class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 h-10 px-2"
                                        placeholder="your.email@mail.com" name="email" required
                                        value="{{ $data['email'] }}">
                                    @error('email')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label for="message" class="block mb-2 text-sm font-medium text-indigo-900">درباره
                                        من</label>
                                    <textarea id="message" rows="4"
                                        class="block p-2.5 w-full text-sm text-indigo-900 bg-indigo-50 rounded-lg border border-indigo-300 focus:ring-indigo-500 focus:border-indigo-500 "
                                        placeholder="Write your bio here..." name="about" value="{{ $data['about'] }}"></textarea>
                                    @error('about')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="flex justify-end">
                                    <button type="submit"
                                        class="text-white bg-indigo-700  hover:bg-indigo-800  focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm 
                                w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">ذخیره</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
