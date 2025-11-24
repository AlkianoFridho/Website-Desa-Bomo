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
<body class="bg-gray-100 text-green-900 font-sans leading-relaxed">

    {{-- Navbar --}}
    <nav class="bg-green-600 p-4 shadow-md sticky top-0 z-50" x-data="{ open: false }">
        <div class="container mx-auto flex justify-between items-center">
            <a class="text-white text-xl font-bold tracking-wide" href="/">Desa Bomo</a>

            {{-- Tombol Hamburger (mobile) --}}
            <button @click="open = !open" class="text-white md:hidden focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            {{-- Menu Utama --}}
            <ul class="hidden md:flex space-x-6">
                <li><a class="text-white hover:text-green-300 transition" href="/">Home</a></li>
                <li><a class="text-white hover:text-green-300 transition" href="/profil-desa">Profil Desa</a></li>
                <li><a class="text-white hover:text-green-300 transition" href="/organisasi">Organisasi</a></li>
                <li><a class="text-white hover:text-green-300 transition" href="/informasi-publik">Informasi Publik</a></li>
                <li><a class="text-white hover:text-green-300 transition" href="/pengaduan">Pengaduan</a></li>
                <li><a class="text-white hover:text-green-300 transition" href="/panduan">Panduan</a></li>
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
                <li><a class="text-white hover:text-green-300 transition" href="/panduan">Panduan</a></li>
            </ul>
        </div>
    </nav>

    {{-- Content --}}
    <main class="container mx-auto mt-6 px-4" data-aos="fade-up">
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
</body>
</html>
