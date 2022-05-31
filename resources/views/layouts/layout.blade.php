<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <link rel="stylesheet" href=" {{ asset('css/style.css') }} ">

    <title>Comics - @yield('title')</title>
</head>
<body>
    {{-- HEADER --}}
    @include('partials.header')

    @yield('content')
    
    <script src=" {{ asset('js/app.js') }} "></script>
</body>
</html>