@extends('layouts.appuser')

@section('content')



<!-- Hero Section () -->
<section class="relative w-full h-[600px] overflow-x-hidden hidden md:block">
    <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
        <source src="{{ asset('assets/BOMO KU BUMI KU.mp4') }}" type="video/mp4">
    </video>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-60 z-10"></div>

    <!-- Text -->
    <div class="relative z-20 flex items-center justify-center h-full px-4 text-center">
        <div class="text-white max-w-3xl" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">Selamat Datang di Desa Bomo</h1>
            <p class="text-lg md:text-xl opacity-90">
                Desa Bomo, permata Kecamatan Rogojampi, Banyuwangi.
            </p>

            <a href="#profil-home"
               class="inline-block mt-6 px-6 py-3 bg-gradient-to-r from-green-500 to-blue-500 rounded-full text-white font-semibold shadow-lg hover:scale-105 transition-transform duration-300">
               Jelajahi Desa
            </a>
        </div>
    </div>
</section>


<!-- Hero Mobile () -->
<section class="md:hidden bg-gradient-to-b from-green-700 to-green-900 text-white py-16 px-6">
    <h1 class="text-3xl font-bold text-center mb-6">Selamat Datang di Desa Bomo</h1>
    <p class="text-center text-sm mb-8 opacity-90">
        Desa dengan budaya, sejarah, dan kekayaan alam yang asri.
    </p>

    <div class="grid grid-cols-2 gap-4">
        <a href="{{ route('profil-desa') }}"
           class="bg-white text-green-700 font-semibold p-4 rounded-xl text-center shadow-md border border-green-600 hover:bg-green-100 transition">
            Profil Desa
        </a>

        <a href="{{ route('infografis') }}" 
class="bg-white text-green-700 font-semibold p-4 rounded-xl text-center shadow-md border border-green-600 hover:bg-green-100 transition">
   Infografis
</a>

    </div>
</section>


<!-- Profil Desa -->
<section id="profil-home" class="py-16 bg-white" data-aos="fade-up">
    <div class="max-w-screen-xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
        <!-- Logo Desa -->
        <div class="flex justify-center" data-aos="fade-right">
            <img src="{{ asset('assets/banyuwangi.png') }}" alt="Logo Desa Bomo" class="w-60 h-auto object-contain">
        </div>

        <!-- Konten Profil -->
        <div class="md:col-span-2" data-aos="fade-left">
            <h2 class="text-3xl font-bold text-green-700 mb-4">Profil Desa Bomo</h2>
            <p class="text-gray-700 leading-relaxed">
                Terletak di Kecamatan Rogojampi, Kabupaten Banyuwangi, <strong>Desa Bomo</strong> memiliki sejarah yang kaya serta kekayaan budaya yang menjadikannya salah satu desa yang harmonis dan damai. 
                <br><br>
                Desa ini dikenal dengan kehidupan masyarakat yang rukun, potensi wisata bahari dan pegunungan, serta berbagai kegiatan adat yang masih lestari. Lingkungannya yang asri menjadikan Bomo tempat ideal untuk edukasi budaya dan rekreasi keluarga.
            </p>
        </div>
    </div>
</section>

<!-- Berita Terbaru -->
<section class="container mx-auto px-6 py-16 bg-gray-50" data-aos="fade-up">
    <h2 class="text-4xl font-bold text-green-700 text-center mb-10">Berita Terbaru</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach(range(1, 3) as $i)
        <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition" data-aos="zoom-in" data-aos-delay="{{ $i * 100 }}">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Judul Berita {{ $i }}</h3>
            <p class="text-gray-600 mb-4">Ringkasan berita terbaru desa...</p>
            <a href="#" class="text-green-600 hover:text-green-800 font-medium transition-colors">Baca Selengkapnya →</a>
        </div>
        @endforeach
    </div>
</section>

<!-- Agenda Desa -->
<section class="container mx-auto px-6 py-16 bg-white text-center" data-aos="fade-up">
    <h2 class="text-4xl font-bold text-green-700 mb-6">Agenda Desa</h2>
    <div class="max-w-2xl mx-auto bg-gray-100 rounded-xl p-6 shadow">
        <ul class="text-gray-700 space-y-4 text-lg">
            <li class="flex justify-between items-center">
                <span>📅 Rapat Perencanaan Pembangunan</span> 
                <span class="text-sm text-gray-500">10 Maret 2025</span>
            </li>
            <li class="flex justify-between items-center">
                <span>🌱 Pelatihan Pertanian Organik</span>
                <span class="text-sm text-gray-500">15 Maret 2025</span>
            </li>
            <li class="flex justify-between items-center">
                <span>🎉 Lomba Bersih Desa</span>
                <span class="text-sm text-gray-500">20 Maret 2025</span>
            </li>
        </ul>
    </div>
</section>

<!-- Transparansi Keuangan -->
<section class="container mx-auto px-6 py-16 bg-gray-50 text-center" data-aos="fade-up">
    <h2 class="text-4xl font-bold text-green-700 mb-6">Transparansi Keuangan</h2>
    <p class="text-lg text-gray-700">💰 <strong>Anggaran 2025:</strong> Rp 1.200.000.000</p>
    <div class="flex justify-center flex-wrap gap-4 mt-6">
        <span class="bg-green-100 text-green-800 px-4 py-2 rounded-full">Infrastruktur (40%)</span>
        <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full">Pendidikan (30%)</span>
        <span class="bg-red-100 text-red-800 px-4 py-2 rounded-full">Kesehatan (20%)</span>
        <span class="bg-yellow-100 text-yellow-800 px-4 py-2 rounded-full">Lain-lain (10%)</span>
    </div>
</section>

<!-- Struktur Organisasi -->
<section class="container mx-auto px-6 py-16 bg-white text-center" data-aos="fade-up">
    <h2 class="text-4xl font-bold text-green-700 mb-10">Struktur Organisasi</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
        <div class="p-4 bg-white rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="100">
            <h3 class="font-semibold text-gray-800">Kepala Desa</h3>
            <p class="text-gray-600">Bapak Ahmad Syaifullah</p>
        </div>
        <div class="p-4 bg-white rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="200">
            <h3 class="font-semibold text-gray-800">Sekretaris Desa</h3>
            <p class="text-gray-600">Ibu Rina Wati</p>
        </div>
        <div class="p-4 bg-white rounded-lg shadow hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="300">
            <h3 class="font-semibold text-gray-800">Bendahara</h3>
            <p class="text-gray-600">Bapak Mulyadi</p>
        </div>
    </div>
</section>




@endsection


