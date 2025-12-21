<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Berita: {{ $berita->judul }}
        </h2>
    </x-slot>

    <div class="max-w-5xl mx-auto py-8 px-6">
        <form action="{{ route('admin.berita.update', $berita) }}" method="POST" enctype="multipart/form-data"
            class="space-y-6 bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
            @csrf
            @method('PUT')

            <input type="hidden" name="status" value="{{ old('status', $berita->status) }}">

            <div>
                <label class="block font-medium text-gray-700 dark:text-gray-300">Judul Berita</label>
                <input type="text" name="judul" value="{{ old('judul', $berita->judul) }}" required
                    class="mt-1 w-full border-gray-300 dark:border-gray-700 rounded-md shadow-sm">
            </div>

            <div>
                <label class="block font-medium text-gray-700 dark:text-gray-300">Isi Berita</label>
                <textarea name="isi" rows="8" required
                    class="mt-1 w-full border-gray-300 dark:border-gray-700 rounded-md shadow-sm">{{ old('isi', $berita->isi) }}</textarea>
            </div>

            <div>
                <label class="block font-medium text-gray-700 dark:text-gray-300">Gambar</label>
                @if ($berita->gambar)
                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita"
                        class="w-48 mb-3 rounded-lg shadow">
                @endif
                <input type="file" name="gambar"
                    class="block w-full text-sm text-gray-500 dark:text-gray-400 border border-gray-300 dark:border-gray-700 rounded-md">
            </div>

            <div>
                <label class="block font-medium text-gray-700 dark:text-gray-300">Penulis</label>
                <input type="text" name="penulis" value="{{ old('penulis', $berita->penulis) }}"
                    class="mt-1 w-full border-gray-300 dark:border-gray-700 rounded-md shadow-sm">
            </div>

            <div class="flex justify-end">
                <a href="{{ route('admin.berita.index') }}"
                    class="px-4 py-2 bg-gray-300 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-md mr-2">
                    Batal
                </a>
                <button type="submit"
                    class="px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded-md">Perbarui</button>
            </div>
        </form>
    </div>
</x-app-layout>