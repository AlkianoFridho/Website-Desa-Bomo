@extends('layouts.appuser')

@section('content')

<section class="relative hidden md:block w-full text-white mt-[-80px] pt-32 md:pt-48 pb-24">
    
    {{-- Background Image & Overlay --}}
 <div class="absolute inset-0 rounded-b-[56px] overflow-hidden shadow-2xl" data-aos="fade-down">
    
    <!-- Background Image -->
    <img
        src="https://upload.wikimedia.org/wikipedia/commons/6/64/Kantordesabomorogojampibanyuwangi.JPG"
        class="w-full h-full object-cover scale-[1.05] brightness-[0.70]"
        alt="Kantor Desa Bomo"
    >

    <div class="absolute inset-0 bg-gradient-to-b from-emerald-900/80 via-emerald-900/50 to-emerald-900/20"></div>
    
    <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/90 via-transparent to-transparent"></div>
</div>


    <div class="container mx-auto px-8 relative z-10">
        <div class="max-w-4xl pt-16 md:pt-24">

            {{-- Label / Subtitle --}}
            <div class="inline-flex items-center gap-2 px-5 py-2 bg-yellow-500/90 rounded-xl shadow-lg backdrop-blur-sm mb-6">
                <span class="w-2 h-2 bg-white rounded-full"></span>
                <p class="text-sm font-semibold tracking-wider uppercase text-white">
                    Kecamatan Rogojampi
                </p>
            </div>

            {{-- Main Title --}}
            <h1 class="text-6xl lg:text-7xl font-extrabold leading-tight drop-shadow-2xl">
                Profil Desa Bomo
            </h1>

            {{-- Subtext --}}
            <p class="text-xl mt-4 max-w-2xl text-white/90 leading-relaxed">
                Menyajikan sejarah, visi, misi, dan potensi desa yang terus berkembang menuju masa depan.
            </p>
        </div>
    </div>
</section>
<section class="relative md:hidden w-full">
    <div class="relative h-[420px] overflow-hidden rounded-b-[48px] shadow-2xl" data-aos="fade-down">
        <img 
            src="https://upload.wikimedia.org/wikipedia/commons/6/64/Kantordesabomorogojampibanyuwangi.JPG"
            class="w-full h-full object-cover scale-[1.15] brightness-[0.9]"
            alt="Kantor Desa Bomo"
        >
        {{-- Dark Gradient Overlay (Emerald) --}}
        <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/95 via-emerald-900/40 to-transparent"></div>

        <div class="absolute bottom-12 left-6 right-6">

            {{-- Label --}}
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-500/95 rounded-xl shadow-lg mb-5">
                <span class="w-2 h-2 bg-white rounded-full"></span>
                <p class="text-sm font-semibold uppercase tracking-wide text-white">Kecamatan Rogojampi</p>
            </div>

            {{-- Title --}}
            <h1 class="text-5xl font-extrabold leading-tight text-white drop-shadow-xl">
                Profil Desa Bomo
            </h1>
        </div>
    </div>
</section>

<div class="container mx-auto px-6">
    <section class="mt-16 mb-20 text-center max-w-6xl mx-auto" data-aos="fade-up" data-aos-delay="700">
        {{-- Section Title --}}
        <div class="inline-flex items-center gap-3 mb-6">
            <div class="h-1 w-16 bg-gradient-to-r from-transparent to-emerald-500 rounded-full"></div>
            <h2 class="text-4xl font-black text-gray-800">
                Selamat Datang di Desa Bomo
            </h2>
            <div class="h-1 w-16 bg-gradient-to-l from-transparent to-emerald-500 rounded-full"></div>
        </div>
        
        {{-- Content Card --}}
        <div class="relative p-1 bg-gradient-to-br from-emerald-500 to-yellow-500 rounded-3xl shadow-2xl group transition duration-500 hover:shadow-emerald-400/50">
            <div class="relative bg-white p-8 md:p-12 rounded-2xl border-4 border-white">
                
                {{-- Decorative Icon (House) --}}
                <div class="absolute top-0 right-0 p-4 transform translate-x-4 -translate-y-4 bg-emerald-500 rounded-full shadow-xl group-hover:bg-yellow-500 transition duration-500">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </div>
                
                {{-- Main Text --}}
                <p class="text-lg md:text-xl text-gray-700 leading-relaxed font-medium">
                    Desa Bomo adalah salah satu desa di Kecamatan Rogojampi, Kabupaten Banyuwangi. Desa ini memiliki sejarah panjang dengan <span class="font-extrabold text-emerald-700">keunikan budaya</span> serta <span class="font-extrabold text-emerald-700">keindahan alam</span> yang masih asri, menjadikannya permata di jantung Banyuwangi.
                </p>
                
                {{-- Callout/Commitment --}}
                <p class="mt-4 text-md italic text-gray-500">
                    Kami berkomitmen menjaga harmoni alam dan kearifan lokal.
                </p>
            </div>
        </div>
    </section>
    
    {{-- Separator with Animated Icon --}}
    <div class="flex items-center justify-center my-16">
        <div class="h-0.5 flex-grow bg-gradient-to-r from-transparent via-gray-300 to-transparent max-w-xl"></div>
        <div class="mx-4">
            <svg class="w-8 h-8 text-emerald-600 animate-spin-slow" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z"/>
            </svg>
        </div>
        <div class="h-0.5 flex-grow bg-gradient-to-r from-transparent via-gray-300 to-transparent max-w-xl"></div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-10">
        
        {{-- 📜 Sejarah Desa (Left Column, Span 2) --}}
        <section class="lg:col-span-2 relative" data-aos="fade-right" data-aos-duration="1200">
            
            {{-- Container Wrapper untuk Glow dan Content (Perubahan ada di sini) --}}
            <div class="relative group"> 
                
                {{-- Background Glow (Absolute, mengikuti tinggi konten) --}}
                <div class="absolute -inset-1 bg-gradient-to-r from-emerald-500 to-yellow-500 rounded-2xl opacity-20 group-hover:opacity-30 blur-sm transition duration-500"></div>
                
                {{-- Content Card (Relative, menentukan tinggi) --}}
                <div class="relative p-8 md:p-10 bg-white rounded-2xl shadow-xl border-t-8 border-emerald-600 hover:shadow-2xl transition duration-500">
                    
                    {{-- Header --}}
                    <div class="flex items-center gap-4 mb-6">
                        <div class="p-3 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-xl shadow-lg transform rotate-6">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-black text-emerald-800">
                            Sejarah Desa
                        </h2>
                    </div>
                    
                    {{-- Content --}}
                    <div class="space-y-5">
                        <p class="text-gray-700 leading-relaxed text-lg">
                            Desa Bomo didirikan pada <span class="font-bold text-emerald-700">abad ke-18</span> oleh para leluhur yang menetap di daerah ini karena kesuburan tanah dan sumber daya alam yang melimpah. Kawasan ini dulunya dikenal sebagai daerah perlintasan penting yang menghubungkan pusat-pusat perdagangan lokal.
                        </p>
                        
                        {{-- Highlight Quote --}}
                        <div class="relative pl-6 pr-6 py-4 bg-gradient-to-r from-yellow-50 to-emerald-50 rounded-xl border-l-4 border-yellow-500 shadow-inner">
                            <div class="absolute left-0 top-0 mt-4 ml-4 w-3 h-3 bg-yellow-500 rounded-full"></div>
                            <p class="text-gray-700 leading-relaxed italic text-base ml-4">
                                Seiring waktu, desa ini berkembang menjadi pusat agrikultur, terutama padi dan komoditas perkebunan, serta menjadi wadah pelestarian adat dan tradisi Banyuwangi. Desa Bomo juga menjadi pusat ekonomi masyarakat sekitar dengan berbagai aktivitas perdagangan dan pertanian yang berkembang pesat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- 📊 Demografi (Right Column, Sticky) --}}
        <section class="relative" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="300">
            <div class="sticky top-24">
                <div class="p-6 md:p-8 bg-gradient-to-br from-emerald-50 to-gray-100 rounded-2xl shadow-2xl border border-gray-200">
                    
                    {{-- Header --}}
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-xl shadow-md">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM17.48 10.36a2 2 0 10-3.96 0 2 2 0 003.96 0zM6.48 10.36a2 2 0 10-3.96 0 2 2 0 003.96 0zM10 12a5 5 0 00-5 5v1h10v-1a5 5 0 00-5-5z"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl md:text-3xl font-black text-gray-800">
                            Fakta Demografi
                        </h2>
                    </div>
                    
                    {{-- Data Cards --}}
                    <div class="space-y-4">
                        
                        {{-- Card 1: Jumlah Penduduk --}}
                        <div class="group relative p-5 bg-white rounded-xl shadow-lg border-b-4 border-emerald-500 hover:border-b-4 hover:border-yellow-500 transition-all duration-300 transform hover:scale-[1.02]">
                            <div class="absolute top-0 right-0 p-2 bg-emerald-500 rounded-bl-xl opacity-80">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/></svg>
                            </div>
                            <p class="text-sm font-semibold text-emerald-700 uppercase mb-1">Jumlah Penduduk</p>
                            <p class="text-4xl font-extrabold text-gray-900">5.000<span class="text-xl font-medium"> Jiwa</span></p>
                            <p class="text-xs text-gray-500 mt-1">Estimasi terbaru penduduk Desa Bomo</p>
                        </div>

                        {{-- Card 2: Luas Wilayah --}}
                        <div class="group relative p-5 bg-white rounded-xl shadow-lg border-b-4 border-yellow-500 hover:border-b-4 hover:border-emerald-500 transition-all duration-300 transform hover:scale-[1.02]">
                            <div class="absolute top-0 right-0 p-2 bg-yellow-500 rounded-bl-xl opacity-80">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                            </div>
                            <p class="text-sm font-semibold text-yellow-700 uppercase mb-1">Luas Wilayah</p>
                            <p class="text-4xl font-extrabold text-gray-900">15<span class="text-xl font-medium"> km²</span></p>
                            <p class="text-xs text-gray-500 mt-1">Mayoritas lahan adalah area agrikultur</p>
                        </div>
                        
                        {{-- Card 3: Mata Pencaharian --}}
                        <div class="group relative p-5 bg-white rounded-xl shadow-lg border-b-4 border-emerald-500 hover:border-b-4 hover:border-yellow-500 transition-all duration-300 transform hover:scale-[1.02]">
                            <div class="absolute top-0 right-0 p-2 bg-emerald-500 rounded-bl-xl opacity-80">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"/></svg>
                            </div>
                            <p class="text-sm font-semibold text-emerald-700 uppercase mb-1">Mata Pencaharian Utama</p>
                            <p class="text-xl font-extrabold text-gray-900">Petani, Nelayan & Pedagang</p>
                            <p class="text-xs text-gray-500 mt-1">Potensi ekonomi lokal yang kaya</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </div>

    {{-- 
    |--------------------------------------------------------------------------
    | 🎯 VISI & MISI SECTION
    |--------------------------------------------------------------------------
    --}}
    <section class="my-20 relative" data-aos="fade-up" data-aos-duration="1200">
        {{-- Background Skew --}}
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-100 via-white to-yellow-100 rounded-3xl transform -rotate-1"></div>
        <div class="relative p-8 md:p-12 bg-gradient-to-br from-white to-emerald-50 rounded-3xl shadow-2xl border border-emerald-200">
            
            {{-- Section Header --}}
            <div class="flex items-center gap-4 mb-8">
                <div class="p-4 bg-gradient-to-br from-emerald-600 to-emerald-700 rounded-2xl shadow-xl">
                    <svg class="w-8 h-8 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h2 class="text-3xl md:text-4xl font-black text-emerald-800">
                    Visi dan Misi Desa Bomo
                </h2>
            </div>
            
            {{-- Visi Card --}}
            <div class="relative mb-10 overflow-hidden group rounded-2xl">
                <div class="absolute inset-0 bg-gradient-to-r from-emerald-600 via-emerald-700 to-emerald-800 opacity-95"></div>
                {{-- Pattern Overlay --}}
                <div class="absolute inset-0 opacity-30" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZXI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS1vcGFjaXR5PSIwLjA1IiBzdHJva2Utd2lkdGg9IjEiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JpZCkiLz48L3N2Zz4=');"></div>
                
                <div class="relative p-8 md:p-10">
                    <div class="inline-block px-4 py-1 bg-yellow-400/20 rounded-full mb-4">
                        <h3 class="text-sm font-bold uppercase tracking-widest text-yellow-300">Visi Desa</h3>
                    </div>
                    <p class="text-xl md:text-2xl font-light text-white leading-relaxed">
                        "Mewujudkan Desa Bomo yang <span class="font-bold text-yellow-300">mandiri, sejahtera, dan berdaya saing</span> berbasis potensi lokal melalui pengelolaan yang transparan dan akuntabel."
                    </p>
                    
                    {{-- Large Eye Icon --}}
                    <div class="absolute bottom-4 right-4 opacity-20 group-hover:opacity-30 transition duration-500">
                        <svg class="w-32 h-32 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>
            
            {{-- Misi List --}}
            <div class="space-y-5">
                <div class="flex items-center gap-3 mb-6">
                    <div class="h-1 w-12 bg-gradient-to-r from-yellow-400 to-emerald-600 rounded-full"></div>
                    <h3 class="text-2xl font-black text-gray-800">Misi Desa</h3>
                </div>
                
                <div class="grid gap-5">
                    
                    {{-- Misi 1 --}}
                    <div class="group relative overflow-hidden bg-white rounded-2xl shadow-lg border-l-4 border-yellow-500 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-yellow-100 to-transparent rounded-bl-full opacity-50"></div>
                        <div class="flex items-start gap-4 p-6">
                            <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-xl shadow-lg text-white font-black text-xl">
                                1
                            </div>
                            <p class="text-gray-700 leading-relaxed pt-2">
                                Meningkatkan kesejahteraan masyarakat melalui pengelolaan sumber daya alam dan pengembangan ekonomi kreatif berbasis potensi lokal.
                            </p>
                        </div>
                    </div>
                    
                    {{-- Misi 2 --}}
                    <div class="group relative overflow-hidden bg-white rounded-2xl shadow-lg border-l-4 border-emerald-500 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-emerald-100 to-transparent rounded-bl-full opacity-50"></div>
                        <div class="flex items-start gap-4 p-6">
                            <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-xl shadow-lg text-white font-black text-xl">
                                2
                            </div>
                            <p class="text-gray-700 leading-relaxed pt-2">
                                Meningkatkan pelayanan publik yang cepat, mudah, dan transparan berbasis digital untuk kemudahan akses masyarakat.
                            </p>
                        </div>
                    </div>
                    
                    {{-- Misi 3 --}}
                    <div class="group relative overflow-hidden bg-white rounded-2xl shadow-lg border-l-4 border-yellow-500 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-yellow-100 to-transparent rounded-bl-full opacity-50"></div>
                        <div class="flex items-start gap-4 p-6">
                            <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-xl shadow-lg text-white font-black text-xl">
                                3
                            </div>
                            <p class="text-gray-700 leading-relaxed pt-2">
                                Mendorong pembangunan berkelanjutan, pelestarian lingkungan, dan penguatan budaya lokal untuk generasi masa depan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection