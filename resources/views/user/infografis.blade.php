@extends('layouts.appuser')

@section('content')
<div class="max-w-5xl mx-auto px-6 py-12">

    <!-- Judul -->
    <h1 class="text-4xl font-extrabold text-gray-900 tracking-wide">INFOGRAFIS</h1>
    <p class="text-gray-600 mt-1 text-lg">Data Umum & Potensi Desa</p>

    <!-- GRID UTAMA -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">

        <!-- Data Wilayah -->
        <div class="bg-white shadow-md border border-gray-200 rounded-2xl p-6">
            <h2 class="text-xl font-bold text-gray-900 mb-4">Data Wilayah</h2>
            <div class="space-y-2 text-gray-700">
                <p>Luas Wilayah <strong>1.700 Ha</strong></p>
                <p>3 Dusun / 1 Desa Bomo</p>
            </div>
        </div>

        <!-- Jumlah Penduduk -->
        <div class="bg-white shadow-md border border-gray-200 rounded-2xl p-6">
            <h2 class="text-xl font-bold text-gray-900 mb-3">Jumlah Penduduk</h2>

            <div class="flex flex-col items-center mb-3">
                <span class="text-4xl font-extrabold text-gray-900">4.500 <span class="text-xl font-bold">JIWA</span></span>
            </div>

            <div class="flex justify-around mt-4 text-center">
                <div>
                    <div class="w-6 h-6 bg-green-600 rounded-full mx-auto"></div>
                    <p class="text-gray-700 mt-1 text-sm">2000 Pria</p>
                </div>
                <div>
                    <div class="w-6 h-6 bg-green-400 rounded-full mx-auto"></div>
                    <p class="text-gray-700 mt-1 text-sm">2500 Wanita</p>
                </div>
            </div>
        </div>

        <!-- Mata Pencaharian -->
        <div class="bg-white shadow-md border border-gray-200 rounded-2xl p-6">
            <h2 class="text-xl font-bold text-gray-900 mb-4">Mata Pencaharian</h2>
            <ul class="space-y-2 text-gray-700 text-lg">
                <li class="flex justify-between"><span>Nelayan</span> <strong>45%</strong></li>
                <li class="flex justify-between"><span>Petani</span> <strong>30%</strong></li>
                <li class="flex justify-between"><span>Pedagang</span> <strong>15%</strong></li>
                <li class="flex justify-between"><span>Pekerjaan Lain</span> <strong>10%</strong></li>
            </ul>
        </div>

        <!-- Sarana Umum -->
        <div class="bg-white shadow-md border border-gray-200 rounded-2xl p-6">
            <h2 class="text-xl font-bold text-gray-900 mb-4">Sarana Umum</h2>
            <ul class="grid grid-cols-2 gap-2 text-gray-700">
                <li>2 SD/MI</li>
                <li>1 SMP/MTS</li>
                <li>2 Masjid</li>
                <li>10 Mushola</li>
            </ul>
        </div>

    </div>

    <!-- Potensi Unggulan -->
    <div class="bg-white shadow-md border border-gray-200 rounded-2xl p-6 mt-10">
        <h2 class="text-xl font-bold text-gray-900 mb-6">Potensi Unggulan</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">

            <!-- Pantai -->
            <div>
                <div class="w-24 h-24 rounded-full bg-green-100 mx-auto mb-3 shadow-md flex items-center justify-center">
                    🌊
                </div>
                <p class="font-semibold text-gray-900">Wisata:</p>
                <p class="text-gray-700 -mt-1">Pantai Bomo</p>
            </div>

            <!-- Perikanan -->
            <div>
                <div class="w-24 h-24 rounded-full bg-green-100 mx-auto mb-3 shadow-md flex items-center justify-center">
                    🐟
                </div>
                <p class="font-semibold text-gray-900">Perikanan:</p>
                <p class="text-gray-700 -mt-1">Ikan Tongkol & Cakalang</p>
            </div>

            <!-- Pertanian -->
            <div>
                <div class="w-24 h-24 rounded-full bg-green-100 mx-auto mb-3 shadow-md flex items-center justify-center">
                    🍉
                </div>
                <p class="font-semibold text-gray-900">Pertanian:</p>
                <p class="text-gray-700 -mt-1">Buah Naga</p>
            </div>

        </div>
    </div>

</div>
@endsection
