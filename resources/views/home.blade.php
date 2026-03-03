@extends('layouts.app')

@section('title', '')

@section('header')
    <section id="hero-video">
        {{-- Tło video --}}
        <div class="absolute inset-0 z-0">
            <video
                src="/assets/videos/video-hero.mp4"
                autoplay
                muted
                loop
                playsinline
            ></video>
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>

        {{-- Treść na wierzchu --}}
        <div class="hero-content px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-6 text-4xl font-bold tracking-tighter text-white md:text-5xl lg:text-6xl text-transform: uppercase">Opakowania na każdą miarę</h1>
            <p class="mb-8 text-base font-normal text-white md:text-xl sm:px-16 lg:px-48">W Marpol dbamy o jakość i estetykę opakowań, oferując szeroki wybór materiałów, kolorów i wzorów.</p>
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="/kontakt" class="border-2 border-white text-white hover:bg-white hover:text-black px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105">
                    Skontaktuj się
                </a>
                <a href="/oferta" class="bg-brand-orange hover:bg-blue-600 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                    Nasza oferta
                </a>
            </div>
        </div>
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
            <div class="w-6 h-10 border-2 border-white rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white rounded-full mt-2 animate-bounce"></div>
            </div>
        </div>
    </section>

@endsection

@section('content')
    
@endsection