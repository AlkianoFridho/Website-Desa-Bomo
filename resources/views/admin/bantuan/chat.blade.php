<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bantuan / Chat Pengguna') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

                <h3 class="text-lg font-semibold mb-4">
                    Percakapan dengan User (Session: {{ $session_id }})
                </h3>

                {{-- AREA CHAT --}}
                <div class="border rounded-lg p-4 dark:border-gray-700 mb-4 bg-gray-50 dark:bg-gray-700 h-80 overflow-y-auto">

                    @forelse ($messages as $msg)
                        <div class="mb-3 flex 
                            {{ $msg->sender === 'admin' ? 'justify-end' : 'justify-start' }}">
                            
                            <div class="max-w-xs px-4 py-2 rounded-lg
                                {{ $msg->sender === 'admin' 
                                    ? 'bg-blue-600 text-white' 
                                    : 'bg-gray-300 dark:bg-gray-600 text-gray-900 dark:text-gray-100' }}">
                                <p class="text-sm">{{ $msg->message }}</p>
                                <span class="text-xs opacity-70">
                                    {{ $msg->created_at->format('H:i') }}
                                </span>
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-700 dark:text-gray-300">Belum ada pesan…</p>
                    @endforelse

                </div>

                {{-- FORM KIRIM PESAN ADMIN --}}
                <form action="{{ route('admin.bantuan.reply') }}" method="POST">
                    @csrf

                    <input type="hidden" name="session_id" value="{{ $session_id }}">

                    <div class="flex">
                        <input 
                            type="text" 
                            name="message"
                            class="flex-1 rounded-l-lg border-gray-300 dark:bg-gray-900 dark:text-gray-100" 
                            placeholder="Ketik pesan…"
                            required>
                        
                        <button type="submit"
                            class="bg-blue-600 text-white px-4 rounded-r-lg hover:bg-blue-700">
                            Kirim
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</x-app-layout>
