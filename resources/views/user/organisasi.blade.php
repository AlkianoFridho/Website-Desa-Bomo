@extends('layouts.appuser')

@section('title', 'Struktur Organisasi')

@section('content')
<div class="bg-white shadow-md p-6 rounded-md">
    <h2 class="text-2xl font-bold text-green-600 mb-4">Struktur Organisasi</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @if ($organisasi && $organisasi->count() > 0)
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($organisasi as $anggota)
            <div class="p-4 border rounded-md text-center">
                <img src="{{ asset('storage/' . $anggota->foto) }}" class="h-32 w-32 object-cover mx-auto rounded-full">
                <h3 class="text-xl font-semibold mt-2">{{ $anggota->nama }}</h3>
                <p class="text-gray-700">{{ $anggota->jabatan }}</p>
            </div>
        @endforeach
    </div>
@else
    <p class="text-gray-500">Belum ada data organisasi.</p>
@endif
    </div>
</div>
@endsection
