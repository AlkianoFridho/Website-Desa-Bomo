<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200">
            {{ $berita->judul }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-xl rounded-lg overflow-hidden">

                {{-- Gambar --}}
                @if($berita->gambar)
                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                        class="w-full h-64 object-cover">
                @else
                    <div
                        class="w-full h-64 bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-400 dark:text-gray-300">
                        Tidak ada gambar
                    </div>
                @endif

                <div class="p-6">
                    {{-- Judul --}}
                    <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-4">
                        {{ $berita->judul }}
                    </h1>

                    {{-- Tanggal & Penulis --}}
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">
                        Dipublikasikan pada {{ $berita->created_at->format('d M Y') }}
                        @if($berita->penulis)
                            oleh {{ $berita->penulis }}
                        @endif
                    </p>

                    {{-- Isi Berita --}}
                    <div class="prose dark:prose-invert max-w-none text-gray-700 dark:text-gray-300 mb-6">
                        {!! nl2br(e($berita->isi)) !!}
                    </div>

                    {{-- Tombol Kembali --}}
                    <a href="{{ route('berita.index') }}"
                        class="inline-block px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-500 transition">
                        &larr; Kembali ke Daftar Berita
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>