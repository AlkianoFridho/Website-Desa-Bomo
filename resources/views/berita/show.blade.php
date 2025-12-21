@extends('layouts.appuser')

@section('content')
    <div class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-3xl text-gray-800 mb-4 leading-tight">
            {{ $berita->judul }}
        </h2>

        <p class="text-gray-500 text-sm mb-4">
            Oleh <span class="font-semibold">{{ $berita->penulis ?? 'Admin' }}</span> |
            {{ $berita->created_at->format('d M Y') }}
        </p>

        @if ($berita->gambar)
            <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                class="rounded-xl mb-6 w-full max-h-[500px] object-cover shadow">
        @endif

        <article class="prose max-w-none text-gray-800">
            {!! $berita->isi !!}
        </article>

        <div class="mt-8">
            <a href="{{ route('user.berita.index') }}"
                class="inline-block px-4 py-2 bg-green-600 text-white font-semibold rounded-md hover:bg-green-700 transition">
                ← Kembali ke Daftar Berita
            </a>
        </div>
    </div>
@endsection