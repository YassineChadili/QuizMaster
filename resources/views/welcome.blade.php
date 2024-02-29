<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body class="antialiased">
        @include('layouts.navigation')
        <main>
            <div class="welcome-msg">
                @if(isset($user))
                    <h1 style="font-size: 40px">Welkom {{ $user }}</h1>
                @else
                    <h1 style="font-size: 40px">Welkom Gebruiker</h1>
                @endif
                <a class="btn-overview" href="{{ url('/overview') }}">Naar Overzicht</a>
            </div>
        </main>
        @include('layouts.footer')
    </body>
</html>
