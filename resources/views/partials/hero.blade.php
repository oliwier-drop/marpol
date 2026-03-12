<section id="hero-subpage" class="bg-gray-200 pt-32 pb-12 overflow-hidden">
    <div class="container mx-auto px-4">
        <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse flex-wrap">
            <li class="inline-flex items-center">
                <a href="{{ url('/') }}" class="inline-flex items-center text-sm font-medium text-body hover:text-fg-brand">
                    <svg class="w-4 h-4 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/></svg>
                    Marpol
                </a>
            </li>
            @if(isset($breadcrumb_parent) && isset($breadcrumb_parent_url))
            <li>
                <div class="flex items-center space-x-1.5">
                    <svg class="w-3.5 h-3.5 rtl:rotate-180 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/></svg>
                    <a href="{{ $breadcrumb_parent_url }}" class="text-sm font-medium text-body hover:text-fg-brand">{{ $breadcrumb_parent }}</a>
                </div>
            </li>
            @endif
            <li>
                <div class="flex items-center space-x-1.5">
                    <svg class="w-3.5 h-3.5 rtl:rotate-180 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/></svg>
                    <span class="inline-flex items-center text-sm font-medium text-body-subtle">@yield('title')</span>
                </div>
            </li>
        </ol>
        </nav>

        <div class="mt-6 flex flex-col md:flex-row md:items-center md:justify-between gap-8 min-w-0">
            <div class="space-y-2 md:space-y-3 max-w-2xl min-w-0">
                <h1 class="text-2xl md:text-3xl font-bold text-left">@yield('title')</h1>
                <p class="text-sm md:text-base font-medium text-body-subtle">
                    @yield('description')
                </p>
            </div>
            <div class="relative flex justify-center md:justify-end items-center h-48 md:h-64 min-w-0">
                <img
                    src="{{ asset('assets/images/icons/boxes.png') }}"
                    alt="Box-Icon"
                    class="max-h-full w-auto max-w-full object-contain"
                >
            </div>
        </div>
    </div>
</section>