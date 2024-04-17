<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kallum Brett | Submission</title>

        <link rel="icon" href="{{ asset('images/logo/favicon.ico') }}" type="image/x-icon">

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Platypi:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">        {{-- Links --}}

        {{-- Links --}}

        {{-- Scripts --}}

        {{-- @Includes --}}
        @include('partials.background')

        {{-- VITE Manifest --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body>
        @yield('content')
    </body>
</html>