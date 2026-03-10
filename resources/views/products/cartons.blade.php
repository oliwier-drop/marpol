@extends('layouts.subpage')

@section('title')
    Kartony klapowe
@endsection

@section('description')
    
@endsection

@section('meta_description')
    Pudełka klapowe to podstawowe opakowania transportowe, znane również jako American Boxes lub Fefco 0201. Są także potocznie nazywane klapówkami.
@endsection

@section('meta_keywords')
    kartony klapowe, opakowania, transport, American Boxes, Fefco 0201, klapówki
@endsection

@section('meta_robots')
    index, follow
@endsection

@section('content')

<section id="description" class="py-12" data-aos="fade-up">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
            <div class="md:w-1/2 flex justify-center" data-aos="fade-right" data-aos-delay="100">
                <img
                    src="{{ asset('assets/images/kartony-klapowe.png') }}"
                    alt="Kartony klapowe"
                    class="w-full max-w-md h-auto object-contain"
                >
            </div>
            <div class="md:w-1/2 space-y-4" data-aos="fade-up">
                <p class="text-sm md:text-base text-gray-700">
                    Pudełka klapowe to podstawowe opakowania transportowe, znane również jako American Boxes lub Fefco 0201.
                    Są także potocznie nazywane klapówkami.
                </p>
                <p class="text-sm md:text-base text-gray-700">
                    Dzięki uniwersalnej konstrukcji oraz bardzo wydajnej maszynie, zwanej inlinerem, łączącej w sobie
                    jednoczesny proces 4‑kolorowego druku flexo, wycięcia i klejenia, jesteśmy w stanie wyprodukować
                    pudła klapowe o różnych wymiarach bez konieczności zastosowania dodatkowego narzędzia w postaci wykrojnika.
                </p>
                <p class="text-sm md:text-base text-gray-700">
                    Bazując na wymiarach Twojego produktu, nasz doświadczony zespół konstruktorów jest w stanie zaproponować
                    klapowe opakowania w optymalnej wielkości. Ponadto, jako doświadczony producent kartonów klapowych,
                    dobieramy odpowiedni rodzaj tektury falistej tak, aby nawet w najtrudniejszych warunkach logistycznych
                    opakowanie klapowe spełniło swoją podstawową funkcję ochronną.
                </p>
            </div>
        </div>
    </div>
</section>
<section id="functions" class="py-12" data-aos="fade-up">
    <div class="container mx-auto px-4">
        <h2 class="mb-10 text-3xl md:text-4xl font-bold text-gray-900">
            Funkcjonalność
        </h2>

        <div class="grid gap-10 md:grid-cols-2 md:gap-12">
            {{-- Uniwersalna konstrukcja --}}
            <div class="flex items-start gap-4">
                <div class="shrink-0">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-[var(--accent-color)]/10">
                        <img
                            src="https://img.icons8.com/ios-filled/50/4b3cfb/stack-of-paper.png"
                            alt="Ikona kartonu"
                            class="h-7 w-7 object-contain"
                            loading="lazy"
                        >
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Uniwersalna konstrukcja</h3>
                    <p class="mt-1 text-sm text-gray-600">Łatwe składanie dopasowane do różnych zastosowań.</p>
                </div>
            </div>

            {{-- Brak wykrojnika --}}
            <div class="flex items-start gap-4">
                <div class="shrink-0">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-[var(--accent-color)]/10">
                        <img
                            src="https://img.icons8.com/ios-filled/50/4b3cfb/settings.png"
                            alt="Ikona braku wykrojnika"
                            class="h-7 w-7 object-contain"
                            loading="lazy"
                        >
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Brak wykrojnika</h3>
                    <p class="mt-1 text-sm text-gray-600">Proste nacięcia wykonywane przy użyciu wbudowanych noży.</p>
                </div>
            </div>

            {{-- Funkcja transportowa --}}
            <div class="flex items-start gap-4">
                <div class="shrink-0">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-[var(--accent-color)]/10">
                        <img
                            src="https://img.icons8.com/ios-filled/50/4b3cfb/fragile.png"
                            alt="Ikona bezpieczeństwa produktu"
                            class="h-7 w-7 object-contain"
                            loading="lazy"
                        >
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Funkcja transportowa</h3>
                    <p class="mt-1 text-sm text-gray-600">Maksymalne zabezpieczenie produktu w czasie transportu.</p>
                </div>
            </div>

            {{-- Funkcja reklamowa --}}
            <div class="flex items-start gap-4">
                <div class="shrink-0">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-[var(--accent-color)]/10">
                        <img
                            src="https://img.icons8.com/ios-filled/50/4b3cfb/gift.png"
                            alt="Ikona reklamy"
                            class="h-7 w-7 object-contain"
                            loading="lazy"
                        >
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Funkcja reklamowa</h3>
                    <p class="mt-1 text-sm text-gray-600">Możliwość wielokolorowego nadruku fleksograficznego.</p>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection