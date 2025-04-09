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
    @yield('content')
</body>
</html>
