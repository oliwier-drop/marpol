@extends('layouts.subpage')

@section('title')
    Kontakt
@endsection

@section('description')
    Skontaktuj się z nami, jeśli masz pytania lub potrzebujesz pomocy.
@endsection
    
@section('content')
<section id="contact-details" class="py-12" data-aos="fade-up">
    <div class="container mx-auto px-4 py-12">

        <div class="grid gap-8 md:grid-cols-2">
            <div class="flex flex-col items-center rounded-2xl bg-white/80 shadow-sm ring-1 ring-gray-200/60 p-8 text-center" data-aos="flip-up" data-aos-delay="100">
                <div class="mb-4 inline-flex h-16 w-16 items-center justify-center rounded-full bg-blue-500/10">
                    <img src="{{ asset('assets/images/icons/company.png') }}" alt="Ikona biura" class="h-10 w-10 object-contain">
                </div>
                <h2 class="text-lg font-semibold text-gray-900 mb-2">Kontakt do biura</h2>
                <p class="text-sm text-gray-600 mb-4">
                    Biuro obsługi klienta – informacje ogólne i administracyjne.
                </p>
                <div class="space-y-2 text-sm text-gray-700">
                    <p>
                        <a href="mailto:kontakt@marpol-opakowania.pl" class="inline-flex items-center justify-center gap-2 hover:text-blue-600">
                            <img src="{{ asset('assets/images/icons/mail.png') }}" alt="" class="h-4 w-4">
                            <span>kontakt@marpol-opakowania.pl</span>
                        </a>
                    </p>
                    <p>
                        <a href="tel:+48600600600" class="inline-flex items-center justify-center gap-2 hover:text-blue-600">
                            <img src="{{ asset('assets/images/icons/phone.png') }}" alt="" class="h-4 w-4">
                            <span>+48 600 600 600</span>
                        </a>
                    </p>
                </div>
            </div>

            <div class="flex flex-col items-center rounded-2xl bg-white/80 shadow-sm ring-1 ring-gray-200/60 p-8 text-center" data-aos="flip-up" data-aos-delay="200">
                <div class="mb-4 inline-flex h-16 w-16 items-center justify-center rounded-full bg-emerald-500/10">
                    <img src="{{ asset('assets/images/icons/sales.png') }}" alt="Ikona działu sprzedaży" class="h-10 w-10 object-contain">
                </div>
                <h2 class="text-lg font-semibold text-gray-900 mb-2">Kontakt do działu sprzedaży</h2>
                <p class="text-sm text-gray-600 mb-4">
                    Zapytania ofertowe, wyceny opakowań oraz bieżąca obsługa zamówień.
                </p>
                <div class="space-y-2 text-sm text-gray-700">
                    <p>
                        <a href="mailto:sprzedaz@marpol-opakowania.pl" class="inline-flex items-center justify-center gap-2 hover:text-blue-600">
                            <img src="{{ asset('assets/images/icons/mail.png') }}" alt="" class="h-4 w-4">
                            <span>sprzedaz@marpol-opakowania.pl</span>
                        </a>
                    </p>
                    <p>
                        <a href="tel:+48600600600" class="inline-flex items-center justify-center gap-2 hover:text-blue-600">
                            <img src="{{ asset('assets/images/icons/phone.png') }}" alt="" class="h-4 w-4">
                            <span>+48 600 600 600</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>

</section>

<section id="contact-form" class="py-12" data-aos="fade-up">
    <div class="container mx-auto px-4 py-12">
        

        @if (session('status'))
            <div class="mb-6 rounded-base bg-emerald-50 px-4 py-3 text-sm text-emerald-800">
                {{ session('status') }}
            </div>
        @endif

        <div class="grid gap-10 md:grid-cols-2 items-stretch">

            <!-- Lewa kolumna: nagłówek + formularz -->
            <div class="flex flex-col" data-aos="flip-up" data-aos-delay="100">
                <h2 class="mb-4 text-2xl font-bold text-gray-900">Formularz kontaktowy</h2>
                <form
                    id="contact-form"
                    method="POST"
                    action="{{ route('contact.submit') }}"
                    class="flex-1 space-y-6 bg-white rounded-2xl shadow-sm ring-1 ring-gray-200/70 p-6"
                >
                @csrf
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Imię i nazwisko</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        class="block w-full rounded-base border border-default bg-gray-50 px-3 py-2 text-sm text-gray-900 focus:border-brand focus:ring-brand @error('name') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror"
                        placeholder="Jan Kowalski..."
                    >
                    @error('name')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Adres e-mail</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        class="block w-full rounded-base border border-default bg-gray-50 px-3 py-2 text-sm text-gray-900 focus:border-brand focus:ring-brand @error('email') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror"
                        placeholder="jan.kowalski@example.com..."
                    >
                    @error('email')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Telefon (opcjonalnie)</label>
                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        value="{{ old('phone') }}"
                        class="block w-full rounded-base border border-default bg-gray-50 px-3 py-2 text-sm text-gray-900 focus:border-brand focus:ring-brand @error('phone') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror"
                        placeholder="+48 123 456 789..."
                    >
                    @error('phone')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Wiadomość</label>
                    <textarea
                        id="message"
                        name="message"
                        rows="5"
                        required
                        class="block w-full rounded-base border border-default bg-gray-50 px-3 py-2 text-sm text-gray-900 focus:border-brand focus:ring-brand @error('message') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror"
                        placeholder="Napisz, w czym możemy pomóc..."
                    >{{ old('message') }}</textarea>
                    @error('message')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Cloudflare Turnstile --}}
                <div class="pt-2 @error('turnstile') text-red-600 @enderror">
                    <div
                        class="cf-turnstile"
                        data-sitekey="{{ config('services.turnstile.site_key') }}"
                        data-theme="light"
                    ></div>
                    @error('turnstile')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="inline-flex w-full items-center justify-center rounded-base bg-gray-100 px-5 py-3 text-sm font-semibold text-black shadow-xs transition hover:bg-gray-150 focus:outline-none focus:ring-4 focus:ring-brand-medium"
                >
                    Wyślij wiadomość
                </button>
                </form>
            </div>

            <!-- Prawa kolumna: nagłówek + mapa -->
            <div class="flex flex-col" data-aos="flip-up" data-aos-delay="200">
                <h2 class="mb-4 text-2xl font-bold text-gray-900">Nasza lokalizacja</h2>
                <div class="flex-1 overflow-hidden rounded-2xl shadow-sm ring-1 ring-gray-200/70">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.2259436466503!2d17.89537671450972!3d52.32245965808636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4704c62f00c76a51%3A0x3c840facd8e82928!2sWhot!5e0!3m2!1spl!2spl!4v1772618989471!5m2!1spl!2spl"
                        class="h-full w-full"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
    
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contact-form');
    if (!form) return;

    const statusBox = document.createElement('div');
    statusBox.className = 'mb-6 hidden rounded-base px-4 py-3 text-sm';
    form.parentElement.prepend(statusBox);

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        statusBox.classList.add('hidden');
        statusBox.textContent = '';

        const url = form.action;
        const tokenMeta = document.querySelector('meta[name="csrf-token"]');
        const token = tokenMeta ? tokenMeta.content : '';
        const formData = new FormData(form);

        try {
            const res = await fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': token,
                    'Accept': 'application/json',
                },
                body: formData,
            });

            if (res.ok) {
                let data = {};
                try { data = await res.json(); } catch (err) {}

                form.reset();
                statusBox.className = 'mb-6 rounded-base bg-emerald-50 px-4 py-3 text-sm text-emerald-800';
                statusBox.textContent = data.message ?? 'Dziękujemy, wiadomość została wysłana.';
                statusBox.classList.remove('hidden');
            } else if (res.status === 422) {
                const data = await res.json();
                const firstError = Object.values(data.errors ?? {})[0]?.[0] ?? 'Wystąpił błąd walidacji.';
                statusBox.className = 'mb-6 rounded-base bg-red-50 px-4 py-3 text-sm text-red-800';
                statusBox.textContent = firstError;
                statusBox.classList.remove('hidden');
            } else {
                throw new Error('Błąd serwera');
            }
        } catch (err) {
            statusBox.className = 'mb-6 rounded-base bg-red-50 px-4 py-3 text-sm text-red-800';
            statusBox.textContent = 'Nie udało się wysłać wiadomości. Spróbuj ponownie za chwilę.';
            statusBox.classList.remove('hidden');
        }
    });
});
</script>
@endpush

@endsection