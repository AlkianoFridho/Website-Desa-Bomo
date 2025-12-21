@extends('layouts.appuser')

@section('content')
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight mb-6">
                Daftar Berita Desa Bomo
            </h2>

            {{-- Grid Berita --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($berita as $item)
                    <div
                        class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300 flex flex-col h-full">

                        {{-- Gambar Berita --}}
                        @if($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}"
                                class="w-full h-48 object-cover">
                        @endif

                        <div class="p-6 flex flex-col flex-1">
                            {{-- Judul --}}
                            <h3 class="text-lg font-bold text-gray-900 mb-2">
                                {{ $item->judul }}
                            </h3>

                            {{-- Tanggal dan Penulis --}}
                            <p class="text-sm text-gray-500 mb-4">
                                Oleh <span class="font-semibold">{{ $item->penulis ?? 'Admin' }}</span> |
                                {{ $item->created_at->format('d M Y') }}
                            </p>

                            {{-- Excerpt --}}
                            <p class="text-gray-700 mb-4 flex-1">
                                {!! Str::limit(strip_tags($item->isi), 120, '...') !!}
                            </p>

                            {{-- Tombol Baca Selengkapnya --}}
                            <a href="{{ route('user.berita.show', $item->slug) }}"
                                class="inline-block mt-auto px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-600 col-span-3 text-center">
                        Belum ada berita tersedia.
                    </p>
                @endforelse
            </div>

            {{-- Pagination --}}
            <div class="mt-8">
                {{ $berita->links('pagination::tailwind') }}
            </div>
        </div>
    </div>
@endsection