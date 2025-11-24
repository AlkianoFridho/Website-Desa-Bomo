<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Tambah Panduan Video
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('admin.panduan.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                        @csrf

                        <!-- Judul -->
                        <div>
                            <label class="block text-sm font-medium">Judul Video</label>
                            <input type="text" name="judul" value="{{ old('judul') }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-green-500 dark:bg-gray-700 dark:text-white"
                                required>
                        </div>

                        <!-- Durasi -->
                        <div>
                            <label class="block text-sm font-medium">Durasi Video</label>
                            <input type="text" name="durasi" placeholder="Contoh: 5m 30s" value="{{ old('durasi') }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-green-500 dark:bg-gray-700 dark:text-white"
                                required>
                        </div>

                        <!-- Thumbnail -->
                        <div>
                            <label class="block text-sm font-medium">Thumbnail</label>
                            <input type="file" name="thumbnail" accept="image/*"
                                class="mt-1 block w-full text-sm text-gray-700 dark:text-gray-300">
                        </div>

                        <!-- Upload Video Lokal -->
                        <div>
                            <label class="block text-sm font-medium">Upload Video</label>
                            <input type="file" name="video_url" accept="video/*"
                                class="mt-1 block w-full text-sm text-gray-700 dark:text-gray-300" required>
                        </div>

                        <!-- Kategori -->
                        <div>
                            <label class="block text-sm font-medium">Kategori</label>
                            <input type="text" name="kategori" value="{{ old('kategori') }}"
                                placeholder="Contoh: Administrasi, Layanan Publik"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-green-500 dark:bg-gray-700 dark:text-white">
                        </div>

                        <!-- Dibuat Oleh -->
                        <div>
                            <label class="block text-sm font-medium">Dibuat Oleh</label>
                            <input type="text" name="dibuat_oleh" value="{{ old('dibuat_oleh', 'Pemerintah Desa Bomo') }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-green-500 dark:bg-gray-700 dark:text-white">
                        </div>

                        <!-- Tombol -->
                        <div class="flex justify-between">
                            <a href="{{ route('admin.panduan.index') }}"
                               class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">
                                ⬅ Kembali
                            </a>
                            <button type="submit"
                                class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                                💾 Simpan Video
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
