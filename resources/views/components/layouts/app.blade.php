<!DOCTYPE html>
<html
    {{-- data-theme="{{ $selectedTheme ?? 'corporate' }}" --}}
    class="scroll-smooth"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>{{ config('app.name') ?? 'Bankent Engineering' }}</title>
        <link
            rel="shortcut icon"
            href="{{ asset('/storage/images/logo/logo.png') }}"
            type="image/png" />

        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
            rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Noto+Sans+Osmanya&display=swap"
            rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="relative flex flex-col antialiased">
        <!-- Top Nav Bar -->
        <div>
            <x-navigation.top-nav />
        </div>
        <!-- Main Body -->
        <div class="">
            {{ $slot }}
        </div>
    </body>
</html>
