<!DOCTYPE html>
<html lang="fa">
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('assets/css/globals.css')}}">
        <link rel="stylesheet" href="{{asset('assets/fonts/remixicon.css')}}">
        @vite('resources/css/app.css')
        <title>بلاگ فا</title>
      </head>
</head>
<body>
    @include('components/header')
    @yield('main')
    @include('components/footer')
</body>
</html>