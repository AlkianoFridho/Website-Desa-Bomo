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

    {{-- Alpine.js --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body 
    class="bg-gray-100 text-green-900 font-sans leading-relaxed min-h-screen flex flex-col"
    x-data="{ 
        akses:false, 
        invert: JSON.parse(localStorage.getItem('invert')) || false,
        bigtext: JSON.parse(localStorage.getItem('bigtext')) || false,
        hicontrast: JSON.parse(localStorage.getItem('hicontrast')) || false
    }"
    x-init="
        $watch('invert', value => localStorage.setItem('invert', JSON.stringify(value)))
        $watch('bigtext', value => localStorage.setItem('bigtext', JSON.stringify(value)))
        $watch('hicontrast', value => localStorage.setItem('hicontrast', JSON.stringify(value)))
    "
    x-bind:class="{
        'invert-filter': invert,
        'big-text': bigtext,
        'high-contrast': hicontrast
    }"
>

    {{-- Navbar --}}
    <x-navbar />

    {{-- Konten --}}
    <main class="container mx-auto mt-6 px-4 pb-24 md:pb-6 flex-grow" data-aos="fade-up">
        @yield('content')
    </main>

    {{-- Footer --}}
    <x-footer />

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, easing: 'ease-in-out', once: true });
    </script>

</body>

{{-- 🔥 Pindahkan aksesibilitas ke luar body --}}
<x-accessibility />

</html>
