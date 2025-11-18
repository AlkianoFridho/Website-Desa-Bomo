<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Informasi Publik') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold">Daftar Informasi Publik</h3>
                    
                    <a href="{{ route('informasi-publik.create') }}" class="btn btn-primary mb-4">Tambah Informasi</a>

                    <table class="table-auto w-full text-left">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Judul</th>
                                <th class="px-4 py-2">Kategori</th>
                                <th class="px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($informasi as $info)
                            <tr>
                                <td class="border px-4 py-2">{{ $info->judul }}</td>
                                <td class="border px-4 py-2">{{ $info->kategori }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('informasi-publik.edit', $info->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('informasi-publik.destroy', $info->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if ($informasi->isEmpty())
                        <p class="mt-4">Belum ada informasi publik.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
