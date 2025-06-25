<div class="max-w-6xl mx-auto flex items-center justify-between py-8">
    <div x-data="{ open: false }" class="relative">
        <svg @click="open = !open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7 text-red-500 cursor-pointer">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
        </svg>
        {{-- <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10" x-show="open" @click.away="open = false">
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Home</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">MapBiomas</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Fire</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Alert</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">About</a>

        </div> --}}
    </div>
    <img src="assets/logo mapbiomas.png" alt="Mapbiomas Indonesia" class="h-20">
    <div class="flex gap-1">
        <a href="{{ route(Route::currentRouteName(), 'id') }}" class="text-sm @if(App::getLocale() == 'id') font-semibold @else font-light text-gray-500 @endif">Indonesia</a>
        <a href="#" class="">|</a>
        <a href="{{ route(Route::currentRouteName(), 'en') }}" class="text-sm @if(App::getLocale() == 'en') font-semibold @else font-light text-gray-500 @endif">English</a>
    </div>
</div>
