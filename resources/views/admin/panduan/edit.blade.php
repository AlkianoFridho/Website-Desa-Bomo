<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Panduan Video
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('admin.panduan.update', $panduan->id) }}" 
                          method="POST" enctype="multipart/form-data" class="space-y-4">

                        @csrf
                        @method('PUT')

                        {{-- Judul --}}
                        <div>
                            <label class="block text-sm font-medium">Judul Video</label>
                            <input type="text" name="judul" value="{{ old('judul', $panduan->judul) }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-green-500 dark:bg-gray-700 dark:text-white"
                                required>
                        </div>

                        {{-- Durasi --}}
                        <div>
                            <label class="block text-sm font-medium">Durasi</label>
                            <input type="text" name="durasi" value="{{ old('durasi', $panduan->durasi) }}"
                                placeholder="contoh: 5m 30s"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-green-500 dark:bg-gray-700 dark:text-white"
                                required>
                        </div>

                        {{-- Kategori --}}
                        <div>
                            <label class="block text-sm font-medium">Kategori (opsional)</label>
                            <input type="text" name="kategori" value="{{ old('kategori', $panduan->kategori) }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:text-white">
                        </div>

                        {{-- Thumbnail --}}
                        <div>
                            <label class="block text-sm font-medium">Thumbnail</label>
                            @if ($panduan->thumbnail)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $panduan->thumbnail) }}"
                                         alt="Thumbnail {{ $panduan->judul }}"
                                         class="w-40 h-24 object-cover rounded-lg shadow">
                                </div>
                            @endif
                            <input type="file" name="thumbnail" accept="image/*"
                                class="mt-1 block w-full text-sm text-gray-700 dark:text-gray-300">
                            <p class="text-xs text-gray-500">Biarkan kosong jika tidak ingin mengganti.</p>
                        </div>

                        {{-- Video --}}
                        <div>
                            <label class="block text-sm font-medium">Video</label>

                            @if ($panduan->video_url)
                                <video width="260" controls class="rounded-lg shadow mb-2">
                                    <source src="{{ asset('storage/' . $panduan->video_url) }}" type="video/mp4">
                                    Browser Anda tidak mendukung video.
                                </video>
                            @endif

                            <input type="file" name="video_url" accept="video/*"
                                class="mt-1 block w-full text-sm text-gray-700 dark:text-gray-300">
                            <p class="text-xs text-gray-400">Kosongkan jika tidak ingin mengganti video.</p>
                        </div>

                        {{-- Dibuat oleh --}}
                        <div>
                            <label class="block text-sm font-medium">Dibuat Oleh</label>
                            <input type="text" name="dibuat_oleh" 
                                value="{{ old('dibuat_oleh', $panduan->dibuat_oleh) }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:text-white">
                        </div>

                        {{-- Tombol Aksi --}}
                        <div class="flex justify-between">
                            <a href="{{ route('admin.panduan.index') }}" 
                               class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">
                                ⬅ Kembali
                            </a>
                            <button type="submit" 
                                    class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                                💾 Update Panduan
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
