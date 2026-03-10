@extends('layouts.subpage')

@section('title')
    Wypełniacze opakowań
@endsection

@section('description')
    
@endsection

@section('meta_description')
    Papierowe i kartonowe wypełniacze to proste, ekologiczne i skuteczne rozwiązanie do zabezpieczania produktów w transporcie. Pozwalają wypełnić wolne przestrzenie w kartonie i ustabilizować zawartość.
@endsection

@section('meta_keywords')
    wypełniacze, opakowania, transport, papier, karton
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
                    src="{{ asset('assets/images/wypelniacze.png') }}"
                    alt="Wypełniacze opakowań"
                    class="w-full max-w-md h-auto object-contain"
                >
            </div>
            <div class="md:w-1/2 space-y-4" data-aos="fade-up">
                <p class="text-sm md:text-base text-gray-700">
                    Papierowe i kartonowe wypełniacze to proste, ekologiczne i skuteczne rozwiązanie do zabezpieczania
                    produktów w transporcie. Pozwalają wypełnić wolne przestrzenie w kartonie i ustabilizować zawartość.
                </p>
                <p class="text-sm md:text-base text-gray-700">
                    Dzięki różnym formom – od papieru w rolkach, przez zygzakowate wypełniacze, aż po specjalne przekładki –
                    możemy dobrać rozwiązanie dopasowane do rodzaju produktu i rodzaju przesyłki.
                </p>
                <p class="text-sm md:text-base text-gray-700">
                    Wypełniacze idealnie współpracują z kartonami klapowymi i fasonowymi, zwiększając ochronę oraz
                    poprawiając ogólne wrażenie z rozpakowywania przesyłki przez klienta.
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
            {{-- Ochrona produktu --}}
            <div class="flex items-start gap-4">
                <div class="shrink-0">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-[var(--accent-color)]/10">
                        <img
                            src="https://img.icons8.com/ios-filled/50/4b3cfb/fragile.png"
                            alt="Ikona ochrony produktu"
                            class="h-7 w-7 object-contain"
                            loading="lazy"
                        >
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Skuteczna ochrona produktu</h3>
                    <p class="mt-1 text-sm text-gray-600">Minimalizacja uszkodzeń dzięki amortyzacji wstrząsów i wypełnieniu pustych przestrzeni.</p>
                </div>
            </div>

            {{-- Ekologiczne rozwiązanie --}}
            <div class="flex items-start gap-4">
                <div class="shrink-0">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-[var(--accent-color)]/10">
                        <img
                            src="https://img.icons8.com/ios-filled/50/4b3cfb/recycle-sign.png"
                            alt="Ikona ekologii"
                            class="h-7 w-7 object-contain"
                            loading="lazy"
                        >
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Ekologiczne materiały</h3>
                    <p class="mt-1 text-sm text-gray-600">Papier i karton nadające się do recyklingu, przyjazne dla środowiska.</p>
                </div>
            </div>

            {{-- Elastyczność zastosowań --}}
            <div class="flex items-start gap-4">
                <div class="shrink-0">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-[var(--accent-color)]/10">
                        <img
                            src="https://img.icons8.com/ios-filled/50/4b3cfb/resize-horizontal.png"
                            alt="Ikona dopasowania"
                            class="h-7 w-7 object-contain"
                            loading="lazy"
                        >
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Elastyczne dopasowanie</h3>
                    <p class="mt-1 text-sm text-gray-600">Różne formy wypełnienia dopasowane do kształtu i wagi produktu.</p>
                </div>
            </div>

            {{-- Funkcja estetyczna --}}
            <div class="flex items-start gap-4">
                <div class="shrink-0">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-[var(--accent-color)]/10">
                        <img
                            src="https://img.icons8.com/ios-filled/50/4b3cfb/gift.png"
                            alt="Ikona estetyki"
                            class="h-7 w-7 object-contain"
                            loading="lazy"
                        >
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Lepsze wrażenie z rozpakowywania</h3>
                    <p class="mt-1 text-sm text-gray-600">Estetyczne wypełnienie poprawia odbiór marki przez klienta końcowego.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection