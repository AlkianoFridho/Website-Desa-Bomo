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

    {{-- Navbar Component --}}
    <x-navbar />


    {{-- Content --}}
    <main class="container mx-auto mt-6 px-4 pb-24 md:pb-6" data-aos="fade-up">

        @yield('content')
    </main>

    {{-- Footer Component --}}
    <x-footer />

    {{-- AOS JS --}}
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    </script>

    {{-- Accessibility Component --}}
    <x-accessibility />

</body>
</html>
