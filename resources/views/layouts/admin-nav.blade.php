{{-- resources/views/layouts/admin-nav.blade.php --}}
<header
    x-data="{ open:false }"
    class="sticky top-0 z-30 bg-white/80 backdrop-blur-xl border-b border-gray-200"
>
    <div class="max-w-7xl mx-auto px-6 md:px-10">
        {{-- TOP BAR --}}
        <div class="h-16 flex items-center justify-between gap-4">

            {{-- BRAND --}}
            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 rounded-xl bg-emerald-50 border border-emerald-100 flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('assets/banyuwangi.png') }}" class="w-7 h-7 object-contain" alt="Logo">
                    </div>

                    <div class="leading-tight">
                        <div class="flex items-center gap-2">
                            <h1 class="text-sm md:text-base font-extrabold tracking-tight text-slate-800">
                                Admin Desa Bomo
                            </h1>
                            <span class="hidden md:inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-100">
                                ONLINE
                            </span>
                        </div>
                        <p class="text-[10px] text-slate-500 font-semibold tracking-wider uppercase">
                            Sistem Pengelolaan Informasi
                        </p>
                    </div>
                </a>
            </div>

            {{-- SEARCH (opsional) --}}
            <div class="hidden lg:flex flex-1 max-w-md">
                <div class="w-full relative">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-4.35-4.35m1.85-5.15a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </span>
                    <input
                        type="text"
                        placeholder="Cari menu atau data..."
                        class="w-full pl-10 pr-3 py-2 rounded-xl bg-white border border-gray-200
                               focus:ring-2 focus:ring-emerald-200 focus:border-emerald-300
                               text-sm text-slate-700 placeholder:text-slate-400"
                    />
                </div>
            </div>

            {{-- RIGHT ACTIONS --}}
            <div class="flex items-center gap-3">

                {{-- TANGGAL --}}
                <div class="hidden md:flex items-center gap-2 px-3 py-2 rounded-xl bg-white border border-gray-200">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="text-xs font-semibold text-slate-600">
                        {{ now()->translatedFormat('l, d F Y') }}
                    </span>
                </div>

                {{-- QUICK ICONS --}}
                <a href="{{ route('admin.profil-desa.index') }}"
                   class="hidden sm:inline-flex items-center justify-center w-10 h-10 rounded-xl bg-white border border-gray-200 hover:border-emerald-200 hover:bg-emerald-50 transition"
                   title="Profil Desa">
                    <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 21h8M12 17v4m-7-9h14M5 12l7-7 7 7v6a2 2 0 01-2 2H7a2 2 0 01-2-2v-6z" />
                    </svg>
                </a>

                <a href="{{ route('admin.panduan.index') }}"
                   class="hidden sm:inline-flex items-center justify-center w-10 h-10 rounded-xl bg-white border border-gray-200 hover:border-amber-200 hover:bg-amber-50 transition"
                   title="Panduan">
                    <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </a>

                {{-- USER + LOGOUT --}}
                <div class="hidden sm:flex items-center gap-3 pl-3 border-l border-gray-200">
                    @auth
                        <div class="text-right leading-tight">
                            <p class="text-xs font-bold text-slate-700">{{ auth()->user()->name }}</p>
                            <p class="text-[10px] text-slate-500 font-semibold uppercase tracking-wider">
                                {{ auth()->user()->role ?? 'user' }}
                            </p>
                        </div>
                    @endauth

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-slate-900 hover:bg-red-600 text-white text-xs font-bold tracking-wide transition shadow-sm">
                            <span>Keluar</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke
                                      d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </button>
                    </form>
                </div>

                {{-- MOBILE TOGGLE --}}
                <button
                    @click="open = !open"
                    class="sm:hidden inline-flex items-center justify-center w-10 h-10 rounded-xl bg-white border border-gray-200 hover:bg-slate-50 transition"
                    aria-label="Toggle menu"
                >
                    <svg x-show="!open" class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="open" x-cloak class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

            </div>
        </div>

        {{-- SECONDARY NAV (TABS) --}}
        @php
            $tabs = [
                ['label' => 'Dashboard', 'route' => 'home', 'active' => request()->routeIs('home')],
                ['label' => 'Profil Desa', 'route' => 'admin.profil-desa.index', 'active' => request()->routeIs('admin.profil-desa.*')],
                ['label' => 'Berita', 'route' => 'admin.berita.index', 'active' => request()->routeIs('admin.berita.*')],
                ['label' => 'Struktur Organisasi', 'route' => 'admin.organisasi.index', 'active' => request()->routeIs('admin.organisasi.*')],
                ['label' => 'Pengaduan', 'route' => 'admin.pengaduan.index', 'active' => request()->routeIs('admin.pengaduan.*')],
                ['label' => 'Panduan', 'route' => 'admin.panduan.index', 'active' => request()->routeIs('admin.panduan.*')],
                ['label' => 'Bantuan', 'route' => 'admin.bantuan.index', 'active' => request()->routeIs('admin.bantuan.*')],
            ];
        @endphp

        <div class="pb-4">
            <nav class="hidden sm:flex items-center gap-2 overflow-x-auto">
                @foreach($tabs as $item)
                    <a href="{{ route($item['route']) }}"
                       class="px-4 py-2 rounded-xl text-sm font-bold transition whitespace-nowrap
                       {{ $item['active']
                            ? 'bg-emerald-600 text-white shadow-sm'
                            : 'bg-white border border-gray-200 text-slate-600 hover:bg-slate-50 hover:border-slate-300'
                       }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </nav>

            {{-- MOBILE MENU --}}
            <div x-show="open" x-cloak class="sm:hidden mt-3 pb-2">
                <div class="bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">
                    <div class="p-3 grid grid-cols-1 gap-2">
                        @foreach($tabs as $item)
                            <a href="{{ route($item['route']) }}"
                               class="px-4 py-3 rounded-xl text-sm font-bold transition
                               {{ $item['active']
                                    ? 'bg-emerald-600 text-white'
                                    : 'bg-slate-50 text-slate-700 hover:bg-slate-100'
                               }}">
                                {{ $item['label'] }}
                            </a>
                        @endforeach

                        <div class="mt-2 border-t border-gray-100 pt-3 flex items-center justify-between">
                            <div class="leading-tight">
                                @auth
                                    <p class="text-sm font-bold text-slate-800">{{ auth()->user()->name }}</p>
                                    <p class="text-[10px] text-slate-500 font-semibold uppercase tracking-wider">
                                        {{ auth()->user()->role ?? 'user' }}
                                    </p>
                                @endauth
                            </div>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                        class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-slate-900 hover:bg-red-600 text-white text-xs font-bold tracking-wide transition shadow-sm">
                                    <span>Keluar</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
