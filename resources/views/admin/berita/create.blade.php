<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Tambah Berita Baru
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md mt-6">
        {{-- Form Tambah --}}
        <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Judul --}}
            <div class="mb-4">
                <label class="block font-semibold mb-2 text-gray-700 dark:text-gray-300">Judul</label>
                <input type="text" name="judul" value="{{ old('judul') }}" required
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:border-green-500 focus:ring-green-500">
            </div>

            {{-- Isi --}}
            <div class="mb-4">
                <label class="block font-semibold mb-2 text-gray-700 dark:text-gray-300">Isi</label>
                <textarea name="isi" rows="6" required
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:border-green-500 focus:ring-green-500">{{ old('isi') }}</textarea>
            </div>

            {{-- Gambar --}}
            <div class="mb-4">
                <label class="block font-semibold mb-2 text-gray-700 dark:text-gray-300">Gambar</label>
                <input type="file" name="gambar"
                    class="block w-full text-gray-700 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-green-500">
            </div>

            {{-- Status --}}
            <div class="mb-4">
                <label class="block font-semibold mb-2 text-gray-700 dark:text-gray-300">Status</label>
                <select name="status"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:border-green-500 focus:ring-green-500"
                    required>
                    <option value="draft">Draft</option>
                    <option value="publish">Publish</option>
                </select>
            </div>

            {{-- Tombol --}}
            <div class="flex justify-end mt-6">
                <a href="{{ route('admin.berita.index') }}"
                    class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-md mr-2">Batal</a>
                <button type="submit"
                    class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md">Simpan</button>
            </div>
        </form>
    </div>
</x-app-layout>