<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Netizens Foundation')</title>
    <link rel="shortcut icon" href={{ Vite::asset('resources/img/gossip.png') }} type="image/x-icon">

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">

<!-- Main Content -->
<main class="mx-auto mt-10 px-6">
    @yield('content')
</main>

<!-- Footer -->
<footer class="bg-white shadow-md mt-10 py-6 text-center text-gray-700">
    <p>&copy; {{ date('Y') }} Netizens Foundation. All rights reserved.</p>
</footer>

</body>
</html>
