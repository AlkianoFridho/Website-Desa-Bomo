@extends('layouts.appuser')

@section('content')

<!-- HERO -->
<section class="bg-gradient-to-r from-green-700 to-green-900 text-white py-16">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl font-bold mb-4">Potensi Perikanan Desa Bomo</h1>
        <p class="text-lg opacity-90 max-w-3xl mx-auto">
            Sektor perikanan menjadi salah satu penggerak ekonomi masyarakat
            Desa Bomo dengan hasil laut yang melimpah dan berkualitas.
        </p>
    </div>
</section>

<!-- DESKRIPSI UMUM -->
<section class="container mx-auto px-6 py-14">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-2xl font-bold text-green-700 mb-4">
            Gambaran Umum Perikanan
        </h2>
        <p class="text-gray-700 leading-relaxed">
            Letak geografis Desa Bomo yang dekat dengan wilayah pesisir menjadikan
            perikanan sebagai mata pencaharian utama sebagian masyarakat.
            Aktivitas perikanan meliputi perikanan tangkap serta pengolahan hasil laut
            yang memiliki potensi ekonomi tinggi.
        </p>
    </div>
</section>

<!-- JENIS POTENSI PERIKANAN -->
<section class="container mx-auto px-6 py-12 bg-gray-50 rounded-2xl">
    <h2 class="text-2xl font-bold text-center text-green-700 mb-10">
        Jenis Potensi Perikanan
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- CARD 1 -->
        <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
            <h3 class="text-xl font-semibold text-green-700 mb-3">
                Perikanan Tangkap
            </h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Kegiatan penangkapan ikan laut seperti tongkol, cakalang,
                dan ikan konsumsi lainnya yang dilakukan oleh nelayan lokal.
            </p>
        </div>

        <!-- CARD 2 -->
        <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
            <h3 class="text-xl font-semibold text-green-700 mb-3">
                Pengolahan Hasil Laut
            </h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Pengolahan ikan menjadi produk bernilai tambah seperti
                ikan asin, pindang, dan olahan rumahan.
            </p>
        </div>

        <!-- CARD 3 -->
        <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
            <h3 class="text-xl font-semibold text-green-700 mb-3">
                UMKM Perikanan
            </h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Usaha mikro masyarakat yang bergerak di bidang hasil laut
                sebagai sumber pendapatan keluarga.
            </p>
        </div>

    </div>
</section>

<!-- DATA SINGKAT -->
<section class="container mx-auto px-6 py-14">
    <h2 class="text-2xl font-bold text-center text-green-700 mb-8">
        Data Singkat Perikanan
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">

        <div class="bg-green-100 rounded-xl p-6 text-center">
            <p class="text-3xl font-bold text-green-700">±120</p>
            <p class="text-gray-700 mt-2">Nelayan Aktif</p>
        </div>

        <div class="bg-green-100 rounded-xl p-6 text-center">
            <p class="text-3xl font-bold text-green-700">3</p>
            <p class="text-gray-700 mt-2">Jenis Ikan Unggulan</p>
        </div>

        <div class="bg-green-100 rounded-xl p-6 text-center">
            <p class="text-3xl font-bold text-green-700">UMKM</p>
            <p class="text-gray-700 mt-2">Pengolahan Ikan</p>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="bg-green-700 text-white py-14 text-center">
    <h2 class="text-2xl font-bold mb-4">
        Dukung Pengembangan Perikanan Desa
    </h2>
    <p class="opacity-90 mb-6">
        Perikanan berkelanjutan untuk kesejahteraan masyarakat Desa Bomo
    </p>
    <a href="{{ route('infografis') }}"
       class="inline-block px-8 py-3 bg-white text-green-700 font-semibold rounded-full hover:bg-green-100 transition">
        Kembali ke Infografis
    </a>
</section>

@endsection
