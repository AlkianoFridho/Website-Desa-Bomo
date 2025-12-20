@php
    // Logika penentuan ukuran berdasarkan parameter 'size'
    $cardSize = [
        'large'  => 'max-w-[320px] w-full',
        'medium' => 'max-w-[280px] w-full',
        'small'  => 'w-full'
    ][$size ?? 'small'];

    $imgSize = [
        'large'  => 'w-40 h-40',
        'medium' => 'w-32 h-32',
        'small'  => 'w-24 h-24'
    ][$size ?? 'small'];

    $textSize = ($size ?? 'small') == 'large' ? 'text-2xl' : 'text-xl';
@endphp

<div class="group bg-white p-6 rounded-3xl border border-gray-100 shadow-md hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 text-center relative overflow-hidden {{ $cardSize }}">
    
    {{-- Dekorasi Aksen --}}
    <div class="absolute top-0 right-0 w-16 h-16 bg-green-50 rounded-bl-full opacity-50 group-hover:bg-green-100 transition-colors"></div>

    {{-- Foto Profil --}}
    <div class="relative mx-auto {{ $imgSize }} mb-6">
        <div class="absolute inset-0 bg-green-100 rounded-full scale-110 group-hover:scale-125 transition-transform duration-500 opacity-50"></div>
        <img src="{{ asset('storage/' . $anggota->foto) }}" 
             class="relative z-10 w-full h-full object-cover mx-auto rounded-full border-4 border-white shadow-lg transition duration-500"
             alt="{{ $anggota->nama }}">
    </div>

    {{-- Nama --}}
    <h3 class="{{ $textSize }} font-bold text-gray-900 mb-1 group-hover:text-green-700 transition-colors">
        {{ $anggota->nama }}
    </h3>

    {{-- Jabatan (Badge Style) --}}
    <div class="inline-block px-4 py-1 bg-green-100 text-green-800 text-xs font-bold rounded-full mb-4 uppercase tracking-wider">
        {{ $anggota->jabatan }}
    </div>

    {{-- Garis Bawah Dekoratif --}}
    <div class="w-12 h-1 bg-green-500 mx-auto rounded-full opacity-30 group-hover:w-20 group-hover:opacity-100 transition-all duration-500"></div>
</div>