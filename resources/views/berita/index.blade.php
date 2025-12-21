<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            Daftar Berita Desa Bomo
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Grid Berita --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($berita as $item)
                    <div
                        class="relative bg-white dark:bg-gray-800 shadow-xl rounded-lg overflow-hidden hover:shadow-2xl transition duration-300">

                        {{-- Badge Status --}}
                        <span
                            class="absolute top-2 right-2 px-2 py-1 text-xs font-semibold rounded 
                                             {{ $item->status === 'publish' ? 'bg-green-500 text-white' : 'bg-gray-400 text-gray-800' }}">
                            {{ ucfirst($item->status) }}
                        </span>

                        {{-- Gambar --}}
                        @if($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}"
                                class="w-full h-48 object-cover transform transition duration-500 hover:scale-105">
                        @else
                            <div
                                class="w-full h-48 bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-400 dark:text-gray-300">
                                Tidak ada gambar
                            </div>
                        @endif

                        {{-- Konten --}}
                        <div class="p-6">
                            {{-- Judul --}}
                            <h3 class="text-lg font-bold text-gray-900 dark:text-gray-100 mb-2">
                                {{ $item->judul }}
                            </h3>

                            {{-- Tanggal --}}
                            <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                                Dipublikasikan pada {{ $item->created_at->format('d M Y') }}
                            </p>

                            {{-- Excerpt --}}
                            <p class="text-gray-700 dark:text-gray-300 mb-4">
                                {{ \Illuminate\Support\Str::words($item->isi, 20, '...') }}
                            </p>

                            {{-- Tombol Baca Selengkapnya --}}
                            <a href="{{ route('berita.show', $item->slug) }}"
                                class="inline-block px-4 py-2 bg-gradient-to-r from-indigo-500 to-purple-500 text-white rounded-md shadow hover:scale-105 transform transition duration-300">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-600 dark:text-gray-300 col-span-3 text-center">
                        Belum ada berita tersedia.
                    </p>
                @endforelse
            </div>

            {{-- Pagination --}}
            {{ $berita->links('pagination::default') }}
        </div>
    </div>
</x-app-layout>