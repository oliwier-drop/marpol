<nav class="bg-white/20 backdrop-blur-sm fixed w-full z-20 top-0 start-0">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <!-- Logo z lewej -->
        <div class="flex items-center">
            <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/images/logos/marpol-logo.png') }}" class="h-20 w-auto" alt="Logo" />
            </a>
        </div>

        <!-- Linki z prawej strony -->
        <div class="flex items-center md:order-2">
            <div class="hidden md:flex md:space-x-8 rtl:space-x-reverse">
                <a href="/o-nas" class="block py-2 px-3 text-lg text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0">O nas</a>
                <a href="/produkty" class="block py-2 px-3 text-lg text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0">Produkty</a>
                <a href="/kontakt" class="block py-2 px-3 text-lg text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0">Kontakt</a>
            </div>
        </div>

        <!-- Przycisk hamburger dla mobile -->
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-body rounded-base md:hidden hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none focus:ring-2 focus:ring-neutral-tertiary order-4" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Otwórz menu</span>
            <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
            </svg>
        </button>
    </div>

    <!-- Menu mobilne -->
    <div class="hidden w-full md:hidden" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 mt-4 rounded-base bg-neutral-secondary-soft">
            <li>
                <a href="/o-nas" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary">O nas</a>
            </li>
            <li>
                <a href="/produkty" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary">Produkty</a>
            </li>
            <li>
                <a href="/kontakt" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary">Kontakt</a>
            </li>
        </ul>
    </div>
</nav>

