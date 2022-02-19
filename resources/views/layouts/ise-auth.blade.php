<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://pagecdn.io/lib/font-awesome/5.10.0-11/css/all.min.css"
          integrity="sha256-p9TTWD+813MlLaxMXMbTA7wN/ArzGyW/L7c5+KkjOkM=" crossorigin="anonymous">

    <!-- Styles -->
    @stack('css')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <style>
        @font-face {
            font-family: 'guestFont';
            src: url('{{asset("fonts/Audimat Mono Regular.TTF")}}');
        }

        div {
            font-family: 'Hind', sans-serif;
        }
    </style>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    @if(!config('app.debug'))
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-2Z0XNDJT58"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'G-2Z0XNDJT58');
        </script>
    @endif

</head>
<body>
<div class="min-h-screen flex items-center justify-center py-12 px-10"
     style="background-image: url({{asset("img/auth/bg_auth.svg")}});background-size: cover;background-repeat: no-repeat">
    <div class="max-w-4xl w-full space-y-8 bg-white grid grid-cols-1 md:grid-cols-2 font-bold"
         style="box-shadow: 0px 5px 50px 5px rgba(0, 0, 0, 0.25);">
        <div class="md:h-96 min-h-full pt-6 pl-5 bg-cover bg-no-repeat bg-right hidden md:block"
             style="background-image: url({{asset("img/auth/bg_auth_card.svg")}})">
            <img src="{{asset("img/global/logo.svg")}}">
            <div class="ml-1 mt-5 mr-20" style="color:#FDFDFD">
                <h2 class="text-xl mt-12">Welcome to ISE!</h2>
                <div class="border-2 rounded mr-48 mt-2 mb-4" style="background: #fdfdfd;"></div>
                <p class="text-base line leading-8 font-normal">ISE! (Information Systems Expo) merupakan event tahunan
                    yang diselenggarakan oleh Departemen Sistem Informasi Institut Teknologi Sepuluh Nopember Surabaya
                    dalam rangka memperkenalkan Departemen Sistem Informasi ITS kepada masyarakat luas.</p>
            </div>
        </div>
        <div>
            {{ $slot }}
        </div>
    </div>
</div>
<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

@livewireScripts
@stack('js')
</body>
</html>
