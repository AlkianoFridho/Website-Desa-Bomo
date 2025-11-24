<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Struktur Organisasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">Struktur Organisasi</h3>

                    <!-- Create -->
                    <a href="{{ route('admin.organisasi.create') }}" 
                       class="px-4 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition">
                        ➕ Tambah Pejabat
                    </a>

                    <table class="table-auto w-full text-left mt-4">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Nama</th>
                                <th class="px-4 py-2">Jabatan</th>
                                <th class="px-4 py-2 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $person)
                            <tr>
                                <td class="border px-4 py-2">{{ $person->nama }}</td>
                                <td class="border px-4 py-2">{{ $person->jabatan }}</td>
                                <td class="border px-4 py-2 text-center space-x-2">

                                    <!-- Read -->
                                    <a href="{{ route('organisasi.show', $person->id) }}" 
                                       class="px-3 py-1 bg-blue-600 text-white rounded hover:bg-blue-700">
                                        👁️ Lihat
                                    </a>

                                    <!-- Update -->
                                    <a href="{{ route('organisasi.edit', $person->id) }}" 
                                       class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                                        ✏️ Edit
                                    </a>

                                    <!-- Delete -->
                                    <form action="{{ route('organisasi.destroy', $person->id) }}" 
                                          method="POST" class="inline-block"
                                          onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">
                                            🗑️ Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="text-center py-4">Belum ada data struktur organisasi.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
