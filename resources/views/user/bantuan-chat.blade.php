@extends('layouts.appuser')

@section('title', 'Chat Bantuan')

@section('content')
<div class="p-4">

    {{-- Header --}}
    <div class="text-center mt-3">
        <h3 class="text-green-700 text-2xl font-semibold">Layanan Bantuan</h3>
        <p class="text-gray-600 text-sm -mt-1">Admin Bomo siap membantu</p>

        {{-- ➕ Menampilkan kategori yang dipilih --}}
        <p class="text-xs text-gray-500 mt-1">
            Kategori: <span class="font-semibold">{{ session('bantuan_kategori') }}</span>
        </p>
    </div>

    {{-- Chat Box --}}
    <div class="bg-white mt-4 shadow-md rounded-lg border p-4">

        {{-- Header Chat --}}
        <div class="flex justify-between items-center pb-2 border-b">
            <h4 class="font-semibold text-green-700">Admin Bomo</h4>

            {{-- Tombol end chat --}}
            <form id="endChatForm">
                @csrf
                <button type="submit" class="text-red-500 font-bold text-xl">×</button>
            </form>
        </div>

        {{-- Area Chat --}}
        <div id="chatArea" class="h-72 overflow-y-auto mt-3 space-y-3 text-sm"></div>
        <script>
        const chatArea = document.getElementById('chatArea');

        function loadMessages() {
            fetch("{{ route('bantuan.chat.fetch') }}")
                .then(res => res.json())
                .then(data => {
                    chatArea.innerHTML = '';

                    data.forEach(msg => {
                        if (msg.sender === 'user') {
                            chatArea.innerHTML += `
                                <div class="flex justify-end">
                                    <div class="bg-gray-200 p-3 rounded-lg max-w-[75%]">
                                        ${msg.message}
                                    </div>
                                </div>`;
                        } else {
                            chatArea.innerHTML += `
                                <div class="flex">
                                    <div class="bg-green-600 text-white p-3 rounded-lg max-w-[75%]">
                                        ${msg.message}
                                    </div>
                                </div>`;
                        }
                    });

                    chatArea.scrollTop = chatArea.scrollHeight;
                });
        }

        // LOAD PERTAMA
        loadMessages();

        // 🔁 POLLING TIAP 3 DETIK
        setInterval(loadMessages, 3000);

        // SEND CHAT
        document.getElementById('chatForm').addEventListener('submit', function(e){
            e.preventDefault();
            let message = messageInput.value;
            if (!message.trim()) return;

            fetch("{{ route('bantuan.chat.send') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({ message })
            }).then(() => {
                messageInput.value = "";
                loadMessages();
            });
        });

        // END CHAT
        document.getElementById('endChatForm').addEventListener('submit', function(e){
            e.preventDefault();

            fetch("{{ route('bantuan.chat.end') }}", {
                method: "POST",
                headers: { "X-CSRF-TOKEN": "{{ csrf_token() }}" }
            }).then(() => {
                window.location.href = "/bantuan-rating";
            });
        });
        </script>


        {{-- Input Chat --}}
        <form id="chatForm" class="mt-4 flex items-center gap-2">
            @csrf
            <input 
                type="text" 
                name="message" 
                id="messageInput"
                class="flex-1 border rounded-lg p-3 text-sm"
                placeholder="Tuliskan pesan..."
            >
            <button 
                class="bg-green-600 text-white px-4 py-2 rounded-full shadow">
                ➤
            </button>
        </form>
    </div>

</div>

{{-- AJAX --}}
<script>
document.getElementById('chatForm').addEventListener('submit', function(e){
    e.preventDefault();

    let message = document.getElementById('messageInput').value;
    if(message.trim() === '') return;

    let chatArea = document.getElementById('chatArea');

    chatArea.innerHTML += `
        <div class="flex justify-end">
            <div class="bg-gray-200 p-3 rounded-lg max-w-[75%]">
                ${message}
            </div>
        </div>
    `;
    chatArea.scrollTop = chatArea.scrollHeight;

    fetch("{{ route('bantuan.chat.send') }}", {
        method: "POST",
        headers: { 
            "Content-Type": "application/json", 
            "X-CSRF-TOKEN": "{{ csrf_token() }}" 
        },
        body: JSON.stringify({ message })
    });

    document.getElementById('messageInput').value = "";
});

// END CHAT
document.getElementById('endChatForm').addEventListener('submit', function(e){
    e.preventDefault();

    fetch("{{ route('bantuan.chat.end') }}", {
        method: "POST",
        headers: { 
            "Content-Type": "application/json", 
            "X-CSRF-TOKEN": "{{ csrf_token() }}" 
        },
    }).then(() => {
        window.location.href = "/bantuan-rating";
    });
});
</script>

@endsection
