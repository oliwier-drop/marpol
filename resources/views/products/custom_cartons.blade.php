@extends('layouts.subpage')

@section('title')
    Kartony fasonowe
@endsection

@section('description')
    
@endsection

@section('meta_description')
Pudełka fasonowe z tej grupy mogą być stworzone na bazie różnych konstrukcji z katalogu FEFCO lub według indywidualnego projektu wynikającego z wytycznych klienta.
@endsection

@section('meta_keywords')
    kartony fasonowe, opakowania, transport, FEFCO, indywidualne projekty
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
                    src="{{ asset('assets/images/kartony-fasonowe.png') }}"
                    alt="Kartony fasonowe"
                    class="w-full max-w-md h-auto object-contain"
                >
            </div>
            <div class="md:w-1/2 space-y-4" data-aos="fade-up">
                <p class="text-sm md:text-base text-gray-700">
                    Pudełka fasonowe z tej grupy mogą być stworzone na bazie różnych konstrukcji z katalogu FEFCO
                    lub według indywidualnego projektu wynikającego z wytycznych klienta.
                </p>
                <p class="text-sm md:text-base text-gray-700">
                    Dzięki zastosowaniu indywidualnych narzędzi w postaci wykrojników płaskich jesteśmy w stanie
                    zrealizować każdy, nawet najbardziej skomplikowany i oryginalny projekt opakowania.
                </p>
                <p class="text-sm md:text-base text-gray-700">
                    W zależności od Twoich oczekiwań, wymagań Twoich klientów lub ograniczeń produkcyjno‑logistycznych,
                    stworzymy dla Ciebie optymalne pudła fasonowe – łatwe w składaniu, zabezpieczające Twój produkt
                    w transporcie oraz będące doskonałym nośnikiem reklamy w przypadku dodania wielokolorowego zadruku.
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
            {{-- Szeroki wachlarz konstrukcji --}}
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
                    <h3 class="text-lg font-semibold text-gray-900">Szeroki wachlarz konstrukcji</h3>
                    <p class="mt-1 text-sm text-gray-600">Możliwość stworzenia indywidualnego projektu opakowania.</p>
                </div>
            </div>

            {{-- Wysoka jakość druku --}}
            <div class="flex items-start gap-4">
                <div class="shrink-0">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-[var(--accent-color)]/10">
                        <img
                            src="https://img.icons8.com/ios-filled/50/4b3cfb/engineering.png"
                            alt="Ikona projektowania"
                            class="h-7 w-7 object-contain"
                            loading="lazy"
                        >
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Wysoka jakość druku</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Druk fleksograficzny (bezpośrednio na tekturze) lub offsetowy – w zależności od potrzeb.
                    </p>
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
                    <p class="mt-1 text-sm text-gray-600">Opcja dwustronnego zadruku i atrakcyjnej prezentacji marki.</p>
                </div>
            </div>

            {{-- Funkcja transportowa --}}
            <div class="flex items-start gap-4">
                <div class="shrink-0">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-[var(--accent-color)]/10">
                        <img
                            src="https://img.icons8.com/ios-filled/50/4b3cfb/fragile.png"
                            alt="Ikona transportu"
                            class="h-7 w-7 object-contain"
                            loading="lazy"
                        >
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Funkcja transportowa</h3>
                    <p class="mt-1 text-sm text-gray-600">Maksymalne zabezpieczenie produktu podczas transportu.</p>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection