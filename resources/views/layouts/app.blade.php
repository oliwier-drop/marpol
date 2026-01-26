<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@hasSection('title')@yield('title') - @endif{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />


        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <!-- Nawigacja - wspólna dla wszystkich stron -->
        @include('partials.navbar')
        @hasSection ('header')
            <header>
                @yield('header')
            </header>
        @endif

        <main>
            @yield('content')
        </main>

        <footer>
            @include('partials.footer')
        </footer>
        
        @stack('scripts')
    </body>
</html>