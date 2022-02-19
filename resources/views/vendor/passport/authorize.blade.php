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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://pagecdn.io/lib/font-awesome/5.10.0-11/css/all.min.css"
          integrity="sha256-p9TTWD+813MlLaxMXMbTA7wN/ArzGyW/L7c5+KkjOkM=" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(0deg, rgba(0, 155, 189, 1) 0%, rgba(0, 65, 103, 1) 50%);
            font-family: 'Hind', sans-serif;
        }
    </style>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
<div class="min-h-screen flex flex-col items-center justify-center py-12 px-10">
    <img src="{{asset("img/global/logo.png")}}" class="mb-8">
    <div class="max-w-2xl w-full space-y-8 bg-white font-bold"
         style="box-shadow: 0px 5px 50px 5px rgba(0, 0, 0, 0.25);">
        <div class="mt-8 mx-10 mb-12 text-lg">
            <h2 class="text-2xl text-center">Izin Akses Akun</h2>
            <h3 class="text-sm font-medium text-center">{{Auth::user()->email}}</h3>
            <!-- Introduction -->
            <p class="font-normal mt-8"><u>{{ $client->name }}</u> meminta izin untuk mengakses akun ISE
                anda. @if (count($scopes) > 0) Aplikasi atau website tersebut dapat : @endif
            </p>

            <!-- Scope List -->
            @if (count($scopes) > 0)
                <div class="scopes">
                    <ul>
                        @foreach ($scopes as $scope)
                            <li>{{ $scope->description }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('passport.authorizations.approve') }}" class="flex items-center justify-center py-8">
                @csrf
                <input type="hidden" name="state" value="{{ $request->state }}">
                <input type="hidden" name="client_id" value="{{ $client->id }}">
                <input type="hidden" name="auth_token" value="{{ $authToken }}">
                <button type="submit"
                        class="w-1/2 hover:shadow-lg py-2 px-4 text-white rounded"
                        style="background: linear-gradient(270.02deg, #4CCCED 0%, #507EC5 64.04%, #1F4D95 99.96%);">
                    Izinkan
                </button>
            </form>
            <form method="post" action="{{ route('passport.authorizations.deny') }}">
                @csrf
                @method('DELETE')

                <input type="hidden" name="state" value="{{ $request->state }}">
                <input type="hidden" name="client_id" value="{{ $client->id }}">
                <input type="hidden" name="auth_token" value="{{ $authToken }}">
                <p class="font-normal">Jika kamu tidak ingin memberikan akses, klik tombol <button class="text-indigo-400 hover:underline">batal</button> berikut atau tutup tab ini.</p>
            </form>
        </div>
    </div>
</div>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


</body>
</html>

