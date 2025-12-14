@extends('layouts.appuser')

@section('content')

{{-- HEADER --}}
<section class="bg-gradient-to-br from-green-800 to-green-900 text-white py-20">
    <div class="container mx-auto px-6 max-w-4xl text-center">
        <h1 class="text-4xl font-bold mb-4 tracking-tight">
            Potensi Perikanan Desa Bomo
        </h1>
        <p class="text-lg opacity-90 leading-relaxed">
            Pengelolaan sektor perikanan sebagai penggerak ekonomi
            dan kesejahteraan masyarakat pesisir Desa Bomo.
        </p>
    </div>
</section>

{{-- PENJELASAN --}}
<section class="container mx-auto px-6 py-16 max-w-4xl">
    <h2 class="text-2xl font-semibold text-green-800 mb-4">
        Gambaran Umum
    </h2>
    <p class="text-gray-700 leading-relaxed">
        Letak geografis Desa Bomo yang berada di wilayah pesisir
        menjadikan sektor perikanan sebagai potensi unggulan.
        Kegiatan perikanan dilakukan secara tradisional hingga
        pengolahan hasil laut bernilai tambah.
    </p>
</section>

{{-- BLOK KREATIF --}}
<section class="bg-gray-50 py-20">
    <div class="container mx-auto px-6 max-w-6xl">
        <h2 class="text-3xl font-semibold text-center text-green-800 mb-14">
            Rantai Kegiatan Perikanan
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

            {{-- CARD --}}
            <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition">
                <div class="w-14 h-14 mb-5 flex items-center justify-center rounded-xl bg-green-100 text-green-700">
                    {{-- ICON: FISHING --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                              d="M16 7l5-5m0 0v5m0-5h-5M2 12s4-6 10-6 10 6 10 6-4 6-10 6S2 12 2 12z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-green-700 mb-2">
                    Penangkapan
                </h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Nelayan melakukan penangkapan ikan laut
                    menggunakan alat tangkap tradisional.
                </p>
            </div>

            {{-- CARD --}}
            <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition">
                <div class="w-14 h-14 mb-5 flex items-center justify-center rounded-xl bg-green-100 text-green-700">
                    {{-- ICON: BOX --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                              d="M20 7l-8-4-8 4m16 0v10l-8 4-8-4V7"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-green-700 mb-2">
                    Pengumpulan
                </h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Hasil tangkapan dikumpulkan dan dipilah
                    sebelum diolah atau dipasarkan.
                </p>
            </div>

            {{-- CARD --}}
            <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition">
                <div class="w-14 h-14 mb-5 flex items-center justify-center rounded-xl bg-green-100 text-green-700">
                    {{-- ICON: FACTORY --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                              d="M3 21V10l6 3V10l6 3V10l6 3v8H3z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-green-700 mb-2">
                    Pengolahan
                </h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Pengolahan hasil laut menjadi produk
                    bernilai tambah oleh UMKM desa.
                </p>
            </div>

            {{-- CARD --}}
            <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition">
                <div class="w-14 h-14 mb-5 flex items-center justify-center rounded-xl bg-green-100 text-green-700">
                    {{-- ICON: STORE --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                              d="M3 7h18l-2 10H5L3 7zM5 21h14"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-green-700 mb-2">
                    Pemasaran
                </h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Produk dipasarkan ke masyarakat
                    dan wilayah sekitar Desa Bomo.
                </p>
            </div>

        </div>
    </div>
</section>

{{-- DATA --}}
<section class="container mx-auto px-6 py-16 max-w-5xl">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <div class="bg-green-50 border border-green-100 rounded-2xl p-8 text-center">
            <p class="text-4xl font-bold text-green-700">±120</p>
            <p class="text-gray-700 mt-2">Nelayan Aktif</p>
        </div>

        <div class="bg-green-50 border border-green-100 rounded-2xl p-8 text-center">
            <p class="text-4xl font-bold text-green-700">3</p>
            <p class="text-gray-700 mt-2">Jenis Ikan Unggulan</p>
        </div>

        <div class="bg-green-50 border border-green-100 rounded-2xl p-8 text-center">
            <p class="text-4xl font-bold text-green-700">UMKM</p>
            <p class="text-gray-700 mt-2">Pengolahan Ikan</p>
        </div>

    </div>
</section>

@endsection
