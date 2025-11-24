<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profil Desa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold">Profil Desa</h3>
                    
                    @if ($profildesa)
    <p><strong>Nama Desa:</strong> {{ $profildesa->nama_desa }}</p>
    <p><strong>Visi:</strong> {{ $profildesa->visi }}</p>
    <p><strong>Misi:</strong> {{ $profildesa->misi }}</p>
    <p><strong>Kepala Desa:</strong> {{ $profildesa->kepala_desa }}</p>
    <p><strong>Lokasi:</strong> {{ $profildesa->lokasi }}</p>
    <p><strong>Deskripsi:</strong> {{ $profildesa->deskripsi }}</p>

    <a href="{{ route('admin.profil-desa.edit', $profildesa->id) }}" class="btn btn-warning mt-4">Edit</a>
@else
    <p>Belum ada data profil desa.</p>
    <a href="{{ route('admin.profil-desa.create') }}" class="btn btn-primary mt-4">Tambah Profil Desa</a>
@endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
