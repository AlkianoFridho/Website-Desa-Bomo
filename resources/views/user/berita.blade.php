@extends('layouts.appuser')

@section('title', 'Berita Desa Bomo')

@section('content')
<div class="p-4">

    {{-- Judul Halaman --}}
    <div class="text-center mt-6">
        <h3 class="text-green-700 text-2xl font-semibold">Berita Desa Bomo</h3>
        <p class="text-gray-600 text-sm -mt-1">Berita terbaru dan informasi penting dari Desa Bomo</p>
    </div>

    {{-- Grid Berita --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        @forelse($berita as $item)
            <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-xl transition duration-300">
                
                {{-- Gambar --}}
                @if($item->gambar)
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-400">
                        Tidak ada gambar
                    </div>
                @endif

                {{-- Konten --}}
                <div class="p-4">
                    {{-- Judul --}}
                    <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $item->judul }}</h3>

                    {{-- Tanggal --}}
                    <p class="text-sm text-gray-500 mb-4">Dipublikasikan pada {{ $item->created_at->format('d M Y') }}</p>

                    {{-- Excerpt --}}
                    <p class="text-gray-700 mb-4">{{ Str::limit($item->isi, 120, '...') }}</p>

                    {{-- Tombol Baca Selengkapnya --}}
                    <a href="{{ route('berita.show', $item->slug) }}" 
                        class="inline-block px-4 py-2 bg-green-700 text-white rounded-md hover:bg-green-800 transition">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        @empty
            <p class="text-gray-600 col-span-3 text-center">Belum ada berita tersedia.</p>
        @endforelse
    </div>

    {{-- Pagination --}}
    <div class="mt-6">
        {{ $berita->links() }}
    </div>

</div>
@endsection
