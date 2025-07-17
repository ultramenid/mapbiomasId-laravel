@extends('layouts.indexLayout')

@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
    @include('partials.topbar')

     <div class="max-w-6xl mx-auto px-4 ">
        <a href="#" class=" px-1 py-1  text-biru-wallacea bg-mapbiomasid text-white">News</a>


        <div class="flex justify-between sm:flex-row flex-col gap-10 mt-3">
            <div class="flex flex-col  sm:w-[27%] w-full">
                <div>
                    <img src="{{ asset('assets/landy.jpeg') }}" alt="Mapbiomas Indonesia" class="h-44 w-full object-cover object-center">

                </div>
                <a class="font-light text-sm mt-4">{{__('Agustus') }} 2024</a>
                <a href="#" class="font-bold">{{__('Presentasi MapBiomas Indonesia kepada BRGM') }}</a>
                <p class="mt-3 font-light text-sm">{{__('MapBiomas Indonesia menyampaikan bahwa land cover dynamics 3.0 akan memuat data dan peta berbagai kelas yang relevan dengan Badan Restorasi Gambut dan Mangrove.') }}</p>
            </div>
            <div class="flex flex-col sm:w-[27%] w-full">
                <div>
                    <img src="https://fire.mapbiomas.id/storage/files/photos/8AwhOdHFHoi2me7mkeDxtHTcXnUzQauMhh4EAVlT.jpg" alt="Mapbiomas Fire" class="h-44 w-full object-cover object-center">

                </div>
                <a class="font-light text-sm mt-4">April 2024</a>
                @if (app()->getLocale() == 'id')
                    <a href="https://fire.mapbiomas.id/id/news/2/pelatihan-lanjutan-pemetaan-lahan-terbakar-di-ipam-brasilia" class="font-bold">Pelatihan Lanjutan Pemetaan Lahan Terbakar di IPAM Brasilia</a>
                    <p class="mt-3 font-light text-sm">Pengetahuan yang diperoleh melalui pelatihan ini akan dikembangkan MapBiomas Indonesia membangun MapBiomas Indonesia | FIRE yang direncanakan rilis pada kuartal ketiga atau keempat 2024.</p>

                @else
                    <a href="https://fire.mapbiomas.id/en/news/2/pelatihan-lanjutan-pemetaan-lahan-terbakar-di-ipam-brasilia" class="font-bold">Advanced Training in Burnt Land Mapping with IPAM in Brasilia</a>
                    <p class="mt-3 font-light text-sm">MapBiomas Indonesia will apply knowledge secured through this training to develop MapBiomas Indonesia | FIRE, which is planned for release in the third or fourth quarter of 2024</p>

                 @endif

            </div>
            <div class="flex flex-col sm:w-[27%] w-full">
                <div>
                    <img src="https://images.unsplash.com/photo-1632789124528-07b43ba96460?q=80&w=3432&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Mapbiomas Indonesia" class="h-44 w-full object-cover object-center">

                </div>
                <a class="font-light text-sm mt-4">{{__('Juni') }} 2024</a>
                <a href="#" class="font-bold">{{__('Mapbiomas Alerta: Pelatihan validasi alert deforestasi') }}</a>
                <p class="mt-3 font-light text-sm">{{__('MapBiomas Indonesia melatih 10 calon validator yang diproyeksikan memvalidasi setiap alert deforestasi pada 2024 di Indonesia.') }}</p>
            </div>


        </div>
    </div>

    <div class="max-w-6xl mx-auto flex justify-between gap-12 px-4 items-center mt-12">
        <div class="border-b border-gray-600 w-full">
        </div>
        <a class="text-xl font-semibold text-mapbiomasid">INITIATIVES</a>
        <div class="border-b border-gray-600 w-full">
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 mt-12">
        <div class="flex sm:flex-row  justify-between flex-col gap-10 mt-3">
            <div class="flex flex-col sm:w-[27%] w-full items-center">
                <a href="https://landy.mapbiomas.id" target="_blank">
                    <img src="{{ asset('assets/logo landy.png') }}" alt="Mapbiomas Indonesia" class="h-12">

                </a>
                <p class=" mt-4 text-sm text-center font-light">{{__('Menampilkan dinamika tutupan lahan Indonesia. Statistik, peta, hingga transisi tutupan, pun penampalannya dengan tematik penguasaan lahan tersedia di platform ini.') }}</p>
            </div>
            <div class="flex flex-col sm:w-[27%] w-full items-center">
                <a href="https://fire.mapbiomas.id/id" target="_blank">
                    <img src="{{ asset('assets/logo-fire.png') }}" alt="Mapbiomas Indonesia" class="h-12">

                </a>
                <p class=" mt-4 text-sm text-center font-light">{{__('Menyajikan data dan peta area terbakar di Indonesia melalui pemaksimalkan Google Earth Engine dan pendekatan deep learning terhadap citra satelit yang terbuka bagi publik.') }}</p>
            </div>
            <div class="flex flex-col sm:w-[27%] w-full items-center">
                <div>
                    <img src="{{ asset('assets/logo-alerta.png') }}" alt="Mapbiomas Indonesia" class="h-12">

                </div>
                <p class=" mt-4 text-sm text-center font-light">{{__('Setiap alert deforestasi diverifikasi, lalu divalidasi citra satelit resolusi tinggi terkini, sehingga tersaji data dan peta deforestasi aktual.') }}</p>
            </div>


        </div>
    </div>


    @include('partials.footer')
@endsection
