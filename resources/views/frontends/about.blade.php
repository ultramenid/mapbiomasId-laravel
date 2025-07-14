@extends('layouts.indexLayout')

@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
    @include('partials.topbar')
    <div class="max-w-5xl mx-auto ">
        <img src="{{ asset('assets/hero-col-2.jpeg') }}" alt="Tim MapBiomas Indonesia" class="w-full sm:h-[280px] h-full object-cover object-top">
        <div class="max-w-2xl mx-auto mt-4 px-4">
            <h1 class="mt-6 text-xl text-center uppercase font-semibold">{{__('Tentang') }}</h1>
            <div class="prose max-w-none mt-4 text-sm  leading-relaxed font-light">
                {!! optional($data)->content !!}
            </div>
        </div>
    </div>



    @include('partials.footer')
@endsection
