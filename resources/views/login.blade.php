<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kallum Brett | Login</title>

        <link rel="icon" href="{{ asset('images/logo/favicon.ico') }}" type="image/x-icon">

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Platypi:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">        

        {{-- Scripts --}}

        {{-- @Includes --}}

        {{-- VITE Manifest --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body>

        <section id="login-container">

            <div id="login-logo-container">
                <img id="login-logo-image" src="{{asset('images/logo/logo-full.png')}}" alt="404">
            </div>

            <div id="login-left-side">
                
            </div>

            <div id="login-form-container">

                <form action="{{route('submit-login')}}" method="POST">
                    <h1>Guest Login</h1>
                    <p>Please note that by accessing this page information concerning both your device and location are collected. To request their removal, please contact me directly.</p>
                    @csrf
                    <input id="login-company" type="text" name="company-name" placeholder="Company Name..." autofocus>
                    <input id="login-username" type="text" name="username" placeholder="Username...">
                    <input id="login-password" type="password" name="password" placeholder="Password...">
                    @if ($errors->any())
                    <div class="login-form-errors">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <button type="submit">Login</button>
                </form>

            </div>

        </section>

    </body>
</html>