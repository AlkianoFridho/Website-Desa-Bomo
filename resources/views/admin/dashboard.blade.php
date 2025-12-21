<x-app-layout>
    <div class="min-h-screen bg-gray-50 text-slate-900 font-sans selection:bg-emerald-100 pb-20">
        
        {{-- Header Putih Bersih --}}
        <header class="bg-white border-b border-gray-200 px-8 py-5 shadow-sm relative z-20">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
                {{-- Identitas Desa --}}
                <div class="flex items-center gap-4">
                    <img src="{{ asset('assets/banyuwangi.png') }}" class="w-10 h-auto" alt="Logo">
                    <div>
                        <h1 class="text-xl font-bold tracking-tight text-slate-800 uppercase leading-none">Admin Desa Bomo</h1>
                        <p class="text-[10px] text-emerald-600 font-bold tracking-widest uppercase mt-1">Sistem Pengelolaan Informasi</p>
                    </div>
                </div>

                {{-- Info Waktu & Logout --}}
                <div class="flex items-center gap-6">
                    <div class="hidden md:block text-right border-r border-gray-200 pr-6">
                        <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest mb-0.5">Sesi Aktif</p>
                        <p class="text-sm font-semibold text-slate-600">{{ now()->translatedFormat('l, d F Y') }}</p>
                    </div>
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="flex items-center gap-2 px-5 py-2.5 bg-slate-800 hover:bg-red-600 text-white rounded-lg font-bold text-[11px] uppercase tracking-wider transition-all shadow-md">
                            <span>Keluar</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                        </button>
                    </form>
                </div>
            </div>
        </header>

        <main class="max-w-7xl mx-auto p-6 md:p-10 relative z-10">
            
            {{-- Sapaan --}}
            <div class="mb-10">
                <h2 class="text-3xl font-bold text-slate-800 tracking-tight">Selamat Datang, Admin</h2>
                <p class="text-slate-500 mt-1">Berikut adalah ringkasan data desa hari ini.</p>
            </div>

            <div class="grid grid-cols-12 gap-6">
                
                {{-- Statistik --}}
                <div class="col-span-12 lg:col-span-8 space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        {{-- Kartu Putih dengan Border Halus --}}
                        <div class="bg-white border border-gray-200 p-6 rounded-xl shadow-sm">
                            <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider mb-2">Masyarakat</p>
                            <h3 class="text-4xl font-extrabold text-slate-800 tracking-tight">1,234</h3>
                            <div class="h-1 w-12 bg-emerald-500 rounded-full mt-4"></div>
                        </div>
                        <div class="bg-white border border-gray-200 p-6 rounded-xl shadow-sm">
                            <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider mb-2">Laporan</p>
                            <h3 class="text-4xl font-extrabold text-slate-800 tracking-tight">56</h3>
                            <div class="h-1 w-12 bg-blue-500 rounded-full mt-4"></div>
                        </div>
                        <div class="bg-white border border-gray-200 p-6 rounded-xl shadow-sm">
                            <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider mb-2">Agenda</p>
                            <h3 class="text-4xl font-extrabold text-slate-800 tracking-tight">12</h3>
                            <div class="h-1 w-12 bg-purple-500 rounded-full mt-4"></div>
                        </div>
                    </div>

                    {{-- Menu Konten --}}
                    <div class="bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">
                        <div class="px-8 py-5 border-b border-gray-100 bg-gray-50/50">
                            <h3 class="text-[11px] font-bold text-slate-500 uppercase tracking-[0.2em]">Pusat Pengelolaan Data</h3>
                        </div>
                        <div class="p-8 grid grid-cols-2 md:grid-cols-4 gap-6">
                            <a href="{{ route('admin.organisasi.index') }}" class="group flex flex-col items-center gap-3">
                                <div class="w-16 h-16 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center transition-all group-hover:bg-emerald-500 group-hover:text-white shadow-sm">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                </div>
                                <span class="text-[11px] font-bold uppercase text-slate-600 tracking-wide">Organisasi</span>
                            </a>
                            <a href="{{ route('admin.informasi-publik.index') }}" class="group flex flex-col items-center gap-3">
                                <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center transition-all group-hover:bg-blue-500 group-hover:text-white shadow-sm">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                                </div>
                                <span class="text-[11px] font-bold uppercase text-slate-600 tracking-wide">Infografis</span>
                            </a>
                            <a href="{{ route('admin.profil-desa.index') }}" class="group flex flex-col items-center gap-3">
                                <div class="w-16 h-16 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center transition-all group-hover:bg-purple-500 group-hover:text-white shadow-sm">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                                </div>
                                <span class="text-[11px] font-bold uppercase text-slate-600 tracking-wide">Profil</span>
                            </a>
                            <a href="{{ route('admin.panduan.index') }}" class="group flex flex-col items-center gap-3">
                                <div class="w-16 h-16 bg-amber-50 text-amber-600 rounded-2xl flex items-center justify-center transition-all group-hover:bg-amber-500 group-hover:text-white shadow-sm">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                                </div>
                                <span class="text-[11px] font-bold uppercase text-slate-600 tracking-wide">Panduan</span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Kolom Aktivitas --}}
                <div class="col-span-12 lg:col-span-4">
                    <div class="bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden h-full">
                        <div class="px-8 py-5 border-b border-gray-100 bg-gray-50/50">
                            <h3 class="text-[11px] font-bold text-slate-500 uppercase tracking-widest text-center md:text-left">Aktivitas Terakhir</h3>
                        </div>
                        <div class="p-6 space-y-6">
                            <div class="flex gap-4 items-start pb-4 border-b border-gray-50 last:border-0">
                                <div class="w-2.5 h-2.5 mt-1 rounded-full bg-emerald-500"></div>
                                <div>
                                    <p class="text-[13px] font-semibold text-slate-700 leading-snug">Data Pejabat Desa Baru Selesai Diperbarui.</p>
                                    <p class="text-[10px] text-gray-400 font-medium mt-1">Sistem • Baru Saja</p>
                                </div>
                            </div>
                            <div class="flex gap-4 items-start">
                                <div class="w-2.5 h-2.5 mt-1 rounded-full bg-blue-500"></div>
                                <div>
                                    <p class="text-[13px] font-semibold text-slate-700 leading-snug">Laporan Jalan Rusak Telah Divalidasi.</p>
                                    <p class="text-[10px] text-gray-400 font-medium mt-1">Layanan • 2 Jam Lalu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
</x-app-layout>