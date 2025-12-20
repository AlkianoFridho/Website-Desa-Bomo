<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Layanan Bantuan - Daftar Chat User') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">

                <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-200 mb-4">
                    Riwayat Chat User
                </h3>

                {{-- Jika belum ada data --}}
                @if ($chats->isEmpty())
                    <p class="text-gray-600 dark:text-gray-400">
                        Belum ada chat bantuan dari pengguna.
                    </p>
                @else

                {{-- TABEL CHAT --}}
                <div class="overflow-x-auto">
                    <table class="min-w-full text-left text-sm text-gray-700 dark:text-gray-300">
                        <thead class="text-xs uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-300">
                            <tr>
                                <th class="px-4 py-3">User</th>
                                <th class="px-4 py-3">Kategori</th>
                                <th class="px-4 py-3">Pesan Terakhir</th>
                                <th class="px-4 py-3 text-center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($chats as $chat)
                                <tr class="border-b dark:border-gray-600">
                                    <td class="px-4 py-3">
                                        {{ $chat->user_name ?? 'User' }}
                                    </td>

                                    <td class="px-4 py-3">
                                        <span class="bg-green-200 text-green-900 px-2 py-1 rounded text-xs dark:bg-green-800 dark:text-green-200">
                                            {{ $chat->kategori }}
                                        </span>
                                    </td>

                                    <td class="px-4 py-3">
                                        {{ \Illuminate\Support\Str::limit($chat->last_message, 40) }}
                                    </td>

                                    <td class="px-4 py-3 text-center">
                                        <a href="{{ route('admin.bantuan.chat', $chat->session_id) }}"
                                           class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-xs">
                                            Lihat Chat
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

                @endif
            </div>
        </div>
    </div>

</x-app-layout>
