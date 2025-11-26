<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    <body class="font-sans text-gray-900 antialiased bg-white">
        
        {{-- KONTEN UTAMA GUEST LAYOUT --}}
        <div class="min-h-screen flex flex-col sm:justify-start items-center pt-0 sm:pt-0 bg-white">
            {{-- 
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>
            --}}

            {{-- CONTAINER SLOT CONTENT ($slot) --}}
            <div class="w-full mt-0 px-0 py-0 bg-white overflow-hidden">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>