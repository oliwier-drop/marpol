<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@hasSection('title')@yield('title') - @endif{{ config('app.name') }}</title>
        <meta name="description" content="@yield('meta_description', 'MARPOL – producent ekologicznych opakowań tekturowych i kartonów klapowych oraz fasonowych ze Słupcy. Opakowania na każdą miarę dla firm z różnych branż.')">
        <meta name="keywords" content="@yield('meta_keywords', 'opakowania kartonowe, kartony klapowe, kartony fasonowe, producent opakowań, opakowania tekturowe Słupca, MARPOL')">
        <meta name="robots" content="@yield('meta_robots', 'index,follow')">

        <meta property="og:title" content="@hasSection('title')@yield('title') - @endif{{ config('app.name') }}">
        <meta property="og:description" content="@yield('meta_description', 'MARPOL – producent ekologicznych opakowań tekturowych i kartonów klapowych oraz fasonowych ze Słupcy. Opakowania na każdą miarę dla firm z różnych branż.')">
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

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PDJHXGBQ');</script>
        


        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100">

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDJHXGBQ"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        
        
        @include('partials.navbar')

        @include('partials.hero')

        <main>
            @yield('content')

            @include('partials.cta')
        </main>

        @include('partials.footer')

        @include('partials.popup')

        @stack('scripts')
    </body>
</html>