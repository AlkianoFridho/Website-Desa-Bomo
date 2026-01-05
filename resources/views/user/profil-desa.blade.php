@extends('layouts.appuser')

@section('content')
{{-- Hero Section Profil --}}
<section class="relative w-full h-[400px] md:h-[500px] overflow-hidden">
    <img 
        src="https://upload.wikimedia.org/wikipedia/commons/6/64/Kantordesabomorogojampibanyuwangi.JPG"
        class="w-full h-full object-cover scale-[1.05] brightness-[0.70]"
        alt="Kantor Desa Bomo"
        class="w-full h-full object-cover"
    >
    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="text-center px-4" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-black text-white uppercase tracking-tighter mb-4">Profil Desa Bomo</h1>
            <div class="w-24 h-2 bg-emerald-500 mx-auto rounded-full"></div>
        </div>
    </div>
</section>

{{-- Main Content --}}
<div class="py-20 relative overflow-hidden bg-[#fdfdfd]">
    {{-- Subtle Pattern Background --}}
    <div class="absolute inset-0 z-0 opacity-[0.1]" 
         style="background-image: radial-gradient(#10b981 1.2px, transparent 1.2px); background-size: 30px 30px;">
    </div>

    <div class="container mx-auto px-6 relative z-10">
        
        {{-- Ringkasan & Sejarah --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-32">
            <div data-aos="fade-right">
                <span class="text-emerald-600 font-black uppercase tracking-[0.3em] text-sm mb-4 block">Tentang Kami</span>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Warisan Budaya & Keindahan Alam</h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    Desa Bomo, permata tersembunyi di Kecamatan Rogojampi, Kabupaten Banyuwangi. Desa ini bukan sekadar wilayah administratif, melainkan sebuah harmoni antara sejarah panjang dan keasrian alam yang tetap terjaga hingga saat ini.
                </p>
                <div class="p-8 bg-white rounded-3xl border-l-8 border-emerald-500 shadow-sm">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Sejarah Singkat</h3>
                    <p class="text-gray-600 italic">
    "{{ $profildesa?->sejarah_singkat ?? 'Sejarah singkat belum tersedia.' }}"
</p>

                </div>
            </div>
            <div class="relative" data-aos="fade-left">
                <div class="absolute -top-4 -left-4 w-full h-full border-2 border-emerald-500 rounded-[2rem] z-0"></div>
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/64/Kantordesabomorogojampibanyuwangi.JPG" 
                     class="rounded-[2rem] shadow-2xl relative z-10 hover:scale-[1.02] transition-transform duration-500" alt="Visual Bomo">
            </div>
        </div>

        {{-- Visi & Misi Section (Fixed Alignment) --}}
        <div class="mb-32">
            <div class="bg-emerald-900 rounded-[3rem] p-12 md:p-20 relative overflow-hidden text-white">
                {{-- Glow Effect --}}
                <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-500 rounded-full filter blur-[120px] opacity-20 translate-x-1/2 -translate-y-1/2"></div>
                
                <div class="text-center mb-16" data-aos="zoom-in">
                    <h2 class="text-4xl font-black uppercase tracking-tight mb-4">Visi & Misi</h2>
                    <div class="w-20 h-1 bg-emerald-400 mx-auto rounded-full"></div>
                </div>

                {{-- Perbaikan: Menggunakan items-stretch agar tinggi kolom sama --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-stretch">
                    {{-- Visi --}}
                    <div class="space-y-6 flex flex-col" data-aos="fade-right">
                        <div class="flex items-center gap-4">
                            <div class="p-3 bg-emerald-500/20 rounded-2xl border border-emerald-400/30">
                                <svg class="w-8 h-8 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            </div>
                            <h3 class="text-2xl font-bold italic">Visi Kami</h3>
                        </div>
                        <p class="text-xl text-emerald-100 leading-relaxed font-light flex-grow">
                            "Mewujudkan Desa Bomo yang mandiri, sejahtera, dan berdaya saing berbasis potensi lokal yang berkelanjutan."
                        </p>
                    </div>

                    {{-- Misi (Dengan Garis Pembatas Kiri di Layar Besar) --}}
                    <div class="space-y-6 md:border-l md:border-emerald-400/20 md:pl-12" data-aos="fade-left">
                        <div class="flex items-center gap-4">
                            <div class="p-3 bg-emerald-500/20 rounded-2xl border border-emerald-400/30">
                                <svg class="w-8 h-8 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
                            </div>
                            <h3 class="text-2xl font-bold italic">Misi Kami</h3>
                        </div>
                        <ul class="space-y-4">
                            @php
                                $misi = [
                                    "Optimalisasi Sumber Daya Alam untuk ekonomi kreatif.",
                                    "Transformasi digital pada seluruh lini pelayanan publik.",
                                    "Pelestarian ekosistem lingkungan dan pembangunan hijau."
                                ];
                            @endphp
                            @foreach($misi as $item)
                            <li class="flex items-start gap-3 text-emerald-100/90">
                                <span class="text-emerald-400 mt-1">✦</span>
                                <span>{{ $item }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- Demografi Section --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center" data-aos="fade-up">
            <div class="p-10 bg-white rounded-[2.5rem] shadow-sm border border-gray-100 hover:border-emerald-200 transition-all group">
                <div class="w-16 h-16 bg-emerald-50 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-emerald-500 group-hover:text-white transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                </div>
                <h4 class="text-4xl font-black text-gray-900 mb-2">5.000+</h4>
                <p class="text-gray-500 uppercase tracking-widest text-xs font-bold">Total Penduduk</p>
            </div>

            <div class="p-10 bg-white rounded-[2.5rem] shadow-sm border border-gray-100 hover:border-emerald-200 transition-all group">
                <div class="w-16 h-16 bg-emerald-50 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-emerald-500 group-hover:text-white transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg>
                </div>
                <h4 class="text-4xl font-black text-gray-900 mb-2">15 km²</h4>
                <p class="text-gray-500 uppercase tracking-widest text-xs font-bold">Luas Wilayah</p>
            </div>

            <div class="p-10 bg-white rounded-[2.5rem] shadow-sm border border-gray-100 hover:border-emerald-200 transition-all group">
                <div class="w-16 h-16 bg-emerald-50 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-emerald-500 group-hover:text-white transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <h4 class="text-4xl font-black text-gray-900 mb-2">3 Sektor</h4>
                <p class="text-gray-500 uppercase tracking-widest text-xs font-bold">Potensi Utama</p>
            </div>
        </div>

        {{-- Preview Infografis Section --}}
        <div class="mt-32 relative" data-aos="fade-up">
            <div class="relative p-12 md:p-16 bg-white/80 backdrop-blur-md rounded-[3rem] border border-emerald-100 shadow-[0_20px_50px_rgba(0,0,0,0.05)] overflow-hidden text-center">
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-emerald-50 rounded-full opacity-50"></div>
                <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-emerald-50 rounded-full opacity-50"></div>

                <div class="relative z-10">
                    <span class="text-emerald-600 font-black uppercase tracking-[0.4em] text-xs mb-4 block">Data & Statistik</span>
                    <h2 class="text-3xl md:text-4xl font-black text-gray-900 mb-6">Transparansi Melalui Data</h2>
                    <p class="text-gray-600 text-lg leading-relaxed max-w-3xl mx-auto mb-10">
                        Kami percaya bahwa data adalah kunci transparansi. Jelajahi statistik kependudukan, realisasi anggaran, hingga potensi unggulan Desa Bomo yang kami sajikan secara visual dan interaktif.
                    </p>

                    <a href="{{ route('infografis') }}" 
                       class="group inline-flex items-center px-10 py-4 bg-emerald-600 text-white font-bold rounded-2xl hover:bg-emerald-700 transition-all duration-300 shadow-[0_10px_20px_rgba(16,185,129,0.2)] hover:shadow-[0_15px_30px_rgba(16,185,129,0.3)] hover:-translate-y-1">
                        <span>Lihat Infografis Lengkap</span>
                        <svg class="w-5 h-5 ml-3 transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection