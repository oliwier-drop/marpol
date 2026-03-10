@extends('layouts.subpage')

@section('title')
    Tektury
@endsection

@section('description')
    
@endsection

@section('meta_description')
    Tektury lite i faliste to wszechstronny materiał wykorzystywany do produkcji przekładek, przekładek wzmacniających, zabezpieczeń oraz indywidualnych projektów opakowań.
@endsection

@section('meta_keywords')
    tektury, opakowania, transport, papier, karton
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
                    src="{{ asset('assets/images/tektury.png') }}"
                    alt="Tektury"
                    class="w-full max-w-md h-auto object-contain"
                >
            </div>
            <div class="md:w-1/2 space-y-4" data-aos="fade-up">
                <p class="text-sm md:text-base text-gray-700">
                    Tektury lite i faliste to wszechstronny materiał wykorzystywany do produkcji przekładek, przekładek
                    wzmacniających, zabezpieczeń oraz indywidualnych projektów opakowań.
                </p>
                <p class="text-sm md:text-base text-gray-700">
                    Dzięki zróżnicowanej gramaturze i strukturze fali możemy idealnie dostosować tekturę do wymagań
                    konkretnego produktu – od lekkich, delikatnych wyrobów po ciężkie, wymagające stabilnego podparcia.
                </p>
                <p class="text-sm md:text-base text-gray-700">
                    Tektury doskonale sprawdzają się jako uzupełnienie opakowań zbiorczych, poprawiając ochronę,
                    stabilność i prezentację produktów w transporcie oraz magazynie.
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
            {{-- Wzmocnienie i ochrona --}}
            <div class="flex items-start gap-4">
                <div class="shrink-0">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-[var(--accent-color)]/10">
                        <img
                            src="https://img.icons8.com/ios-filled/50/4b3cfb/stack-of-paper.png"
                            alt="Ikona tektur"
                            class="h-7 w-7 object-contain"
                            loading="lazy"
                        >
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Wzmocnienie i ochrona</h3>
                    <p class="mt-1 text-sm text-gray-600">Przekładki i wzmocnienia chronią produkty przed zgnieceniem i uszkodzeniami.</p>
                </div>
            </div>

            {{-- Elastyczny dobór parametrów --}}
            <div class="flex items-start gap-4">
                <div class="shrink-0">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-[var(--accent-color)]/10">
                        <img
                            src="https://img.icons8.com/ios-filled/50/4b3cfb/settings.png"
                            alt="Ikona dopasowania parametrów"
                            class="h-7 w-7 object-contain"
                            loading="lazy"
                        >
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Elastyczny dobór parametrów</h3>
                    <p class="mt-1 text-sm text-gray-600">Różne gramatury i rodzaje fali dopasowane do oczekiwań i budżetu.</p>
                </div>
            </div>

            {{-- Zastosowania specjalne --}}
            <div class="flex items-start gap-4">
                <div class="shrink-0">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-[var(--accent-color)]/10">
                        <img
                            src="https://img.icons8.com/ios-filled/50/4b3cfb/engineering.png"
                            alt="Ikona projektów specjalnych"
                            class="h-7 w-7 object-contain"
                            loading="lazy"
                        >
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Zastosowania specjalne</h3>
                    <p class="mt-1 text-sm text-gray-600">Możliwość tworzenia indywidualnych rozwiązań konstrukcyjnych z tektury.</p>
                </div>
            </div>

            {{-- Ekologia i recykling --}}
            <div class="flex items-start gap-4">
                <div class="shrink-0">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-[var(--accent-color)]/10">
                        <img
                            src="https://img.icons8.com/ios-filled/50/4b3cfb/leaf.png"
                            alt="Ikona ekologii"
                            class="h-7 w-7 object-contain"
                            loading="lazy"
                        >
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Przyjazne środowisku</h3>
                    <p class="mt-1 text-sm text-gray-600">Materiał pochodzący z recyklingu i ponownie poddawany odzyskowi.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection