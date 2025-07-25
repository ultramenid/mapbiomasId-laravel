@extends('layouts.indexLayout')

@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
    @include('partials.topbar')
    <div class="max-w-5xl mx-auto px-4">
        <h1 class="font-semibold text-center uppercase">{{__('Komite Penasihat Akademik') }}</h1>
        <div class="sm:w-4xl w-full  ">
            <p class="mt-4 font-light leading-relaxed">{{__('Mengingat pentingnya kualitas data dan peta yang dihasilkan, MapBiomas Indonesia memandang perlu keberadaan Komite Penasihat Akademik (Scientific Advisory Committee - SAC) yang berperan memberikan masukan-masukan kepada MapBiomas Indonesia agar senantiasa selaras dengan prinsip dan/atau metode ilmiah.') }}</p>
            <p class="mt-4 font-light leading-relaxed">{{__('Oleh karena itu, pada 2023–sebelum rilis Koleksi 2–MapBiomas Indonesia membentuk Komite Penasihat Akademik yang terdiri atas pakar dan praktisi yang relevan. Keanggotaan komite ini dipilih dengan pertimbangan (i) keterwakilan geografis, (ii) keilmuan yang saling melengkapi, (iii) gender balance, dan (iv) multipihak, dan dengan durasi 2 tahun.') }}</p>
            <p class="mt-4 font-light leading-relaxed">{{__('Anggota Komite Penasihat Akademik MapBiomas Indonesia 2023-2025 adalah sebagai berikut:') }}</p>
        </div>

        {{-- sac --}}
        <div class="flex flex-wrap justify-between gap-2 mt-4 px-4">
            <!-- Card 1 -->
            <div class="flex sm:flex-row flex-col sm:items-start items-center  gap-6 mt-12 sm:w-[48%] w-full">
                <div class="w-52  h-52 ">
                    <img
                    src="{{ asset('assets/tim/Prof. Projo Danoedoro 1.png') }}"
                    alt="Prof. Projo Danoedoro"
                    class="w-full h-full object-cover object-top  rounded-full bg-tim"
                    />
                </div>

                <div class="sm:w-6/12 w-full">
                <h3 class="font-semibold text-sm ">Prof. PROJO DANOEDORO</h3>
                <p class="text-gray-700 text-sm leading-relaxed mt-1 font-light">
                    {{__('Guru besar penginderaan jauh Fakultas Geografi Universitas Gadjah Mada ini aktif melakukan riset dan publikasi tulisan akademik mengenai pemetaan tutupan lahan Indonesia. Dapat dikontak melalui surat elektronik projo.danoedoro@geo.ugm.ac.id dan pdanoedoro@ugm.ac.id.') }}
                </p>
                </div>
            </div>
            <!-- Card 1 -->
            <div class="flex sm:flex-row flex-col sm:items-start  items-center gap-6  mt-12 sm:w-[48%] w-full">
                <div class="w-52  h-52">
                    <img
                    src="{{ asset('assets/tim/Arif Dermawan 1.png') }}"
                    alt="Dr. ARIEF DARMAWAN"
                    class="w-full h-full object-cover object-top  rounded-full bg-tim"
                    />
                </div>
                <div class="sm:w-6/12 w-full">
                <h3 class="font-semibold text-sm ">Dr. ARIEF DARMAWAN</h3>
                <p class="text-gray-700 text-sm leading-relaxed mt-1 font-light">
                    {{__('Dosen Jurusan Kehutanan Fakultas Pertanian Universitas Lampung ini beroleh gelar doktor dari The University of Tokyo. Dapat dikontak melalui surat elektronik arief.darmawan@gmail.com.') }}
                </p>
                </div>
            </div>
            <!-- Card 1 -->
            <div class="flex sm:flex-row flex-col sm:items-start  items-center gap-6  mt-12 sm:w-[48%] w-full">
                <div class="w-52  h-52">
                    <img
                    src="{{ asset('assets/tim/Dr. Nur Hygiawati Rahayu.png') }}"
                    alt="Dr. Nur Hygiawati Rahayu"
                    class="w-full h-full object-cover object-top  rounded-full bg-tim"
                    />
                </div>

                <div class="sm:w-6/12 w-full">
                <h3 class="font-semibold text-sm ">Dr. NUR HYGIAWATI RAHAYU</h3>
                <p class="text-gray-700 text-sm leading-relaxed mt-1 font-light">
                    {{__('Pejabat struktural di BAPPENAS/Kementerian Perencanaan Pembangunan Nasional. Memperoleh gelar doktor dari University of Queensland. Dapat dikontak melalui surat elektronik nur.hrahayu@bappenas.go.id.') }}</a>
                </p>
                </div>
            </div>
             <!-- Card 1 -->
            <div class="flex sm:flex-row flex-col sm:items-start  items-center gap-6  mt-12 sm:w-[48%] w-full">
                <img
                src="{{ asset('assets/tim/Dr. Hasriani.png') }}"
                alt="Dr. HASRIANI MUIS"
                class="w-52 h-52 object-cover rounded-full bg-tim"
                />
                <div>
                <h3 class="font-semibold text-sm">Dr. HASRIANI MUIS</h3>
                <p class="text-gray-700 text-sm leading-relaxed mt-1 font-light">
                    {{__('Ahli sistem informasi geospasial ini merupakan dosen Fakultas Kehutanan Universitas Tadulako. Dapat dikontak melalui surat elektronik hasrianimuis@gmail.com.') }}</a>.
                </p>
                </div>
            </div>
             <!-- Card 1 -->
            <div class="flex sm:flex-row flex-col sm:items-start  items-center gap-6  mt-12 sm:w-[48%] w-full">
                <div class="w-52  h-52">
                    <img
                    src="{{ asset('assets/tim/Francina Frenshegty Kesaulija.png') }}"
                    alt="Francina Frenshegty Kesaulija"
                    class="w-full h-full object-cover object-top  rounded-full bg-tim"
                    />
                </div>

                <div class="sm:w-6/12 w-full">
                <h3 class="font-semibold text-sm  text-nowrap uppercase">Francina Frenshegty Kesaulija</h3>
                <p class="text-gray-700 text-sm leading-relaxed mt-1 font-light">
                    {{__('Dosen Fakultas Kehutanan Universitas Papua ini memperoleh gelar master dari Australian National University. Dapat dikontak melalui surat elektronik f.kesaulija@unipa.ac.id.') }}</a>.
                </p>
                </div>
            </div>





        </div>


    </div>



    @include('partials.footer')
@endsection
