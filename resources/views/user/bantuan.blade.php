@extends('layouts.appuser')

@section('title', 'Bantuan')

@section('content')
<div class="p-4">


    {{-- Judul Layanan --}}
    <div class="text-center mt-6">
        <img src="{{ asset('assets/uwong.png') }}" class="mx-auto w-12 mb-2">
        <h3 class="text-green-700 text-lg font-semibold">Layanan Bantuan</h3>
        <p class="text-gray-600 text-sm -mt-1">CS kami siap membantu</p>
    </div>

    {{-- Card Bantuan --}}
    <div class="bg-white mt-4 shadow-md rounded-lg border p-4">

        {{-- Kontak --}}
        <h4 class="font-semibold text-green-700 mb-2 text-lg">Layanan Bantuan</h4>

        <div class="flex items-center gap-3 mb-3">
            <div class="bg-green-600 text-white p-3 rounded-full">
                📞
            </div>
            <div class="text-sm text-gray-700">
                <div>Telp : 08123456789</div>
                <div>Email : csbomo@gmail.com</div>
            </div>
        </div>

        {{-- Kategori Bantuan --}}
        <h4 class="font-semibold text-green-700 mt-4 text-lg">Kategori Bantuan</h4>

        <div class="flex flex-col gap-2 mt-2 text-gray-700 text-sm">
            <label class="flex items-center gap-2">
                <input type="checkbox" class="w-4 h-4">
                Informasi berita desa
            </label>

            <label class="flex items-center gap-2">
                <input type="checkbox" class="w-4 h-4">
                Laporkan Informasi
            </label>

            <label class="flex items-center gap-2">
                <input type="checkbox" class="w-4 h-4">
                Ketersediaan Aparat
            </label>

            <label class="flex items-center gap-2">
                <input type="checkbox" class="w-4 h-4">
                Kritik dan Saran
            </label>
        </div>

        <button class="w-full bg-green-700 text-white py-2 mt-4 rounded-md shadow">
            Mulai Chat Sekarang
        </button>
    </div>

    {{-- Jam Operasional --}}
    <div class="bg-green-50 border border-green-200 text-center p-3 rounded-md mt-4 text-sm">
        <p class="font-semibold">Jam Operasional</p>
        <p>Senin - Minggu : 07.00 - 16.00 WIB</p>
    </div>

</div>


@endsection
