<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/globals.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/remixicon.css') }}">
    @vite('resources/css/app.css')
</head>
<body class="mt-auto">
    <div class="max-w-2xl mx-auto  font-vazir">

        <footer class="p-4 bg-white rounded-lg shadow md:px-6 md:py-8 font-vazir">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="#" target="_blank" class="flex items-center mb-4 sm:mb-0">
                    <img src="{{asset('assets/images/blogfa-logo.png')}}" class="mr-4 h-8 mix-blend-multiply" alt="blog fa Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap">blog fa</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 sm:mb-0">
                    <li>
                        <a href="#" class="mr-4 text-sm text-gray-500 hover:underline md:mr-6">درباره ما </a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 text-sm text-gray-500 hover:underline md:mr-6">حریم خصوصی
                            </a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-gray-500 hover:underline">تماس باما </a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center">© 2024 <a href="" target="_blank" class="hover:underline">blog fa</a>. All Rights Reserved.
        </span>
        </footer>
    </div>
</body>
</html>