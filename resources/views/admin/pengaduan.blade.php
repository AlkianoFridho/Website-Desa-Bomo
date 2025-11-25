<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pengaduan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold">Daftar Pengaduan</h3>

                    <table class="table-auto w-full text-left">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Nama</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">Isi Pengaduan</th>
                                <th class="px-4 py-2">Status</th>
                                <th class="px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengaduan as $aduan)
                            <tr>
                                <td class="border px-4 py-2">{{ $aduan->nama }}</td>
                                <td class="border px-4 py-2">{{ $aduan->email }}</td>
                                <td class="border px-4 py-2">{{ $aduan->isi_pengaduan }}</td>
                                <td class="border px-4 py-2">{{ $aduan->status }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('admin.pengaduan.edit', $aduan->id) }}" class="btn btn-warning">Ubah Status</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
