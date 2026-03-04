@extends('layouts.subpage')

@section('title')
    Kontakt
@endsection

@section('description')
    Skontaktuj się z nami, jeśli masz pytania lub potrzebujesz pomocy.
@endsection
    
@section('content')
<section id="contact-details" class="bg-gray-100 pt-8">

</section>

<section id="contact-form" class="bg-gray-100 pt-8">
    <div class="container mx-auto px-4 py-12">
        
        <div class="grid gap-10 md:grid-cols-2 items-start">
            <!-- Formularz po lewej -->
            <form class="space-y-6 bg-white rounded-2xl shadow-sm ring-1 ring-gray-200/70 p-6">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Imię i nazwisko</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="block w-full rounded-base border border-default bg-gray-50 px-3 py-2 text-sm text-gray-900 focus:border-brand focus:ring-brand"
                        placeholder="Twoje imię i nazwisko"
                    >
                </div>

                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Adres e-mail</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="block w-full rounded-base border border-default bg-gray-50 px-3 py-2 text-sm text-gray-900 focus:border-brand focus:ring-brand"
                        placeholder="twoj.email@example.com"
                    >
                </div>

                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Telefon (opcjonalnie)</label>
                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        class="block w-full rounded-base border border-default bg-gray-50 px-3 py-2 text-sm text-gray-900 focus:border-brand focus:ring-brand"
                        placeholder="+48 123 456 789"
                    >
                </div>

                <div>
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Wiadomość</label>
                    <textarea
                        id="message"
                        name="message"
                        rows="5"
                        class="block w-full rounded-base border border-default bg-gray-50 px-3 py-2 text-sm text-gray-900 focus:border-brand focus:ring-brand"
                        placeholder="Napisz, w czym możemy pomóc..."
                    ></textarea>
                </div>

                {{-- Cloudflare Turnstile --}}
                <div class="pt-2">
                    <div
                        class="cf-turnstile"
                        data-sitekey="{{ config('services.turnstile.site_key') }}"
                        data-theme="light"
                    ></div>
                </div>

                <button
                    type="submit"
                    class="inline-flex w-full items-center justify-center rounded-base bg-gray-100 px-5 py-3 text-sm font-semibold text-black shadow-xs transition hover:bg-gray-150 focus:outline-none focus:ring-4 focus:ring-brand-medium"
                >
                    Wyślij wiadomość
                </button>
            </form>

            <!-- Mapa Google po prawej -->
            <div class="overflow-hidden rounded-2xl shadow-sm ring-1 ring-gray-200/70 h-[350px] md:h-full">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.2259436466503!2d17.89537671450972!3d52.32245965808636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4704c62f00c76a51%3A0x3c840facd8e82928!2sWhot!5e0!3m2!1spl!2spl!4v1772618989471!5m2!1spl!2spl"
                    height="100%"
                    width="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
        </div>
    </div>
</section>
    
@endsection