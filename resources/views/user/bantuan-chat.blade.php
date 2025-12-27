@extends('layouts.appuser')

@section('title', 'Chat Bantuan')

@section('content')
<div class="p-4">

    {{-- Header --}}
    <div class="text-center mt-3">
        <h3 class="text-green-700 text-2xl font-semibold">Layanan Bantuan</h3>
        <p class="text-gray-600 text-sm -mt-1">Admin Bomo siap membantu</p>

        <p class="text-xs text-gray-500 mt-1">
            Kategori:
            <span class="font-semibold">{{ session('bantuan_kategori') }}</span>
        </p>
    </div>

    {{-- Chat Box --}}
    <div class="bg-white mt-4 shadow-md rounded-lg border p-4">

        {{-- Header Chat --}}
        <div class="flex justify-between items-center pb-2 border-b">

            {{-- Left : Avatar + Name --}}
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-full bg-green-600 grid place-items-center text-white">
                    👤
                </div>

                <h4 class="font-semibold text-green-700">
                    Admin Bomo
                </h4>
            </div>

            {{-- End Chat Button --}}
            <form id="endChatForm">
                @csrf
                <button
                    type="submit"
                    class="w-9 h-9 grid place-items-center
                        text-red-600 font-bold text-2xl
                        rounded-full
                        hover:bg-red-100 hover:text-red-700
                        hover:scale-110 transition">
                    ✕
                </button>
            </form>

        </div>


        {{-- Area Chat --}}
        <div id="chatArea" class="h-72 overflow-y-auto mt-3 space-y-3 text-sm"></div>

        {{-- Input --}}
        <form id="chatForm" class="mt-4 flex items-center gap-2">
            @csrf
            <input
                type="text"
                id="messageInput"
                class="flex-1 border rounded-lg p-3 text-sm"
                placeholder="Tuliskan pesan..."
            >
            <button class="bg-green-600 text-white px-4 py-2 rounded-full shadow">
                ➤
            </button>
        </form>

    </div>
</div>

{{-- SCRIPT --}}
<script>
const chatArea = document.getElementById('chatArea');
const messageInput = document.getElementById('messageInput');
const chatForm = document.getElementById('chatForm');

// Render chat dari DB
function renderMessages(messages) {
    chatArea.innerHTML = '';

    messages.forEach(msg => {

        // Pesan user (kanan)
        if (msg.sender === 'user') {
            chatArea.innerHTML += `
                <div class="flex justify-end">
                    <div class="bg-gray-200 px-4 py-2 rounded-2xl rounded-tr-sm max-w-[75%]">
                        ${msg.message}
                    </div>
                </div>
            `;
        }

        // Pesan admin (kiri)
        else {
            chatArea.innerHTML += `
                <div class="flex">
                    <div class="bg-green-600 text-white px-4 py-2 rounded-2xl rounded-tl-sm max-w-[75%]">
                        ${msg.message}
                    </div>
                </div>
            `;
        }
    });

    chatArea.scrollTop = chatArea.scrollHeight;
}


// Ambil chat dari server
function fetchChat() {
    fetch("{{ route('bantuan.chat.fetch') }}")
        .then(res => res.json())
        .then(data => renderMessages(data));
}

// polling tiap 2 detik
fetchChat();
setInterval(fetchChat, 2000);

// kirim pesan
chatForm.addEventListener('submit', function(e) {
    e.preventDefault();

    const message = messageInput.value.trim();
    if (!message) return;

    fetch("{{ route('bantuan.chat.send') }}", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ message })
    }).then(() => {
        messageInput.value = '';
        fetchChat();
    });
});

// end chat
document.getElementById('endChatForm').addEventListener('submit', function(e) {
    e.preventDefault();

    fetch("{{ route('bantuan.chat.end') }}", {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    })
    .then(res => res.json())
    .then(data => {
        if (data.redirect) {
            window.location.href = data.redirect;
        } else {
            alert('Gagal mengakhiri chat');
        }
    });

});
</script>
@endsection
