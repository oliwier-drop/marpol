<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name'))</title>
        <meta name="description" content="@yield('meta_description')">
        <meta name="keywords" content="@yield('meta_keywords')">
        <meta name="robots" content="@yield('meta_robots')">

        <meta property="og:title" content="@yield('title', config('app.name'))">
        <meta property="og:description" content="@yield('meta_description')">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:site_name" content="{{ config('app.name') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Favicons -->
        <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
        <meta name="apple-mobile-web-app-title" content="MARPOL" />
        <link rel="manifest" href="/site.webmanifest" />
        <link rel="icon" href="/favicon.ico" />

        <!-- Turnstile -->
        <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

        <!-- Schema.org -->
        <script type="application/ld+json">
        {
        "@@context": "https://schema.org",
        "@type": "Organization",
        "name": "{{ config('app.name') }}",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('assets/images/logos/marpol-logo.png') }}"
        }
        </script>

        @if (app()->environment('production'))
            @if (env('GOOGLE_ANALYTICS_TAG'))
                <meta name="ga-measurement-id" content="{{ env('GOOGLE_ANALYTICS_TAG') }}">
            @endif
            @if (env('GOOGLE_TAG_MANAGER_ID'))
                <meta name="gtm-id" content="{{ env('GOOGLE_TAG_MANAGER_ID') }}">
            @endif
        @endif

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100">

        @include('partials.navbar')
        @if (View::hasSection('header'))
            <header>
                @yield('header')
            </header>
        @endif

        <main class="overflow-hidden">
            @yield('content')

            @include('partials.cta')
        </main>

        
        @include('partials.footer')

        @include('partials.popup')

        @stack('scripts')
    </body>
</html>