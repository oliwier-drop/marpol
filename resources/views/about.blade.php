@extends('layouts.subpage')

@section('title')
    O nas
@endsection

@section('description')
Trochę o naszej historii oraz naszych wartościach.
@endsection
    
@section('content')

<section id="values" class="py-12" data-aos="fade-up">
    <div class="max-w-screen-xl mx-auto px-4 py-16">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h2 class="text-3xl font-bold tracking-tight mb-4">Nasze wartości</h2>
        </div>

        <div class="grid gap-8 md:grid-cols-3">
            <!-- Rozwój -->
            <div class="flex flex-col items-center rounded-2xl bg-white/80 shadow-sm ring-1 ring-gray-200/60 p-8 text-center" data-aos="flip-up" data-aos-delay="100">
                <div class="mb-5 inline-flex h-20 w-20 items-center justify-center rounded-full bg-blue-500/10">
                    <img src="{{ asset('assets/images/icons/chart.png') }}" alt="Rozwój" class="h-16 w-16 object-contain rounded-full">
                </div>
                <h3 class="mb-3 text-xl font-semibold text-gray-900">Rozwój</h3>
                <p class="text-sm text-gray-600">
                    Inwestujemy w nowoczesne technologie i rozwój kompetencji, aby stale podnosić jakość naszych opakowań
                    oraz szybko reagować na potrzeby rynku.
                </p>
            </div>

            <!-- Trwałe rozwiązania -->
            <div class="flex flex-col items-center rounded-2xl bg-white/80 shadow-sm ring-1 ring-gray-200/60 p-8 text-center" data-aos="flip-up" data-aos-delay="200">
                <div class="mb-5 inline-flex h-20 w-20 items-center justify-center rounded-full bg-yellow-500/10">
                    <img src="{{ asset('assets/images/icons/box.png') }}" alt="Trwałe rozwiązania" class="h-16 w-16 object-contain">
                </div>
                <h3 class="mb-3 text-xl font-semibold text-gray-900">Trwałe rozwiązania</h3>
                <p class="text-sm text-gray-600">
                    Tworzymy opakowania odporne na uszkodzenia i dostosowane do intensywnego użytkowania, aby jak najlepiej
                    chronić zawartość podczas transportu i magazynowania.
                </p>
            </div>

            <!-- Ekologia -->
            <div class="flex flex-col items-center rounded-2xl bg-white/80 shadow-sm ring-1 ring-gray-200/60 p-8 text-center" data-aos="flip-up" data-aos-delay="300">
                <div class="mb-5 inline-flex h-20 w-20 items-center justify-center rounded-full bg-emerald-500/10">
                    <img src="{{ asset('assets/images/icons/eco.png') }}" alt="Ekologia" class="h-16 w-16 object-contain">
                </div>
                <h3 class="mb-3 text-xl font-semibold text-gray-900">Ekologia</h3>
                <p class="text-sm text-gray-600">
                    Stawiamy na materiały przyjazne środowisku i zoptymalizowane procesy produkcji, aby ograniczać ilość odpadów
                    i minimalizować ślad węglowy naszych opakowań.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="timeline" class="py-12" data-aos="fade-up">
    <div class="container mx-auto px-4 py-12">
        <h2 class="text-3xl font-bold text-center mb-8">Nasza historia</h2>
            <ol class="relative border-s border-default">                  
                <li class="mb-20 ms-4" data-aos="flip-up" data-aos-delay="100">
                    <div class="absolute w-3 h-3 bg-neutral-quaternary rounded-full mt-1.5 -start-1.5 border border-buffer"></div>
                    <time class="text-sm font-normal leading-none text-body">Rok 2005</time>
                    <h3 class="text-lg font-semibold text-heading my-2">Założenie firmy</h3>
                    <p class="mb-4 text-base font-normal text-body">Firma została założona w 2005 roku przez Edwarda Pocztarka. Początkowo firma produkowała wytłaczanki z papieru, ale wkrótce zaczęła produkować również opakowania z papieru <br>w różnych kształtach i rozmiarach.</p>
                </li>
                <li class="mb-20 ms-4" data-aos="flip-up" data-aos-delay="200">
                    <div class="absolute w-3 h-3 bg-neutral-quaternary rounded-full mt-1.5 -start-1.5 border border-buffer"></div>
                    <time class="text-sm font-normal leading-none text-body">Rok 2010</time>
                    <h3 class="text-lg font-semibold text-heading my-2">Rozwój firmy</h3>
                    <p class="text-base font-normal text-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                </li>
                <li class="mb-20 ms-4" data-aos="flip-up" data-aos-delay="300">
                    <div class="absolute w-3 h-3 bg-neutral-quaternary rounded-full mt-1.5 -start-1.5 border border-buffer"></div>
                    <time class="mb-1 text-sm font-normal leading-none text-body">Rok 2015</time>
                    <h3 class="text-lg font-semibold text-heading my-2">Świadomy rozwój</h3>
                    <p class="text-base font-normal text-body">Zaczęliśmy współpracę z najlepszymi producentami materiałów i dostawcami, aby zapewnić jakość oraz być bardziej ekologicznym.</p>
                </li>
                <li class="mb-20 ms-4" data-aos="flip-up" data-aos-delay="400">
                    <div class="absolute w-3 h-3 bg-neutral-quaternary rounded-full mt-1.5 -start-1.5 border border-buffer"></div>
                    <time class="mb-1 text-sm font-normal leading-none text-body">Rok 2020</time>
                    <h3 class="text-lg font-semibold text-heading my-2">Nowe produkty</h3>
                    <p class="text-base font-normal text-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                </li>
                <li class="mb-20 ms-4" data-aos="flip-up" data-aos-delay="500">
                    <div class="absolute w-3 h-3 bg-neutral-quaternary rounded-full mt-1.5 -start-1.5 border border-buffer"></div>
                    <time class="mb-1 text-sm font-normal leading-none text-body">Obecnie</time>
                    <h3 class="text-lg font-semibold text-heading my-2">Lokalny lider</h3>
                    <p class="text-base font-normal text-body">Firma jest lokalnym liderem w produkcji opakowań. Produkuje opakowania dla firm z Konina i okolic.</p>
                </li>
            </ol>
    </div>
</section>    

<section id="mission" class="py-12" data-aos="fade-up">
    <div class="container mx-auto px-4 py-12">
        <h2 class="text-3xl font-bold text-center mb-8">Wspieramy region</h2>
        <p class="text-base font-normal text-center mb-8">Wspieramy Słupecki klub piłkarski oraz akademię młodych piłkarzy. Wierzymy w sport i jego edukacyjne znaczenie dla rozwoju młodych ludzi oraz lokalnej społeczności.</p>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <img class="h-64 w-full rounded-base object-cover" src="{{ asset('assets/images/skp-akademia.jpg') }}" alt="Akademia Słupecki Klub Piłkarski" data-aos="flip-up" data-aos-delay="100">
            <img class="h-64 w-full rounded-base object-cover" src="{{ asset('assets/images/skp-mecz2.jpg') }}" alt="Mecz Słupecki Klub Piłkarski" data-aos="flip-up" data-aos-delay="200">
            <img class="h-64 w-full rounded-base object-cover" src="{{ asset('assets/images/skp-mecz.jpg') }}" alt="Mecz Słupecki Klub Piłkarski" data-aos="flip-up" data-aos-delay="300">
            <img class="h-64 w-full rounded-base object-cover" src="{{ asset('assets/images/skp-mistrz.jpg') }}" alt="Mistrz Słupecki Klub Piłkarski" data-aos="flip-up" data-aos-delay="400">
        </div>

    </div>
</section>
@endsection