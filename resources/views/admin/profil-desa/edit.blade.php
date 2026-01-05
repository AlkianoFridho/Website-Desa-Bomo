<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Profil Desa</h2>
                <p class="text-sm text-gray-500 mt-1">Edit konten “Sejarah Singkat” yang tampil di halaman publik.</p>
            </div>
            <a href="{{ route('admin.profil-desa.index') }}"
               class="inline-flex items-center px-4 py-2 rounded-lg border border-gray-200 text-gray-700 hover:bg-gray-50">
                Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100">
                <div class="p-8">
                    @if(session('success'))
                        <div class="mb-6 rounded-xl bg-emerald-50 border border-emerald-100 px-4 py-3 text-emerald-700">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="mb-6 rounded-xl bg-red-50 border border-red-100 px-4 py-3 text-red-700">
                            <ul class="list-disc pl-5 space-y-1">
                                @foreach($errors->all() as $err)
                                    <li>{{ $err }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-900">Sejarah Singkat</h3>
                        <p class="text-sm text-gray-500 mt-1">
                            Isi ini akan muncul pada card “Sejarah Singkat” di halaman Profil Desa (publik).
                        </p>
                    </div>

                    <form method="POST" action="{{ route('admin.profil-desa.update', $profilDesa->id) }}">
                        @csrf
                        @method('PUT')

                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Teks Sejarah
                        </label>
                        <textarea name="sejarah_singkat" rows="6"
                            class="w-full rounded-xl border-gray-300 focus:border-emerald-500 focus:ring-emerald-500"
                            placeholder="Contoh: Didirikan pada abad ke-18 oleh para leluhur...">{{ old('sejarah_singkat', $profilDesa->sejarah_singkat) }}</textarea>

                        <div class="mt-6 flex items-center justify-end gap-3">
                            <a href="{{ route('admin.profil-desa.index') }}"
                               class="px-5 py-2.5 rounded-xl border border-gray-200 text-gray-700 hover:bg-gray-50">
                                Batal
                            </a>
                            <button type="submit"
                                class="px-6 py-2.5 rounded-xl bg-emerald-600 text-white font-semibold hover:bg-emerald-700 shadow-sm">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
