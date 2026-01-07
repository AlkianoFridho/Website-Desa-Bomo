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

                   <form method="POST" action="{{ route('admin.profil-desa.update', $profilDesa->id) }}" class="space-y-5">
    @csrf
    @method('PUT')

    <div>
        <label class="text-sm font-semibold">Nama Desa</label>
        <input name="nama_desa" value="{{ old('nama_desa', $profilDesa->nama_desa) }}"
               class="w-full rounded-xl border-gray-200" required>
    </div>

    <div>
        <label class="text-sm font-semibold">Tentang Kami (Ringkasan)</label>
        <textarea name="tentang_kami" rows="4" class="w-full rounded-xl border-gray-200">{{ old('tentang_kami', $profilDesa->tentang_kami) }}</textarea>
    </div>

    <div>
        <label class="text-sm font-semibold">Sejarah Singkat</label>
        <textarea name="sejarah_singkat" rows="4" class="w-full rounded-xl border-gray-200">{{ old('sejarah_singkat', $profilDesa->sejarah_singkat) }}</textarea>
    </div>

    <div>
        <label class="text-sm font-semibold">Visi</label>
        <textarea name="visi" rows="3" class="w-full rounded-xl border-gray-200">{{ old('visi', $profilDesa->visi) }}</textarea>
    </div>

    <div>
        <label class="text-sm font-semibold">Misi</label>
        <textarea name="misi" rows="5" class="w-full rounded-xl border-gray-200">{{ old('misi', $profilDesa->misi) }}</textarea>
        <p class="text-xs text-gray-500 mt-1">Pisahkan misi per baris (ENTER) agar mudah ditampilkan sebagai list.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div>
            <label class="text-sm font-semibold">Total Penduduk</label>
            <input name="total_penduduk" value="{{ old('total_penduduk', $profilDesa->total_penduduk) }}"
                   class="w-full rounded-xl border-gray-200" placeholder="5.000+">
        </div>
        <div>
            <label class="text-sm font-semibold">Luas Wilayah</label>
            <input name="luas_wilayah" value="{{ old('luas_wilayah', $profilDesa->luas_wilayah) }}"
                   class="w-full rounded-xl border-gray-200" placeholder="15 km²">
        </div>
        <div>
            <label class="text-sm font-semibold">Potensi Utama</label>
            <input name="potensi_utama" value="{{ old('potensi_utama', $profilDesa->potensi_utama) }}"
                   class="w-full rounded-xl border-gray-200" placeholder="3 Sektor">
        </div>
    </div>

    <div>
        <label class="text-sm font-semibold">Judul Section Data</label>
        <input name="judul_data" value="{{ old('judul_data', $profilDesa->judul_data) }}"
               class="w-full rounded-xl border-gray-200" placeholder="Transparansi Melalui Data">
    </div>

    <div>
        <label class="text-sm font-semibold">Deskripsi Section Data</label>
        <textarea name="deskripsi_data" rows="4" class="w-full rounded-xl border-gray-200">{{ old('deskripsi_data', $profilDesa->deskripsi_data) }}</textarea>
    </div>

  

    <button class="px-6 py-3 rounded-xl bg-emerald-600 text-white font-bold">Simpan</button>
</form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
