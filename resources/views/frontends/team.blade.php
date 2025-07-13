@extends('layouts.indexLayout')

@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
    @include('partials.topbar')
    <div class="max-w-5xl mx-auto px-4">
        <h1 class="font-semibold ">KOMITE PENASIHAT AKADEMIK</h1>
        <div class="sm:w-4xl w-full text-sm ">
            <p class="mt-4 font-light leading-relaxed">Mengingat pentingnya kualitas data dan peta yang dihasilkan, MapBiomas Indonesia memandang perlu keberadaan Komite Penasihat Akademik (Scientific Advisory Committee - SAC) yang berperan memberikan masukan-masukan kepada MapBiomas Indonesia agar senantiasa selaras dengan prinsip dan/atau metode ilmiah.</p>
            <p class="mt-4 font-light leading-relaxed">Oleh karena itu, pada 2023–sebelum rilis Koleksi 2–MapBiomas Indonesia membentuk Komite Penasihat Akademik yang terdiri atas pakar dan praktisi yang relevan. Keanggotaan komite ini dipilih dengan pertimbangan (i) keterwakilan geografis, (ii) keilmuan yang saling melengkapi, (iii) gender balance, dan (iv) multipihak, dan dengan durasi 2 tahun.</p>
            <p class="mt-4 font-light leading-relaxed">Anggota Komite Penasihat Akademik MapBiomas Indonesia 2023-2025 adalah sebagai berikut:</p>
        </div>

        {{-- sac --}}
        <div class="flex flex-wrap justify-between gap-2 mt-4 px-4">
            <!-- Card 1 -->
            <div class="flex sm:flex-row flex-col sm:items-start items-center  gap-6 mt-12 sm:w-[48%] w-full">
                <img
                src="https://images.unsplash.com/photo-1632789124528-07b43ba96460?q=80&w=500&auto=format&fit=crop&ixlib=rb-4.0.3"
                alt="Prof. Projo Danoedoro"
                class="w-52 h-52 object-cover rounded-full"
                />
                <div>
                <h3 class="font-semibold text-sm uppercase">Prof. Projo Danoedoro</h3>
                <p class="text-gray-700 text-xs leading-relaxed mt-1">
                    Guru besar penginderaan jauh Fakultas Geografi Universitas Gadjah Mada ini aktif melakukan riset dan publikasi tulisan akademik mengenai pemetaan tutupan lahan Indonesia. Dapat dikontak melalui surat elektronik projo.danoedoro@geo.ugm.ac.id dan pdanoedoro@ugm.ac.id.
                </p>
                </div>
            </div>
            <!-- Card 1 -->
            <div class="flex sm:flex-row flex-col sm:items-start  items-center gap-6  mt-12 sm:w-[48%] w-full">
                <img
                src="https://images.unsplash.com/photo-1632789124528-07b43ba96460?q=80&w=500&auto=format&fit=crop&ixlib=rb-4.0.3"
                alt="Dr. Arief Darmawan."
                class="w-52 h-52 object-cover rounded-full"
                />
                <div>
                <h3 class="font-semibold text-sm uppercase">Dr. Arief Darmawan</h3>
                <p class="text-gray-700 text-xs leading-relaxed mt-1">
                    Dosen Jurusan Kehutanan Fakultas Pertanian Universitas Lampung ini beroleh gelar doktor dari The University of Tokyo. Dapat dikontak melalui surat elektronik arief.darmawan@gmail.com.
                </p>
                </div>
            </div>
            <!-- Card 1 -->
            <div class="flex sm:flex-row flex-col sm:items-start  items-center gap-6  mt-12 sm:w-[48%] w-full">
                <img
                src="https://images.unsplash.com/photo-1632789124528-07b43ba96460?q=80&w=500&auto=format&fit=crop&ixlib=rb-4.0.3"
                alt="Dr. Nur Hygiawati Rahayu."
                class="w-52 h-52 object-cover rounded-full"
                />
                <div>
                <h3 class="font-semibold text-sm uppercase">Dr. Nur Hygiawati Rahayu</h3>
                <p class="text-gray-700 text-xs leading-relaxed mt-1">
                    Pejabat struktural di BAPPENAS/Kementerian Perencanaan Pembangunan Nasional. Memperoleh gelar doktor dari University of Queensland. Dapat dikontak melalui surat elektronik nur.hrahayu@bappenas.go.id.</a>.
                </p>
                </div>
            </div>
             <!-- Card 1 -->
            <div class="flex sm:flex-row flex-col sm:items-start  items-center gap-6  mt-12 sm:w-[48%] w-full">
                <img
                src="https://images.unsplash.com/photo-1632789124528-07b43ba96460?q=80&w=500&auto=format&fit=crop&ixlib=rb-4.0.3"
                alt="Dr. Hasriani Muis."
                class="w-52 h-52 object-cover rounded-full"
                />
                <div>
                <h3 class="font-semibold text-sm">Dr. Hasriani Muis</h3>
                <p class="text-gray-700 text-xs leading-relaxed mt-1">
                    Ahli sistem informasi geospasial ini merupakan dosen Fakultas Kehutanan Universitas Tadulako. Dapat dikontak melalui surat elektronik hasrianimuis@gmail.com.</a>.
                </p>
                </div>
            </div>
             <!-- Card 1 -->
            <div class="flex sm:flex-row flex-col sm:items-start  items-center gap-6  mt-12 sm:w-[48%] w-full">
                <img
                src="https://images.unsplash.com/photo-1632789124528-07b43ba96460?q=80&w=500&auto=format&fit=crop&ixlib=rb-4.0.3"
                alt="Francina Frenshegty Kesaulija."
                class="w-52 h-52 object-cover rounded-full"
                />
                <div>
                <h3 class="font-semibold text-sm uppercase text-nowrap">Francina Frenshegty Kesaulija</h3>
                <p class="text-gray-700 text-xs leading-relaxed mt-1">
                    Dosen Fakultas Kehutanan Universitas Papua ini memperoleh gelar master dari Australian National University. Dapat dikontak melalui surat elektronik f.kesaulija@unipa.ac.id.</a>.
                </p>
                </div>
            </div>





        </div>

        <h1 class="font-semibold mt-24">TIM TEKNIS</h1>
        <h2 class="mt-6 font-semibold">Koordinator</h2>
        <div class="flex flex-wrap justify-between gap-2 px-4">
            <!-- Card 1 -->
            <div class="flex sm:flex-row flex-col sm:items-start items-center  gap-6 mt-12 sm:w-[48%] w-full">
                <img
                src="https://images.unsplash.com/photo-1632789124528-07b43ba96460?q=80&w=500&auto=format&fit=crop&ixlib=rb-4.0.3"
                alt="TIMER MANURUNG"
                class="w-52 h-52 object-cover rounded-full"
                />
                <div>
                <h3 class="font-semibold text-sm uppercase">TIMER MANURUNG (Koordinator Umum)</h3>
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
                src="https://images.unsplash.com/photo-1632789124528-07b43ba96460?q=80&w=500&auto=format&fit=crop&ixlib=rb-4.0.3"
                alt="DEDY SUKMARA "
                class="w-52 h-52 object-cover rounded-full"
                />
                <div>
                <h3 class="font-semibold text-sm uppercase">DEDY SUKMARA <br> (Koordinator Teknis)</h3>
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
                src="https://images.unsplash.com/photo-1632789124528-07b43ba96460?q=80&w=500&auto=format&fit=crop&ixlib=rb-4.0.3"
                alt="AGE KRIDALAKSANA"
                class="w-52 h-52 object-cover rounded-full"
                />
                <div>
                <h3 class="font-semibold text-sm uppercase">AGE KRIDALAKSANA (Koordinator Teknis)</h3>
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

        <h2 class="mt-12 font-semibold">Tim Inti</h2>
        @include('partials.timInti')

        <h2 class="mt-24 font-semibold">Tim Regio</h2>
        @include('partials.timRegio')

    </div>



    @include('partials.footer')
@endsection
