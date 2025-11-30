@extends('layouts.appuser')

@section('content')

<div class="mt-8">

    <!-- Judul -->
    <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900">INFOGRAFIS</h1>
    <p class="text-gray-500 text-xl mt-1">Data Umum & Potensi Desa</p>

    <!-- GRID UTAMA -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-14">

        @php
            $box = "bg-white border-[3px] border-[#E5E5E5] rounded-3xl p-7 shadow-sm relative 
            after:content-['']
            after:absolute after:top-0 after:left-0
            after:w-full after:h-1
            after:bg-gradient-to-r after:from-[#4CAF50] after:to-[#A8E6A3]";
        @endphp

        <!-- Data Wilayah -->
        <div class="{{ $box }}">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Data Wilayah</h2>

            <div class="flex items-center gap-6">
                <img src="{{ asset('assets/maps/desa-bomo.png') }}" class="w-40" alt="Peta Desa Bomo">

                <div class="text-lg text-gray-700 leading-relaxed">
                    Luas Wilayah <strong>1.700 Ha</strong><br>
                    3 Dusun / 1 Desa Bomo, Kab. Banyuwangi
                </div>
            </div>
        </div>

        <!-- Jumlah Penduduk -->
        <div class="{{ $box }}">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Jumlah Penduduk</h2>

            <div class="flex items-center justify-center gap-3 mb-4">
                <img src="{{ asset('assets/icons/people.svg') }}" class="w-12" alt="Penduduk">
                <p class="text-5xl font-extrabold text-gray-900">
                    4.500 <span class="text-lg">JIWA</span>
                </p>
            </div>

            <div class="grid grid-cols-2 gap-5 mt-6">
                <div class="text-center">
                    <img src="{{ asset('assets/icons/male.svg') }}" class="w-8 mx-auto">
                    <p class="text-gray-700 font-semibold text-lg mt-1">2000 Pria</p>
                </div>

                <div class="text-center">
                    <img src="{{ asset('assets/icons/female.svg') }}" class="w-8 mx-auto">
                    <p class="text-gray-700 font-semibold text-lg mt-1">2500 Wanita</p>
                </div>
            </div>
        </div>

        <!-- Mata Pencaharian -->
        <div class="{{ $box }}">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Mata Pencaharian</h2>

            <ul class="text-lg text-gray-800 space-y-3">
                <li class="flex justify-between border-b pb-2">
                    Nelayan <strong>45%</strong>
                </li>
                <li class="flex justify-between border-b pb-2">
                    Petani <strong>30%</strong>
                </li>
                <li class="flex justify-between border-b pb-2">
                    Pedagang <strong>15%</strong>
                </li>
                <li class="flex justify-between">
                    Lainnya <strong>10%</strong>
                </li>
            </ul>
        </div>

        <!-- SARANA UMUM -->
        <div class="{{ $box }}">
            <h2 class="text-2xl font-extrabold text-gray-900 mb-8">Sarana Umum</h2>

            <div class="grid grid-cols-2 gap-10 relative text-center">

                <!-- Garis Pemisah -->
                <div class="absolute top-1/2 left-0 w-full border-t border-green-600"></div>
                <div class="absolute top-0 left-1/2 h-full border-l border-green-600"></div>

                <!-- SD/MI -->
                <div class="flex flex-col items-center">
                    <img src="/images/icons/sd-mi.png" class="w-20 mb-3">
                    <p class="text-xl font-bold text-gray-900">2 SD/MI</p>
                </div>

                <!-- SMP/MTS -->
                <div class="flex flex-col items-center">
                    <img src="/images/icons/smp-mts.png" class="w-20 mb-3">
                    <p class="text-xl font-bold text-gray-900">1 SMP/MTS</p>
                </div>

                <!-- Masjid -->
                <div class="flex flex-col items-center">
                    <img src="/images/icons/masjid.png" class="w-20 mb-3">
                    <p class="text-xl font-bold text-gray-900">2 MASJID</p>
                </div>

                <!-- Mushola -->
                <div class="flex flex-col items-center">
                    <img src="/images/icons/mushola.png" class="w-20 mb-3">
                    <p class="text-xl font-bold text-gray-900">10 MUSHOLA</p>
                </div>

            </div>
        </div>

        <!-- POTENSI UNGGULAN -->
        <div class="{{ $box }} md:col-span-2 flex flex-col justify-center">

            <h2 class="text-3xl font-extrabold mb-10 text-gray-900 text-center">Potensi Unggulan</h2>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-10 text-center place-items-center">

                <!-- Wisata -->
                <a href="{{ route('wisata') }}" class="flex flex-col items-center group cursor-pointer">
                    <div class="w-36 h-36 rounded-full bg-green-100 shadow-inner group-hover:bg-green-200 transition"></div>
                    <p class="mt-4 font-bold text-gray-900">Wisata</p>
                    <p class="text-gray-700 text-lg">Pantai Bomo</p>
                </a>

                <!-- Perikanan -->
                <a href="{{ route('perikanan') }}" class="flex flex-col items-center group cursor-pointer">
                    <div class="w-36 h-36 rounded-full bg-green-100 shadow-inner group-hover:bg-green-200 transition"></div>
                    <p class="mt-4 font-bold text-gray-900">Perikanan</p>
                    <p class="text-gray-700 text-lg">Tongkol & Cakalang</p>
                </a>

                <!-- Pertanian -->
                <a href="{{ route('pertanian') }}" class="flex flex-col items-center group cursor-pointer">
                    <div class="w-36 h-36 rounded-full bg-green-100 shadow-inner group-hover:bg-green-200 transition"></div>
                    <p class="mt-4 font-bold text-gray-900">Pertanian</p>
                    <p class="text-gray-700 text-lg">Buah Naga</p>
                </a>

            </div>
        </div>

    </div>

</div>




</div>
@endsection
