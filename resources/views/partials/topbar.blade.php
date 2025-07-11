<div class="max-w-6xl mx-auto flex items-center justify-between py-8 px-4 ">
    <div x-data="{ open: false }" class="relative select-none">
        <svg @click="open = !open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7 text-red-500 cursor-pointer">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
        </svg>
        <div style="display: none !important;" class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 select-none"
        x-show="open"
        @click.away="open = false"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-50"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95">
            <a href="#" class="block px-4 py-1 text-gray-800 hover:bg-gray-100">{{__('About') }}</a>
            <a href="#" class="block px-4 py-1 text-gray-800 hover:bg-gray-100">{{__('Team') }}</a>
            <a href="#" class="block px-4 py-1 text-gray-800 hover:bg-gray-100">{{__('FAQ') }}</a>

        </div>
    </div>
    <img src="assets/logo mapbiomas.png" alt="Mapbiomas Indonesia" class="sm:h-20 h-10 select-none">
    <div class="sm:flex gap-1 hidden">
        <a href="{{ route(Route::currentRouteName(), 'id') }}" class="text-sm @if(App::getLocale() == 'id') font-semibold @else font-light text-gray-500 @endif">Indonesia</a>
        <a href="#" class="">|</a>
        <a href="{{ route(Route::currentRouteName(), 'en') }}" class="text-sm @if(App::getLocale() == 'en') font-semibold @else font-light text-gray-500 @endif">English</a>
    </div>
    <div class="sm:hidden gap-1 flex">
        <a href="{{ route(Route::currentRouteName(), 'id') }}" class="text-sm @if(App::getLocale() == 'id') font-semibold @else font-light text-gray-500 @endif">ID</a>
        <a href="#" class="">|</a>
        <a href="{{ route(Route::currentRouteName(), 'en') }}" class="text-sm @if(App::getLocale() == 'en') font-semibold @else font-light text-gray-500 @endif">EN</a>
    </div>
</div>
