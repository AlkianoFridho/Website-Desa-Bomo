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
                        class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden p-6 hover:shadow-xl transition duration-300">

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
                            {{ Str::limit($item->isi, 120, '...') }}
                        </p>

                        {{-- Tombol --}}
                        <a href="{{ route('berita.show', $item->slug) }}"
                            class="inline-block px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-500 transition">
                            Baca Selengkapnya
                        </a>
                    </div>
                @empty
                    <p class="text-gray-600 dark:text-gray-300 col-span-3 text-center">
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
</x-app-layout>