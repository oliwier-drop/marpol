<div id="cookie-consent-banner" class="fixed bottom-[1vh] left-[1vw] z-50 max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg p-4 text-sm text-gray-800 flex flex-col gap-3 hidden">
    <p class="font-semibold">
        Używamy plików cookie
    </p>
    <p class="text-xs text-gray-600">
        Korzystamy z plików cookie, aby analizować ruch na stronie oraz dostosowywać treści. Kontynuując korzystanie z serwisu wyrażasz zgodę na ich użycie. Szczegóły znajdziesz w naszej
        <a href="/polityka-prywatnosci" class="text-xs text-gray-500 underline hover:text-gray-700">polityce prywatności</a>.
    </p>
    <div class="flex items-center justify-end gap-2">
        <button id="cookie-consent-accept" type="button" class="inline-flex items-center justify-center rounded-base bg-black px-4 py-2 text-xs font-medium text-white hover:bg-black/80 focus:outline-none focus:ring-2 focus:ring-black/50">
            Akceptuję
        </button>
        <button id="cookie-consent-reject" type="button" class="inline-flex items-center justify-center rounded-base bg-gray-200 px-4 py-2 text-xs font-medium text-gray-800 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">
            Odrzuć
        </button>
        <button id="cookie-consent-settings" type="button" class="inline-flex items-center justify-center rounded-base bg-gray-200 px-4 py-2 text-xs font-medium text-gray-800 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">
            Zmień ustawienia
        </button>
    </div>
</div>

<button
    id="cookie-preferences-trigger"
    type="button"
    class="fixed bottom-6 left-6 z-40 h-12 w-12 rounded-full bg-black text-white shadow-lg flex items-center justify-center hover:bg-black/80 focus:outline-none focus:ring-2 focus:ring-black/50 hidden"
>
    <span class="sr-only">Otwórz ustawienia plików cookie</span>
    <img src="{{ asset('assets/images/icons/cookie.png') }}" alt="Cookie" class="h-8 w-8">
</button>

<div id="cookie-settings-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40">
    <div class="bg-white rounded-lg shadow-xl max-w-lg w-full mx-4 p-6">
        <div class="flex items-start justify-between mb-4">
            <div>
                <h2 class="text-lg font-semibold text-gray-900">Ustawienia plików cookie</h2>
                <p class="text-xs text-gray-600 mt-1">
                    Zarządzaj preferencjami dotyczącymi plików cookie używanych na naszej stronie.
                </p>
            </div>
            <button id="cookie-settings-close" type="button" class="flex h-8 w-8 items-center justify-center rounded-full text-lg text-gray-500 hover:text-gray-900 hover:bg-gray-100">
                <span class="sr-only">Zamknij</span>
                &times;
            </button>
        </div>

        <div class="space-y-4">
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900">Niezbędne pliki cookie</h3>
                        <p class="text-xs text-gray-600 mt-1">
                            Te pliki cookie są wymagane do prawidłowego działania strony i nie mogą zostać wyłączone.
                        </p>
                    </div>
                    <span class="text-xs font-semibold text-gray-500 uppercase">Zawsze aktywne</span>
                </div>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900">Analityczne pliki cookie</h3>
                        <p class="text-xs text-gray-600 mt-1">
                            Pozwalają nam analizować ruch na stronie i ulepszać nasz serwis.
                        </p>
                    </div>
                    <label class="inline-flex items-center cursor-pointer">
                        <span class="sr-only">Przełącz analityczne cookies</span>
                        <input id="cookie-analytics-toggle" type="checkbox" class="sr-only">
                        <div class="cookie-toggle-track"></div>
                    </label>
                </div>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900">Marketingowe pliki cookie</h3>
                        <p class="text-xs text-gray-600 mt-1">
                            Umożliwiają wyświetlanie spersonalizowanych treści i reklam na podstawie Twoich zainteresowań.
                        </p>
                    </div>
                    <label class="inline-flex items-center cursor-pointer">
                        <span class="sr-only">Przełącz marketingowe cookies</span>
                        <input id="cookie-marketing-toggle" type="checkbox" class="sr-only">
                        <div class="cookie-toggle-track"></div>
                    </label>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-3">
            <button id="cookie-settings-cancel" type="button" class="text-xs text-gray-600 hover:text-gray-900 underline">
                Anuluj
            </button>
            <button id="cookie-settings-save" type="button" class="inline-flex items-center justify-center rounded-base bg-black px-6 py-2 text-xs font-medium text-white hover:bg-black/80 focus:outline-none focus:ring-2 focus:ring-black/50">
                Zapisz ustawienia
            </button>
        </div>
    </div>
</div>