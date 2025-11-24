<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Panduan Video') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h3 class="text-lg font-semibold mb-4">Daftar Video Panduan</h3>

                    <!-- Create -->
                    <a href="{{ route('admin.panduan.create') }}" 
                       class="px-4 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition">
                        ➕ Tambah Video Panduan
                    </a>

                    <table class="table-auto w-full text-left mt-4">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Thumbnail</th>
                                <th class="px-4 py-2">Judul</th>
                                <th class="px-4 py-2">Durasi</th>
                                <th class="px-4 py-2">Kategori</th>
                                <th class="px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($panduans as $panduan)
                                <tr>
                                    <td class="border px-4 py-2">
                                        @if ($panduan->thumbnail)
                                            <img src="{{ asset('storage/' . $panduan->thumbnail) }}" 
                                                 alt="thumbnail" class="h-14 rounded-lg shadow">
                                        @else
                                            <span class="text-gray-400">Tidak ada</span>
                                        @endif
                                    </td>
                                    <td class="border px-4 py-2 font-semibold">{{ $panduan->judul }}</td>
                                    <td class="border px-4 py-2">{{ $panduan->durasi }}</td>
                                    <td class="border px-4 py-2">{{ $panduan->kategori ?? '-' }}</td>

                                    <td class="border px-4 py-2 space-x-2 text-center">

                                        <!-- Show -->
                                        @if($panduan->video_url)
                                        <a href="{{ asset('storage/'.$panduan->video_url) }}" target="_blank"
                                           class="px-3 py-1 bg-blue-600 text-white rounded hover:bg-blue-700"
                                           title="Putar Video">
                                            ▶️
                                        </a>
                                        @endif

                                        <!-- Edit -->
                                        <a href="{{ route('admin.panduan.edit', $panduan->id) }}"
                                           class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                                            ✏️ Edit
                                        </a>

                                        <!-- Delete -->
                                        <form action="{{ route('admin.panduan.destroy', $panduan->id) }}"
                                              method="POST" class="inline-block"
                                              onsubmit="return confirm('Yakin ingin menghapus video ini?')">
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
                                    <td colspan="5" class="text-center py-3">Belum ada video panduan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
