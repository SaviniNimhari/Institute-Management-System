<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SL Academy</title>
        <link rel="icon" type="image/png" href="{{ asset('images/logo-01.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="auth-page">
            <aside class="auth-art">
                <a class="brand" href="{{ url('/') }}"><img class="brand__logo" src="{{ asset('images/logo-01.png') }}" alt="SL Academy"></a>
                <img class="auth-image" src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=900&q=85" alt="Students learning together">
                <div class="auth-art__copy">
                    <span class="eyebrow">Your learning space</span>
                    <h1>Come curious.<br>Leave <em>capable.</em></h1>
                    <p>Pick up where you left off, find your next challenge, and keep making things that matter.</p>
                </div>
            </aside>
            <main class="auth-panel">
                <div class="auth-form">{{ $slot }}</div>
            </main>
        </div>
    </body>
</html>
