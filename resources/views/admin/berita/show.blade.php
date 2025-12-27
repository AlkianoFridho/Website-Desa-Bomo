<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
            {{ $berita->judul }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">

                {{-- Judul --}}
                <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">
                    {{ $berita->judul }}
                </h1>

                {{-- Tanggal --}}
                <p class="text-sm text-gray-500 mb-6">
                    Dipublikasikan pada {{ $berita->created_at->format('d M Y') }}
                </p>

                {{-- Isi Berita --}}
                <div class="prose dark:prose-invert max-w-none">
                    {!! nl2br(e($berita->isi)) !!}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>