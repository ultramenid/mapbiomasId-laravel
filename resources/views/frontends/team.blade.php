@extends('layouts.indexLayout')

@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
    @include('partials.topbar')
    <div class="max-w-5xl mx-auto px-4">

        <div class="w-full justify-center items-center">
            <h1 class="font-bold mt-24 sm:text-3xl text-2xl text-center ">TIM TEKNIS</h1>
        </div>
        <h2 class="mt-2 font-semibold text-2xl text-center">Koordinator</h2>
        <div class="flex flex-wrap justify-between gap-2 px-4">
            <!-- Card 1 -->
            <div class="flex sm:flex-row flex-col sm:items-start items-center  gap-6 mt-12 sm:w-[48%] w-full">
                <img
                src="{{ asset('assets/tim/Timer.png') }}"
                alt="TIMER MANURUNG"
                class="w-52 h-52 object-cover rounded-full bg-tim"
                />
                <div>
                <h3 class="font-semibold text-sm uppercase">TIMER MANURUNG <br>({{__('Koordinator Umum') }})</h3>
                <div class="flex flex-col gap-2 mt-3">
                    <div class="flex gap-2">
                        <a x-data x-tooltip.raw="Landy - Collection 1" class="h-6 w-6 rounded-full bg-landy cursor-pointer"></a>
                        <a x-data x-tooltip.raw="Landy - Collection 2" class="h-6 w-6 rounded-full bg-landy cursor-pointer"></a>
                        <a x-data x-tooltip.raw="Landy - Collection 3" class="h-6 w-6 rounded-full bg-landy cursor-pointer"></a>

                    </div>
                    <div class="flex gap-2">
                        <a x-data x-tooltip.raw="Fire - Collection 1" class="h-6 w-6 rounded-full bg-fire cursor-pointer"></a>

                    </div>
                </div>
                </div>
            </div>
            <!-- Card 1 -->
            <div class="flex sm:flex-row flex-col sm:items-start  items-center gap-6  mt-12 sm:w-[48%] w-full">
                <img
                src="{{ asset('assets/tim/dd.png') }}"
                alt="DEDY SUKMARA "
                class="w-52 h-52 object-cover rounded-full bg-tim object-top"
                />
                <div>
                <h3 class="font-semibold text-sm uppercase">DEDY SUKMARA <br> ({{__('Koordinator Teknis') }})</h3>
                <div class="flex flex-col gap-2 mt-3">
                    <div class="flex gap-2">
                        <a x-data x-tooltip.raw="Landy - Collection 1" class="h-6 w-6 rounded-full bg-landy cursor-pointer"></a>
                        <a x-data x-tooltip.raw="Landy - Collection 2" class="h-6 w-6 rounded-full bg-landy cursor-pointer"></a>
                        <a x-data x-tooltip.raw="Landy - Collection 3" class="h-6 w-6 rounded-full bg-landy cursor-pointer"></a>

                    </div>
                    <div class="flex gap-2">
                        <a x-data x-tooltip.raw="Fire - Collection 1" class="h-6 w-6 rounded-full bg-fire cursor-pointer"></a>

                    </div>
                </div>
                </div>
            </div>
            <!-- Card 1 -->
            <div class="flex sm:flex-row flex-col sm:items-start  items-center gap-6  mt-12 sm:w-[48%] w-full">
                <img
                src="{{ asset('assets/tim/EBR07447_1.png') }}"
                alt="AGE KRIDALAKSANA"
                class="w-52 h-52 object-cover rounded-full bg-tim"
                />
                <div>
                <h3 class="font-semibold text-sm uppercase">AGE KRIDALAKSANA <br>({{__('Koordinator Teknis') }})</h3>
                <div class="flex flex-col gap-2 mt-3">
                    <div class="flex gap-2">
                        <a x-data x-tooltip.raw="Landy - Collection 1" class="h-6 w-6 rounded-full bg-landy cursor-pointer"></a>
                        <a x-data x-tooltip.raw="Landy - Collection 2" class="h-6 w-6 rounded-full bg-landy cursor-pointer"></a>
                        <a x-data x-tooltip.raw="Landy - Collection 3" class="h-6 w-6 rounded-full bg-landy cursor-pointer"></a>

                    </div>
                    <div class="flex gap-2">
                        <a x-data x-tooltip.raw="Fire - Collection 1" class="h-6 w-6 rounded-full bg-fire cursor-pointer"></a>

                    </div>
                </div>
                </div>
            </div>

        </div>

        <h2 class="mt-12 font-semibold text-2xl text-center">Tim Inti</h2>
        @include('partials.timInti')

        <h2 class="mt-24 font-semibold text-2xl text-center">Tim Regio</h2>
        @include('partials.timRegio')

    </div>



    @include('partials.footer')
@endsection
