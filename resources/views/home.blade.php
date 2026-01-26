@extends('layouts.app')

@section('title', '')

@section('header')
        <section id="hero">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="flex flex-col justify-center">
                        <h1 class="text-4xl font-bold">Strona główna</h1>
                    </div>
                    <div class="flex flex-col justify-center">
                        <img src="{{ Storage::url('images/hero.png') }}" alt="Hero Image" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </section>
@endsection

@section('content')
    <h1>Strona główna</h1>
@endsection