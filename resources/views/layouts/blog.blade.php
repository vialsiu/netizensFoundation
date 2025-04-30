<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Netizens Foundation')</title>
    <link rel="shortcut icon" href={{ Vite::asset('resources/img/voice.png') }} type="image/x-icon">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-black" style="background-color: #beccdc;">
    @if(!request()->routeIs('auth.*'))
        <!-- Top Banner -->
        @include('partials.scrolling-banner')

        <!-- Header -->
        @include('partials.header')
    @endif

    <!-- Hold the content of the pages -->
    @yield('content')

    @include('partials.footer')
</body>
</html>
