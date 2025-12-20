<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Pejabat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    {{-- Form Update dengan rute admin. yang benar --}}
                    <form action="{{ route('admin.organisasi.update', $organisasi->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        @method('PUT')
                        
                        <div>
                            <label class="block text-sm font-medium">Nama</label>
                            <input type="text" name="nama" value="{{ old('nama', $organisasi->nama) }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-yellow-500 dark:bg-gray-700 dark:text-white"
                                required>
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Jabatan</label>
                            <select name="jabatan" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-yellow-500 dark:bg-gray-700 dark:text-white" required>
                                @foreach($jabatans as $j)
                                    <option value="{{ $j }}" {{ (old('jabatan', $organisasi->jabatan) == $j) ? 'selected' : '' }}>
                                        {{ $j }}
                                    </option>
                                @endforeach
                            </select>
                            <p class="text-xs text-gray-500 mt-1 italic">Pilih jabatan yang sesuai untuk menjaga struktur garis organisasi.</p>
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Foto Profil</label>
                            @if ($organisasi->foto)
                                <div class="my-3">
                                    <p class="text-xs text-gray-400 mb-1">Foto saat ini:</p>
                                    <img src="{{ asset('storage/'.$organisasi->foto) }}" 
                                         alt="Foto {{ $organisasi->nama }}" 
                                         class="w-32 h-32 object-cover rounded-lg shadow-md border-2 border-yellow-400">
                                </div>
                            @endif
                            <input type="file" name="foto" accept="image/*"
                                class="mt-1 block w-full text-sm text-gray-700 dark:text-gray-300 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100">
                            <p class="text-xs text-gray-500 mt-1">Biarkan kosong jika tidak ingin mengganti foto profil.</p>
                        </div>

                        <hr class="border-gray-200 dark:border-gray-700 my-6">

                        <div class="flex justify-between items-center">
                            <a href="{{ route('admin.organisasi.index') }}" 
                               class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-200">
                                ⬅ Kembali
                            </a>
                            <button type="submit" 
                                    class="px-6 py-2 bg-yellow-500 text-white font-bold rounded-lg hover:bg-yellow-600 shadow-md transition duration-200">
                                💾 Simpan Perubahan
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>