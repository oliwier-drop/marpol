@extends('layouts.subpage')

@section('title')
    Produkty
@endsection

@section('description')
    Sprawdź nasze produkty i wykonaj zamówienie.
@endsection

@section('meta_description')
    Sprawdź nasze produkty i wykonaj zamówienie.
@endsection

@section('meta_keywords')
    produkty, marpol, opakowania, kartony, tektury, wypełniacze
@endsection

@section('meta_robots')
    index, follow
@endsection
    
@section('content')
<section class="bg-gray-100 py-12">
    <div class="container mx-auto px-4 space-y-12">

        {{-- Kartony klapowe --}}
        <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
            <div class="md:w-1/2 flex justify-center" data-aos="fade-right" data-aos-delay="100">
                <img
                    src="{{ asset('assets/images/kartony-klapowe.png') }}"
                    alt="Kartony klapowe"
                    class="max-w-md w-full object-contain"
                >
            </div>
            <div class="md:w-1/2 space-y-4" data-aos="fade-up">
                <h2 class="text-2xl font-bold text-gray-900">Kartony klapowe</h2>
                <p class="text-sm md:text-base text-gray-700">
                    Klasyczne kartony klapowe do transportu i magazynowania produktów – dostępne w wielu rozmiarach
                    i gramaturach tektury, z możliwością dostosowania do Twoich wymagań logistycznych.
                </p>
                <a
                    href="/produkty/kartony-klapowe"
                    class="inline-flex items-center justify-center rounded-lg bg-black px-4 py-2.5 text-sm font-medium text-white hover:bg-black/80 transition-colors"
                >
                    Dowiedz się więcej
                </a>
            </div>
        </div>

        {{-- Kartony fasonowe --}}
        <div class="flex flex-row-reverse items-center gap-8 md:gap-12">
            <div class="md:w-1/2 flex justify-center" data-aos="fade-left" data-aos-delay="100">
                <img
                    src="{{ asset('assets/images/kartony-fasonowe.png') }}"
                    alt="Kartony fasonowe"
                    class="max-w-md w-full object-contain"
                >
            </div>
            <div class="md:w-1/2 space-y-4" data-aos="fade-up">
                <h2 class="text-2xl font-bold text-gray-900">Kartony fasonowe</h2>
                <p class="text-sm md:text-base text-gray-700">
                    Opakowania fasonowe dopasowane do kształtu produktu – estetyczne, wygodne w składaniu
                    i idealne do wysyłek e‑commerce lub ekspozycji na półce.
                </p>
                <a
                    href="/produkty/kartony-fasonowe"
                    class="inline-flex items-center justify-center rounded-lg bg-black px-4 py-2.5 text-sm font-medium text-white hover:bg-black/80 transition-colors"
                >
                    Dowiedz się więcej
                </a>
            </div>
        </div>

        {{-- Tektury --}}
        <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
            <div class="md:w-1/2 flex justify-center" data-aos="fade-right" data-aos-delay="100">
                <img
                    src="{{ asset('assets/images/tektury.png') }}"
                    alt="Tektury"
                    class="max-w-md w-full object-contain"
                >
            </div>
            <div class="md:w-1/2 space-y-4" data-aos="fade-up">
                <h2 class="text-2xl font-bold text-gray-900">Tektury</h2>
                <p class="text-sm md:text-base text-gray-700">
                    Tektury lite i faliste do przekładek, zabezpieczeń oraz indywidualnych projektów opakowań.
                    Dobieramy strukturę i gramaturę do wymagań produktu.
                </p>
                <a
                    href="/produkty/tektury"
                    class="inline-flex items-center justify-center rounded-lg bg-black px-4 py-2.5 text-sm font-medium text-white hover:bg-black/80 transition-colors"
                >
                    Dowiedz się więcej
                </a>
            </div>
        </div>

        {{-- Wypełniacze --}}
        <div class="flex flex-row-reverse items-center gap-8 md:gap-12">
            <div class="md:w-1/2 flex justify-center" data-aos="fade-left" data-aos-delay="100">
                <img
                    src="{{ asset('assets/images/wypelniacze.png') }}"
                    alt="Wypełniacze opakowań"
                    class="max-w-md w-full object-contain"
                >
            </div>
            <div class="md:w-1/2 space-y-4" data-aos="fade-up">
                <h2 class="text-2xl font-bold text-gray-900">Wypełniacze opakowań</h2>
                <p class="text-sm md:text-base text-gray-700">
                    Papierowe i kartonowe wypełniacze, które stabilizują produkt w kartonie i chronią go
                    przed uszkodzeniami podczas transportu.
                </p>
                <a
                    href="/produkty/wypelniacze"
                    class="inline-flex items-center justify-center rounded-lg bg-black px-4 py-2.5 text-sm font-medium text-white hover:bg-black/80 transition-colors"
                >
                    Dowiedz się więcej
                </a>
            </div>
        </div>

    </div>
</section>
    
@endsection