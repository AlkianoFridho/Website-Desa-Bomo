@extends('layouts.appuser')

@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Judul Berita -->
        <h2 class="font-semibold text-2xl sm:text-3xl lg:text-4xl text-gray-800 mb-3 leading-snug text-center sm:text-left">
            {{ $berita->judul }}
        </h2>

        <!-- Info Penulis & Tanggal -->
        <p class="text-gray-500 text-xs sm:text-sm mb-4 text-center sm:text-left">
            Oleh <span class="font-semibold">{{ $berita->penulis ?? 'Admin' }}</span> |
            {{ $berita->created_at->format('d M Y') }}
        </p>

        <!-- Gambar Utama -->
        @if ($berita->gambar)
            <div class="w-full mb-6">
                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                    class="rounded-xl w-full max-h-[500px] sm:max-h-[600px] object-cover shadow-md transition-transform duration-300 hover:scale-[1.02]">
            </div>
        @endif

        <!-- Isi Artikel -->
        <article class="prose prose-sm sm:prose lg:prose-lg max-w-none text-gray-800 leading-relaxed">
            {!! $berita->isi !!}
        </article>

        <!-- Tombol Kembali -->
        <div class="mt-8 text-center sm:text-left">
            <a href="{{ route('user.berita.index') }}"
                class="inline-block px-5 py-2.5 bg-green-600 text-white font-semibold text-sm sm:text-base rounded-md shadow hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 transition">
                ← Kembali ke Daftar Berita
            </a>
        </div>
    </div>
@endsection
