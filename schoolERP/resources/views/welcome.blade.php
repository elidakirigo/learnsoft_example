<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SchoolERP</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Styles -->
</head>
<body class="antialiased">
<div class="welcomeimage">
    <img src="{{ asset('images/welcomeschoolerp.jpeg') }}" alt="Welcome to SchoolERP">
</div>

    <div class="login">
        @if (Route::has('login'))
            <div class="register">
                @auth
                    <a href="{{ url('/home') }}" class="home-link font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                @else
                    <div class="links">
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="register-link font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                        <a href="{{ route('login') }}" class="login-link font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                    </div>
                @endauth
            </div>
        @endif
    </div>
</body>
</html>
