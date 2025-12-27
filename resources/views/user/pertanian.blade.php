@extends('layouts.appuser')

@section('content')

<!-- HERO -->
<section class="bg-gradient-to-r from-green-800 to-green-900 text-white py-16">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl font-bold mb-4">Potensi Pertanian Desa Bomo</h1>
        <p class="text-lg opacity-90 max-w-3xl mx-auto">
            Pertanian menjadi sektor penting dalam mendukung ketahanan pangan
            dan perekonomian masyarakat Desa Bomo.
        </p>
    </div>
</section>

<!-- DESKRIPSI UMUM -->
<section class="container mx-auto px-6 py-14">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-2xl font-bold text-green-700 mb-4">
            Gambaran Umum Pertanian
        </h2>
        <p class="text-gray-700 leading-relaxed">
            Desa Bomo memiliki lahan pertanian yang produktif dengan komoditas
            unggulan seperti buah naga dan tanaman pangan lainnya.
            Pertanian dikelola oleh masyarakat secara mandiri dan berkelanjutan.
        </p>
    </div>
</section>

<!-- JENIS POTENSI PERTANIAN -->
<section class="container mx-auto px-6 py-12 bg-gray-50 rounded-2xl">
    <h2 class="text-2xl font-bold text-center text-green-700 mb-10">
        Jenis Potensi Pertanian
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- CARD 1 -->
        <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
            <h3 class="text-xl font-semibold text-green-700 mb-3">
                Buah Naga
            </h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Buah naga menjadi komoditas unggulan Desa Bomo dengan kualitas
                hasil panen yang baik dan potensi pasar yang luas.
            </p>
        </div>

        <!-- CARD 2 -->
        <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
            <h3 class="text-xl font-semibold text-green-700 mb-3">
                Tanaman Pangan
            </h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Padi dan tanaman pangan lainnya mendukung ketahanan pangan
                serta kebutuhan masyarakat desa.
            </p>
        </div>

        <!-- CARD 3 -->
        <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
            <h3 class="text-xl font-semibold text-green-700 mb-3">
                Pekarangan Produktif
            </h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Pemanfaatan pekarangan rumah untuk tanaman sayur dan hortikultura
                sebagai sumber pangan keluarga.
            </p>
        </div>

    </div>
</section>

<!-- DATA SINGKAT -->
<section class="container mx-auto px-6 py-14">
    <h2 class="text-2xl font-bold text-center text-green-700 mb-8">
        Data Singkat Pertanian
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">

        <div class="bg-green-100 rounded-xl p-6 text-center">
            <p class="text-3xl font-bold text-green-700">±150</p>
            <p class="text-gray-700 mt-2">Petani Aktif</p>
        </div>

        <div class="bg-green-100 rounded-xl p-6 text-center">
            <p class="text-3xl font-bold text-green-700">Buah Naga</p>
            <p class="text-gray-700 mt-2">Komoditas Unggulan</p>
        </div>

        <div class="bg-green-100 rounded-xl p-6 text-center">
            <p class="text-3xl font-bold text-green-700">Lahan</p>
            <p class="text-gray-700 mt-2">Produktif</p>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="bg-green-800 text-white py-14 text-center">
    <h2 class="text-2xl font-bold mb-4">
        Dukung Pengembangan Pertanian Desa
    </h2>
    <p class="opacity-90 mb-6">
        Pertanian berkelanjutan untuk kesejahteraan masyarakat Desa Bomo
    </p>
    <a href="{{ route('infografis') }}"
       class="inline-block px-8 py-3 bg-white text-green-800 font-semibold rounded-full hover:bg-green-100 transition">
        Kembali ke Infografis
    </a>
</section>

@endsection
