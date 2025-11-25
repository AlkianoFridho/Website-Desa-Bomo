<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Tambah Pejabat
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('admin.organisasi.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        
                        <!-- Nama -->
                        <div>
                            <label class="block text-sm font-medium">Nama</label>
                            <input type="text" name="nama" value="{{ old('nama') }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                                required>
                        </div>

                        <!-- Jabatan -->
                        <div>
                            <label class="block text-sm font-medium">Jabatan</label>
                            <input type="text" name="jabatan" value="{{ old('jabatan') }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                                required>
                        </div>

                        <!-- Foto -->
                        <div>
                            <label class="block text-sm font-medium">Foto</label>
                            <input type="file" name="foto" accept="image/*"
                                class="mt-1 block w-full text-sm text-gray-700 dark:text-gray-300">
                        </div>

                        <!-- Tombol -->
                        <div class="flex justify-between">
                            <a href="{{ route('admin.organisasi.index') }}" 
                               class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">
                                ⬅ Kembali
                            </a>
                            <button type="submit" 
                                    class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                                ✅ Simpan
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
