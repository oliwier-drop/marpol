
<nav class="bg-neutral-primary fixed w-full z-20 top-0 start-0 border-b border-default">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <!-- Logo na środku -->
        <div class="flex-1 flex justify-center order-2">
            <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ Storage::url('images/logo.png') }}" class="h-8" alt="Logo" />
            </a>
        </div>

        <!-- Linki z lewej strony -->
        <div class="flex items-center order-1 flex-1">
            <div class="hidden md:flex md:space-x-8 rtl:space-x-reverse">
                <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0">O nas</a>
                <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0">Usługi</a>
            </div>
        </div>

        <!-- Linki z prawej strony -->
        <div class="flex items-center order-3 flex-1 justify-end">
            <div class="hidden md:flex md:space-x-8 rtl:space-x-reverse">
                <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0">Cennik</a>
                <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0">Kontakt</a>
            </div>
        </div>

        <!-- Przycisk hamburger dla mobile -->
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-body rounded-base md:hidden hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none focus:ring-2 focus:ring-neutral-tertiary order-4" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Otwórz menu</span>
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
            </svg>
        </button>
    </div>

    <!-- Menu mobilne -->
    <div class="hidden w-full md:hidden" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 mt-4 border border-default rounded-base bg-neutral-secondary-soft">
            <li>
                <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary">O nas</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary">Usługi</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary">Cennik</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary">Kontakt</a>
            </li>
        </ul>
    </div>
</nav>

