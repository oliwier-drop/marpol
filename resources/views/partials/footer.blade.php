<footer class="bg-black pt-8">
    <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <!-- Footer Top -->
        <div class="grid grid-cols-1 gap-10 lg:grid-cols-3 lg:gap-12 pb-8 border-b border-white/10">
            <!-- Left: Firma -->
            <div class="space-y-4">
                <p class="text-lg sm:text-xl font-bold text-white">PPH Marpol Pocztarek Edward</p>

                <div class="text-sm text-white/80 space-y-2">
                    <p>ADRES: ul. Wojciechowo 1, 62-510 Konin</p>
                    <p>REGON: 310513691</p>
                    <p>NIP: 6650012117</p>
                </div>
            </div>

            <!-- Middle: Informacje -->
            <div class="space-y-4">
                <p class="text-lg sm:text-xl font-bold text-white">Informacje</p>

                <ul class="space-y-2 text-sm text-white/80">
                    <li>
                        <a href="/regulamin" class="hover:text-white underline-offset-4 hover:underline">Regulamin</a>
                    </li>
                    <li>
                        <a href="/polityka-prywatnosci" class="hover:text-white underline-offset-4 hover:underline">Polityka prywatności</a>
                    </li>
                </ul>
            </div>

            <!-- Right: Kontakt -->
            <div class="space-y-4">
                <p class="text-lg sm:text-xl font-bold text-white">Kontakt</p>

                <ul class="space-y-2 text-sm text-white/80">
                    <li class="flex items-start gap-2">
                        <svg class="mt-0.5 h-5 w-5 flex-shrink-0 text-[var(--accent-color)]" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M12 21s7-4.44 7-11a7 7 0 1 0-14 0c0 6.56 7 11 7 11z" stroke="currentColor" stroke-width="2"/>
                            <path d="M12 10.5a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" stroke="currentColor" stroke-width="2"/>
                        </svg>
                        <a href="https://maps.app.goo.gl/5rqHDMfPKSUbxgWm9" target="_blank" class="hover:text-white underline-offset-4 hover:underline">Słupecka 32, 62-400 Piotrowice</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="h-5 w-5 flex-shrink-0 text-[var(--accent-color)]" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M4 8l8 5 8-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20 8v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2z" stroke="currentColor" stroke-width="2"/>
                        </svg>
                        <a href="mailto:kontakt@marpol-opakowania.pl" class="hover:text-white underline-offset-4 hover:underline">kontakt@marpol-opakowania.pl</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="h-5 w-5 flex-shrink-0 text-[var(--accent-color)]" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M22 16.92V21a1 1 0 0 1-1.09 1A19.86 19.86 0 0 1 3 5.09 1 1 0 0 1 4 4h4.09a1 1 0 0 1 1 .75l1 4a1 1 0 0 1-.27.95l-2.2 2.2a16 16 0 0 0 6.6 6.6l2.2-2.2a1 1 0 0 1 .95-.27l4 1a1 1 0 0 1 .73.89z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <a href="tel:+48616122352" class="hover:text-white underline-offset-4 hover:underline">(63) 213 19 18</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="pt-6 pb-10 flex flex-col items-center gap-4 text-center md:flex-row md:items-center md:justify-between md:text-left text-sm text-white/70">
            <p>&copy; {{ now()->year }} PPH Marpol Pocztarek Edward, Wszelkie prawa zastrzeżone</p>

            <a
                href="https://corpotech.com.pl"
                target="_blank"
                rel="noopener noreferrer"
                class="md:ml-auto inline-flex items-center justify-end opacity-90 hover:opacity-100 transition-opacity"
                aria-label="Powered by CORPOTECH"
            >
                <span class="mr-2 text-white/70">Projekt i realizacja: </span>
                <img src="/assets/images/logos/ct-white-logo.png" alt="CORPOTECH" class="h-8 w-auto">
            </a>
        </div>
    </div>
</footer>