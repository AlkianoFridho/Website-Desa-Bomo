<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Pejabat
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('organisasi.update', $person->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        @method('PUT')
                        
                        <!-- Nama -->
                        <div>
                            <label class="block text-sm font-medium">Nama</label>
                            <input type="text" name="nama" value="{{ old('nama', $person->nama) }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-yellow-500 dark:bg-gray-700 dark:text-white"
                                required>
                        </div>

                        <!-- Jabatan -->
                        <div>
                            <label class="block text-sm font-medium">Jabatan</label>
                            <input type="text" name="jabatan" value="{{ old('jabatan', $person->jabatan) }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-yellow-500 dark:bg-gray-700 dark:text-white"
                                required>
                        </div>

                        <!-- Foto -->
                        <div>
                            <label class="block text-sm font-medium">Foto</label>
                            @if ($person->foto)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/organisasi/'.$person->foto) }}" 
                                         alt="Foto {{ $person->nama }}" 
                                         class="w-32 h-32 object-cover rounded-lg shadow">
                                </div>
                            @endif
                            <input type="file" name="foto" accept="image/*"
                                class="mt-1 block w-full text-sm text-gray-700 dark:text-gray-300">
                            <p class="text-xs text-gray-500">Biarkan kosong jika tidak ingin mengganti foto.</p>
                        </div>

                        <!-- Tombol -->
                        <div class="flex justify-between">
                            <a href="{{ route('organisasi.index') }}" 
                               class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">
                                ⬅ Kembali
                            </a>
                            <button type="submit" 
                                    class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">
                                💾 Update
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
