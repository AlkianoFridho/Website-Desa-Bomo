<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Pejabat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('admin.organisasi.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        
                        <div>
                            <label class="block text-sm font-medium">Nama</label>
                            <input type="text" name="nama" value="{{ old('nama') }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                                placeholder="Masukkan nama lengkap beserta gelar"
                                required>
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Jabatan</label>
                            <select name="jabatan" 
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
                                required>
                                <option value="">-- Pilih Jabatan --</option>
                                @foreach($jabatans as $j)
                                    <option value="{{ $j }}" {{ old('jabatan') == $j ? 'selected' : '' }}>
                                        {{ $j }}
                                    </option>
                                @endforeach
                            </select>
                            <p class="mt-1 text-xs text-gray-500 italic">*Pilih jabatan yang sesuai agar hirarki visual di halaman utama tidak berantakan.</p>
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Foto Profil</label>
                            <input type="file" name="foto" accept="image/*"
                                class="mt-1 block w-full text-sm text-gray-700 dark:text-gray-300 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        </div>

                        <hr class="border-gray-200 dark:border-gray-700 my-6">

                        <div class="flex justify-between items-center">
                            <a href="{{ route('admin.organisasi.index') }}" 
                               class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-200">
                                ⬅ Kembali
                            </a>
                            <button type="submit" 
                                    class="px-6 py-2 bg-green-600 text-white font-bold rounded-lg hover:bg-green-700 shadow-md transition duration-200">
                                ✅ Simpan Pejabat
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>