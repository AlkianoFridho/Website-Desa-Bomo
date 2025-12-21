<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            Detail Berita
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold mb-3">{{ $berita->judul }}</h1>
        <p class="text-gray-500 text-sm mb-4">
            Oleh {{ $berita->penulis ?? 'Admin' }} | {{ $berita->created_at->format('d M Y') }}
        </p>

        @if ($berita->gambar)
            <img src="{{ asset('storage/' . $berita->gambar) }}" class="rounded-xl mb-5 w-full max-h-[500px] object-cover">
        @endif

        <article class="prose dark:prose-invert max-w-none">
            {!! $berita->isi !!}
        </article>

        <div class="mt-8">
            <a href="{{ route('admin.berita.index') }}"
                class="inline-block px-4 py-2 bg-green-600 text-white font-semibold rounded-md hover:bg-green-700 transition">
                ← Kembali ke Daftar Berita
            </a>
        </div>
    </div>
</x-app-layout>
