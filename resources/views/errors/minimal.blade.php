<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">

    @stack('css')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
        @font-face {
            font-family: 'audimatMono';
            src: url('{{asset("fonts/Audimat Mono Regular.TTF")}}');
        }

        @font-face {
            font-family: 'Hind';
            src: url('{{asset("fonts/Hind-Regular.TTF")}}');
        }

        body {
            overflow-x: hidden;
        }
    </style>
</head>

<body class="antialiased">
    <div class="min-h-screen grid gap-4 grid-rows-2 grid-cols-none md:grid-cols-2 md:grid-rows-none items-center justify-evenly py-12 px-10" style="background-image: url({{asset("img/auth/bg_auth.svg")}});background-size: cover;background-repeat: no-repeat">
        <div class="px-4 text-white text-center uppercase tracking-wider">
            <div class="text-7xl mb-6" style="font-family: 'audimatMono';">@yield('code') ERROR<br></div>
            <div class="text-4xl" style="font-family: 'Hind';">@yield('message')</div>
            <a href="{{ app('router')->has('home') ? route('home') : url('/') }}">
                <button class="text-white font-bold uppercase tracking-wide py-3 px-8 hover:shadow-md rounded-lg mt-8" style="background: linear-gradient(270.02deg, #4CCCED 0%, #507EC5 64.04%, #1F4D95 99.96%); font-family: 'Hind';">
                    {{ __('Back To Home') }}
                </button>
            </a>
        </div>
        <div class="order-first md:order-last justify-items-center">
            <img class="max-w-xs mx-auto md:max-w-sm" src="{{asset("img/global/error.svg")}}" alt="">
        </div>
    </div>
</body>

</html>