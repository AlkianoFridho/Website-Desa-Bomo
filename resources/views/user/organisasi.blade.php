@extends('layouts.appuser')

@section('content')
{{-- Background Mewah dengan Intensitas Warna Lebih Kuat --}}
<div class="py-24 min-h-screen relative overflow-hidden bg-[#fdfdfd]">
    
    {{-- 1. Pattern Titik yang Lebih Terlihat (Emerald Dot) --}}
    <div class="absolute inset-0 z-0 opacity-[0.2]" 
         style="background-image: radial-gradient(#10b981 1.5px, transparent 1.5px); background-size: 32px 32px; background-attachment: fixed;">
    </div>
    
    {{-- 2. Dekorasi Glow Gradient yang Lebih Nyata --}}
    {{-- Glow Kiri Atas --}}
    <div class="absolute top-0 left-0 w-[600px] h-[600px] bg-emerald-300/40 rounded-full filter blur-[120px] -translate-x-1/2 -translate-y-1/2"></div>
    {{-- Glow Kanan Bawah --}}
    <div class="absolute bottom-0 right-0 w-[800px] h-[800px] bg-emerald-200/40 rounded-full filter blur-[150px] translate-x-1/3 translate-y-1/3"></div>
    {{-- Glow Tengah (Halus) --}}
    <div class="absolute top-1/2 left-1/2 w-[1000px] h-[1000px] bg-white/50 rounded-full filter blur-[100px] -translate-x-1/2 -translate-y-1/2"></div>

    <div class="container mx-auto px-4 relative z-10">
        {{-- Header Section --}}
        <div class="text-center mb-24">
            <span class="inline-block px-4 py-1.5 mb-6 text-xs font-black uppercase tracking-[0.3em] bg-emerald-500/10 text-emerald-600 rounded-full border border-emerald-500/20">
                Pemerintahan Desa
            </span>
            <h1 class="text-5xl font-black tracking-tighter text-gray-900 mb-4 uppercase">Struktur Organisasi</h1>
            <p class="text-gray-500 max-w-2xl mx-auto italic text-lg leading-relaxed">
                "Sinergi perangkat desa dalam melayani masyarakat dengan integritas dan profesionalisme."
            </p>
            <div class="w-24 h-2 bg-emerald-500 mx-auto rounded-full mt-8 shadow-[0_4px_10px_rgba(16,185,129,0.3)]"></div>
        </div>

        {{-- Organisasi Tree Section --}}
        <div class="organisasi-tree flex justify-center w-full overflow-x-auto pb-20">
            <ul class="tree">
                {{-- LEVEL 1: KEPALA DESA --}}
                @foreach($organisasi->where('jabatan', 'Kepala Desa') as $kades)
                <li>
                    <div class="node-wrapper flex justify-center drop-shadow-2xl">
                        @include('user.infografis._card_organisasi', ['anggota' => $kades, 'size' => 'large'])
                    </div>

                    {{-- LEVEL 2: SEKRETARIAT & BENDAHARA --}}
                    <ul>
                        @foreach($organisasi->whereIn('jabatan', ['Sekretaris Desa', 'Bendahara Desa']) as $inti)
                        <li>
                            <div class="node-wrapper flex justify-center">
                                @include('user.infografis._card_organisasi', ['anggota' => $inti, 'size' => 'medium'])
                            </div>

                            {{-- LEVEL 3: SEMUA STAF/KAUR/KASI --}}
                            @php 
                                $staf = $organisasi->whereNotIn('jabatan', ['Kepala Desa', 'Sekretaris Desa', 'Bendahara Desa']); 
                            @endphp
                            
                            {{-- Hanya tampilkan staf di bawah Sekretaris (node pertama) agar simetris --}}
                            @if($loop->first && $staf->count() > 0)
                            <ul class="staf-grid">
                                @foreach($staf as $s)
                                <li>
                                    <div class="node-wrapper flex justify-center">
                                        @include('user.infografis._card_organisasi', ['anggota' => $s, 'size' => 'small'])
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>

        {{-- Footer Section (Mengisi Kekosongan dengan Gaya Glassmorphism) --}}
        <div class="max-w-4xl mx-auto text-center mt-20 p-12 bg-white/70 backdrop-blur-xl rounded-[3rem] border border-white shadow-[0_20px_50px_rgba(0,0,0,0.05)] relative overflow-hidden">
            {{-- Aksen Dekoratif di Footer --}}
            <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-500/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
            
            <h3 class="text-2xl font-bold text-gray-800 mb-4 tracking-tight">Membangun Bersama Masyarakat</h3>
            <p class="text-gray-600 leading-relaxed text-lg">
                Struktur organisasi ini dirancang untuk memastikan setiap fungsi pelayanan publik berjalan optimal, transparan, dan akuntabel bagi seluruh warga desa demi kemajuan bersama.
            </p>
        </div>
    </div>
</div>

<style>
    /* CSS TREE GARIS HIJAU EMERALD - LEBIH TEBAL */
    .tree, .tree ul, .tree li {
        margin: 0; padding: 0; list-style: none;
    }
    .tree ul {
        padding-top: 60px; position: relative;
        display: flex; justify-content: center;
    }
    .tree li {
        text-align: center; position: relative;
        padding: 60px 15px 0 15px;
    }

    /* Garis Horizontal */
    .tree li::before, .tree li::after {
        content: ''; position: absolute; top: 0; right: 50%;
        border-top: 3px solid #10b981; width: 50%; height: 60px;
    }
    .tree li::after {
        right: auto; left: 50%; border-left: 3px solid #10b981;
    }

    /* Hilangkan garis pada elemen tunggal */
    .tree li:only-child::after, .tree li:only-child::before { display: none; }
    .tree li:only-child { padding-top: 0; }

    /* Garis Vertikal Utama */
    .tree ul::before {
        content: ''; position: absolute; top: 0; left: 50%;
        border-left: 3px solid #10b981; height: 60px; width: 0;
    }

    .node-wrapper { position: relative; z-index: 10; }

    /* Agar Grid Staf menyamping */
    .staf-grid { display: flex !important; flex-wrap: nowrap !important; }

    /* Animasi Halus */
    .node-wrapper {
        transition: transform 0.3s ease;
    }
    .node-wrapper:hover {
        transform: translateY(-5px);
    }

    /* Responsif Mobile */
    @media (max-width: 768px) {
        .tree ul { flex-direction: column; align-items: center; }
        .tree li { padding: 30px 0 0 0; }
        .tree li::before, .tree li::after { display: none; }
        .staf-grid { flex-wrap: wrap !important; justify-content: center; gap: 20px; }
    }
</style>
@endsection