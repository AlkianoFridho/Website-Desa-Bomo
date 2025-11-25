<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Bomo</title>

    {{-- Vite CSS & JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    {{-- Alpine.js untuk navbar toggle --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 text-green-900 font-sans leading-relaxed"
x-data="{ 
        akses:false, 
        invert:false,
        bigtext:false,
        hicontrast:false 
    }"
    x-bind:class="{
        'invert-filter': invert,
        'big-text': bigtext,
        'high-contrast': hicontrast
    }">

    {{-- Navbar --}}
    <nav class="bg-green-600 p-4 shadow-md sticky top-0 z-50" x-data="{ open: false }">
        <div class="container mx-auto flex justify-between items-center">
            <a class="text-white text-xl font-bold tracking-wide" href="/">Desa Bomo</a>

 

            {{-- Menu Utama --}}
            <ul class="hidden md:flex space-x-6">
                <li><a class="text-white hover:text-green-300 transition" href="/">Home</a></li>
                <li><a class="text-white hover:text-green-300 transition" href="/profil-desa">Profil Desa</a></li>
                <li><a class="text-white hover:text-green-300 transition" href="/organisasi">Organisasi</a></li>
                <li><a class="text-white hover:text-green-300 transition" href="/informasi-publik">Informasi Publik</a></li>
                <li><a class="text-white hover:text-green-300 transition" href="/pengaduan">Pengaduan</a></li>
                <li><a class="text-white hover:text-green-300 transition" href="/bantuan">Bantuan</a></li>
            </ul>
        </div>

        {{-- Dropdown Mobile --}}
        <div class="md:hidden mt-2 px-4" x-show="open" x-transition>
            <ul class="flex flex-col space-y-2 bg-green-700 rounded-md p-4">
                <li><a class="text-white hover:text-green-300 transition" href="/">Home</a></li>
                <li><a class="text-white hover:text-green-300 transition" href="/profil-desa">Profil Desa</a></li>
                <li><a class="text-white hover:text-green-300 transition" href="/organisasi">Organisasi</a></li>
                <li><a class="text-white hover:text-green-300 transition" href="/informasi-publik">Informasi Publik</a></li>
                <li><a class="text-white hover:text-green-300 transition" href="/pengaduan">Pengaduan</a></li>
                <li><a class="text-white hover:text-green-300 transition" href="/bantuan">Bantuan</a></li>
            </ul>
        </div>
    </nav>

    {{-- Content --}}
    <main class="container mx-auto mt-6 px-4 pb-24 md:pb-6" data-aos="fade-up">

        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-green-600 text-white text-center py-4 mt-12">
        &copy; {{ date('Y') }} Desa Bomo. Semua Hak Dilindungi.
    </footer>

    {{-- AOS JS --}}
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    </script>


</div>

<!-- Bottom Navigation Mobile -->
<div class="fixed bottom-4 left-4 right-4 bg-white shadow-lg border rounded-2xl md:hidden z-40 p-2">
    <div class="grid grid-cols-4 gap-2">

        <!-- Beranda -->
        <a href="/"
           class="flex flex-col items-center gap-1 p-2 rounded-xl border 
           {{ request()->is('/') ? 'bg-green-600 text-white border-green-600' : 'text-green-600 border-green-300' }}">
            <x-heroicon-o-home class="w-6 h-6" />
            <span class="text-xs font-semibold">BERANDA</span>
        </a>

        <!-- Profil Desa -->
        <a href="/profil-desa"
           class="flex flex-col items-center gap-1 p-2 rounded-xl border
           {{ request()->is('profil-desa') ? 'bg-green-600 text-white border-green-600' : 'text-green-600 border-green-300' }}">
            <x-heroicon-o-information-circle class="w-6 h-6" />
            <span class="text-xs">PROFIL</span>
        </a>

        <!-- Informasi Publik -->
        <a href="/informasi-publik"
           class="flex flex-col items-center gap-1 p-2 rounded-xl border
           {{ request()->is('informasi-publik') ? 'bg-green-600 text-white border-green-600' : 'text-green-600 border-green-300' }}">
            <x-heroicon-o-document-text class="w-6 h-6" />
            <span class="text-xs">INFORMASI</span>
        </a>

        <!-- Pengaduan -->
        <a href="/pengaduan"
           class="flex flex-col items-center gap-1 p-2 rounded-xl border
           {{ request()->is('pengaduan') ? 'bg-green-600 text-white border-green-600' : 'text-green-600 border-green-300' }}">
            <x-heroicon-o-chat-bubble-left-right class="w-6 h-6" />
            <span class="text-xs">PENGADUAN</span>
        </a>

    </div>
</div>

<!-- Tombol Aksesibilitas -->
<button 
    @click="akses = !akses"
    class="fixed bottom-28 right-4 bg-green-600 text-white p-4 rounded-full shadow-lg active:scale-95 transition z-50"
>
    ♿
</button>
<!-- Popup Aksesibilitas -->
<div 
    x-show="akses"
    x-transition
    class="fixed bottom-36 right-4 bg-white shadow-lg border rounded-xl p-4 space-y-3 w-48 z-50">

    <!-- Balik Warna -->
    <button 
        @click="invert = !invert"
        class="w-full text-left px-3 py-2 rounded-md border">
        Balik Warna
    </button>

    <!-- Teks Besar -->
    <button 
        @click="bigtext = !bigtext"
        class="w-full text-left px-3 py-2 rounded-md border">
        Teks Besar
    </button>

    <!-- Kontras Tinggi -->
    <button 
        @click="hicontrast = !hicontrast"
        class="w-full text-left px-3 py-2 rounded-md border">
        Kontras Tinggi
    </button>

</div>

</body>
</html>
