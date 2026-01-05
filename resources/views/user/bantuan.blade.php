@extends('layouts.appuser')

@section('title', 'Bantuan')

@section('content')
<div class="p-4">

    {{-- Judul Layanan --}}
    <div class="text-center mt-6">
        <img src="{{ asset('assets/uwong.png') }}" class="mx-auto w-32 mb-4"> 
        <h3 class="text-green-700 text-2xl font-semibold">Layanan Bantuan</h3>
        <p class="text-gray-600 text-sm -mt-1">CS kami siap membantu</p>
    </div>

    {{-- Card Bantuan --}}
    <div class="bg-white mt-4 shadow-md rounded-lg border p-4">

        {{-- Kontak --}}
        <h4 class="font-semibold text-green-700 mb-2 text-lg">Layanan Bantuan</h4>

        <div class="flex items-center gap-3 mb-3">
            <div class="bg-green-600 text-white p-3,5 rounded-full">☎</div>
            <div class="bg-green-600 text-white p-3,5 rounded-full">📧</div>
            <div class="text-sm text-gray-700">
                <div>Telp : 08123456789</div>
                <div>Email : csbomo@gmail.com</div>
            </div>
        </div>

        {{-- Kategori Bantuan --}}
        <h4 class="font-semibold text-green-700 mt-6 text-lg">Kategori Layanan Bantuan</h4>

        <div class="flex flex-col gap-3 mt-3 mb-6 text-gray-700 text-sm">
            <label class="flex items-center gap-3">
                <input type="radio" name="kategori" value="Informasi berita desa" class="kategori-radio w-5 h-5 text-green-600">
                Informasi berita desa
            </label>

            <label class="flex items-center gap-3">
                <input type="radio" name="kategori" value="Laporkan Informasi" class="kategori-radio w-5 h-5 text-green-600">
                Laporkan Informasi
            </label>

            <label class="flex items-center gap-3">
                <input type="radio" name="kategori" value="Ketersediaan Aparat" class="kategori-radio w-5 h-5 text-green-600">
                Ketersediaan Aparat
            </label>

            <label class="flex items-center gap-3">
                <input type="radio" name="kategori" value="Kritik dan Saran" class="kategori-radio w-5 h-5 text-green-600">
                Kritik dan Saran
            </label>
        </div>

        <form action="{{ route('bantuan.start') }}" method="POST">
            @csrf
            {{-- HIDDEN INPUT UNTUK KATEGORI --}}
            <input type="hidden" name="kategori" id="kategoriInput">

            <button type="submit" 
                class="w-full bg-green-700 text-white py-3 mt-5 rounded-md text-lg shadow hover:bg-green-800 transition">
                Mulai Chat Sekarang
            </button>
        </form>

    </div>

    {{-- Jam Operasional --}}
    <div class="bg-green-50 border border-green-200 text-center p-3 rounded-md mt-4 text-sm">
        <p class="font-semibold text-green-700">Jam Operasional</p>
        <p>Senin - Minggu : 07.00 - 16.00 WIB</p>
    </div>

</div>

{{-- SCRIPT FIX --}}
<script>
document.addEventListener("DOMContentLoaded", function () {
    const radios = document.querySelectorAll('.kategori-radio');
    const hiddenInput = document.getElementById('kategoriInput');
    const form = document.getElementById('formStartChat');

    // Ketika radio berubah → isi hidden input
    radios.forEach(radio => {
        radio.addEventListener('change', function () {
            hiddenInput.value = this.value;
        });
    });

    // Cegah submit kalau kategori belum dipilih
    form.addEventListener("submit", function (e) {
        if (hiddenInput.value === "") {
            e.preventDefault();
            alert("Pilih kategori bantuan terlebih dahulu.");
        }
    });
});
</script>

@endsection
