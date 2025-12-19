@extends('layouts.appuser')

@section('content')

<!-- HERO -->
<section class="bg-gradient-to-r from-green-700 to-blue-800 text-white py-16">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl font-bold mb-4">Potensi Wisata Desa Bomo</h1>
        <p class="text-lg opacity-90 max-w-3xl mx-auto">
            Keindahan alam, budaya, dan wisata edukasi yang menjadi daya tarik
            Desa Bomo bagi wisatawan lokal maupun luar daerah.
        </p>
    </div>
</section>

<!-- DESKRIPSI UMUM -->
<section class="container mx-auto px-6 py-14">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-2xl font-bold text-green-700 mb-4">
            Gambaran Umum Wisata
        </h2>
        <p class="text-gray-700 leading-relaxed">
            Desa Bomo memiliki potensi wisata yang beragam, mulai dari wisata alam
            pesisir, kegiatan budaya masyarakat, hingga wisata edukasi.
            Potensi ini dapat dikembangkan sebagai destinasi wisata berbasis desa.
        </p>
    </div>
</section>

<!-- JENIS POTENSI WISATA -->
<section class="container mx-auto px-6 py-12 bg-gray-50 rounded-2xl">
    <h2 class="text-2xl font-bold text-center text-green-700 mb-10">
        Jenis Potensi Wisata
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- CARD 1 -->
        <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
            <h3 class="text-xl font-semibold text-green-700 mb-3">
                Wisata Pantai
            </h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Pantai Bomo menawarkan pemandangan alam pesisir yang indah
                serta potensi wisata bahari dan rekreasi keluarga.
            </p>
        </div>

        <!-- CARD 2 -->
        <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
            <h3 class="text-xl font-semibold text-green-700 mb-3">
                Wisata Budaya
            </h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Tradisi dan kegiatan budaya masyarakat Desa Bomo yang masih
                terjaga menjadi daya tarik wisata budaya.
            </p>
        </div>

        <!-- CARD 3 -->
        <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
            <h3 class="text-xl font-semibold text-green-700 mb-3">
                Wisata Edukasi
            </h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Wisata edukasi berbasis lingkungan dan kehidupan masyarakat
                sebagai sarana pembelajaran bagi pengunjung.
            </p>
        </div>

    </div>
</section>

<!-- GALERI (OPSIONAL – TANPA GAMBAR DULU) -->
<section class="container mx-auto px-6 py-14">
    <h2 class="text-2xl font-bold text-center text-green-700 mb-10">
        Galeri Wisata Desa
    </h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        
        <div class="group bg-white p-2 rounded-xl border border-gray-200 shadow-md hover:shadow-xl transition-all duration-300">
            <div class="h-48 overflow-hidden rounded-lg">
                <img src="{{ asset('assets/images/wisata/wisata1.jpg') }}" 
                     class="w-full h-full object-cover group-hover:scale-110 transition duration-500" 
                     alt="Peresmian Desa Pintar">
            </div>
            <p class="mt-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Pantai Bomo</p>
        </div>

        <div class="group bg-white p-2 rounded-xl border border-gray-200 shadow-md hover:shadow-xl transition-all duration-300">
            <div class="h-48 overflow-hidden rounded-lg">
                <img src="{{ asset('assets/images/wisata/wisata2.jpg') }}" 
                     class="w-full h-full object-cover group-hover:scale-110 transition duration-500" 
                     alt="potret pantai bomo">
            </div>
            <p class="mt-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Tradisi Lokal</p>
        </div>

        <div class="group bg-white p-2 rounded-xl border border-gray-200 shadow-md hover:shadow-xl transition-all duration-300">
            <div class="h-48 overflow-hidden rounded-lg">
                <img src="{{ asset('assets/images/wisata/wisata3.jpg') }}" 
                     class="w-full h-full object-cover group-hover:scale-110 transition duration-500" 
                     alt="Edukasi masyarakat">
            </div>
            <p class="mt-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Ekowisata</p>
        </div>

        <div class="group bg-white p-2 rounded-xl border border-gray-200 shadow-md hover:shadow-xl transition-all duration-300">
            <div class="h-48 overflow-hidden rounded-lg">
                <img src="{{ asset('assets/images/wisata/wisata4.jpg') }}" 
                     class="w-full h-full object-cover group-hover:scale-110 transition duration-500" 
                     alt="Pelatihan Warga">
            </div>
            <p class="mt-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Pemandangan Alam</p>
        </div>

    </div>
</section>

<!-- DATA SINGKAT -->
<section class="container mx-auto px-6 py-14 bg-gray-50 rounded-2xl">
    <h2 class="text-2xl font-bold text-center text-green-700 mb-8">
        Data Singkat Wisata
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">

        <div class="bg-white rounded-xl p-6 text-center shadow">
            <p class="text-3xl font-bold text-green-700">1</p>
            <p class="text-gray-700 mt-2">Wisata Pantai</p>
        </div>

        <div class="bg-white rounded-xl p-6 text-center shadow">
            <p class="text-3xl font-bold text-green-700">Budaya</p>
            <p class="text-gray-700 mt-2">Kegiatan Adat</p>
        </div>

        <div class="bg-white rounded-xl p-6 text-center shadow">
            <p class="text-3xl font-bold text-green-700">Edukasi</p>
            <p class="text-gray-700 mt-2">Wisata Lingkungan</p>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="bg-gradient-to-r from-green-700 to-blue-800 text-white py-14 text-center">
    <h2 class="text-2xl font-bold mb-4">
        Mari Kunjungi Wisata Desa Bomo
    </h2>
    <p class="opacity-90 mb-6">
        Nikmati keindahan alam dan budaya Desa Bomo
    </p>
    <a href="{{ route('infografis') }}"
       class="inline-block px-8 py-3 bg-white text-green-700 font-semibold rounded-full hover:bg-green-100 transition">
        Kembali ke Infografis
    </a>
</section>

@endsection
