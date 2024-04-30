<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/globals.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/remixicon.css') }}">
    @vite('resources/css/app.css')
    <title>داشبورد | @yield('title')</title>
</head>

<body class="w-full h-screen max-h-screen flex bg-gray-900">
    <div class="w-1/6 md:w-3/12 lg:w-1/6 h-full">
        @include('components/DashboardSidebar')
    </div>
    <div class="flex flex-col w-5/6 md:w-9/12 lg:w-5/6 container mx-auto h-full">
        @include('components/DashboardHeader')
        @yield('main')

    </div>

    <script src="{{ asset('assets/js/dashboard/staticts.js') }}"></script>
    <script src="{{ asset('assets/js/autoHideScroll.js')}}"></script>
    <script src="{{ asset('assets/js/persianNumber.js')}}"></script>
</body>

</html>
