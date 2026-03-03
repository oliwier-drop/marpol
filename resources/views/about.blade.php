@extends('layouts.subpage')

@section('title')
    O nas
@endsection

@section('description')
Trochę o naszej historii oraz naszych wartościach.
@endsection
    
@section('content')

<section id="values" class="bg-gray-100">
    <div class="container mx-auto px-4 py-12">
        <h2 class="text-2xl font-bold text-center mb-8">Nasze wartości</h2>
        <p class="text-base font-normal text-center mb-8">W Marpol dbamy o jakość i estetykę opakowań, oferując szeroki wybór materiałów, kolorów i wzorów. Łączymy innowacyjne, wydajne procesy z ochroną środowiska naturalnego.</p>
    </div>
</section>

<section id="timeline" class="bg-gray-100">
    <div class="container mx-auto px-4 py-12">
        <h2 class="text-2xl font-bold text-center mb-8">Nasza historia</h2>
            <ol class="relative border-s border-default">                  
                <li class="mb-10 ms-4">
                    <div class="absolute w-3 h-3 bg-neutral-quaternary rounded-full mt-1.5 -start-1.5 border border-buffer"></div>
                    <time class="text-sm font-normal leading-none text-body">Rok 2005</time>
                    <h3 class="text-lg font-semibold text-heading my-2">Założenie firmy</h3>
                    <p class="mb-4 text-base font-normal text-body">Firma została założona w 2005 roku przez Edwarda Pocztarka. Początkowo firma produkowała wytłaczanki z papieru, ale wkrótce zaczęła produkować również opakowania z papieru <br>w różnych kształtach i rozmiarach.</p>
                </li>
                <li class="mb-10 ms-4">
                    <div class="absolute w-3 h-3 bg-neutral-quaternary rounded-full mt-1.5 -start-1.5 border border-buffer"></div>
                    <time class="text-sm font-normal leading-none text-body">Rok 2010</time>
                    <h3 class="text-lg font-semibold text-heading my-2">Rozwój firmy</h3>
                    <p class="text-base font-normal text-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                </li>
                <li class="mb-10 ms-4">
                    <div class="absolute w-3 h-3 bg-neutral-quaternary rounded-full mt-1.5 -start-1.5 border border-buffer"></div>
                    <time class="mb-1 text-sm font-normal leading-none text-body">Rok 2015</time>
                    <h3 class="text-lg font-semibold text-heading my-2">Świadomy rozwój</h3>
                    <p class="text-base font-normal text-body">Zaczęliśmy współpracę z najlepszymi producentami materiałów i dostawcami, aby zapewnić jakość oraz być bardziej ekologicznym.</p>
                </li>
                <li class="mb-10 ms-4">
                    <div class="absolute w-3 h-3 bg-neutral-quaternary rounded-full mt-1.5 -start-1.5 border border-buffer"></div>
                    <time class="mb-1 text-sm font-normal leading-none text-body">Rok 2020</time>
                    <h3 class="text-lg font-semibold text-heading my-2">Nowe produkty</h3>
                    <p class="text-base font-normal text-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                </li>
                <li class="mb-10 ms-4">
                    <div class="absolute w-3 h-3 bg-neutral-quaternary rounded-full mt-1.5 -start-1.5 border border-buffer"></div>
                    <time class="mb-1 text-sm font-normal leading-none text-body">Obecnie</time>
                    <h3 class="text-lg font-semibold text-heading my-2">Lokalny lider</h3>
                    <p class="text-base font-normal text-body">Firma jest lokalnym liderem w produkcji opakowań. Produkuje opakowania dla firm z Konina i okolic.</p>
                </li>
            </ol>
    </div>
</section>    

<section id="mission" class="bg-gray-100">
    <div class="container mx-auto px-4 py-12">
        <h2 class="text-2xl font-bold text-center mb-8">Wspieramy region</h2>
        <p class="text-base font-normal text-center mb-8">Wspieramy Słupecki klub piłkarski oraz akademię młodych piłkarzy. Wierzymy w sport i jego edukacyjne znaczenie dla rozwoju młodych ludzi oraz lokalnej społeczności.</p>
        <img src="{{ asset('assets/images/skp-akademia.jpg') }}" alt="Skp-Akademia" class="w-1/2 mx-auto rounded-lg shadow-lg">
    </div>
</section>
@endsection