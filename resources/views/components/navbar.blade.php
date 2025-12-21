<nav class="bg-white border-b border-gray-200 shadow-lg sticky top-0 z-50 backdrop-blur-md bg-white/95"
    x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center h-20">

            {{-- Logo & Brand --}}
            <a href="{{ route('welcome') }}" class="flex items-center gap-3 group">
                <div
                    class="w-12 h-12 bg-gradient-to-br from-green-600 to-green-700 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('assets/banyuwangi.png') }}" alt="Ikon Banyuwangi"
                        class="h-8 w-8 object-contain">
                </div>
                <div class="flex flex-col">
                    <span class="text-gray-900 text-xl font-black tracking-tight">Desa Bomo</span>
                    <span class="text-green-600 text-xs font-semibold">Rogojampi, Banyuwangi</span>
                </div>
            </a>

            {{-- Desktop Menu --}}
            <ul class="hidden lg:flex items-center space-x-1">
                <li>
                    <a href="{{ route('welcome') }}"
                        class="px-4 py-2 text-gray-700 hover:text-green-600 font-semibold transition-all duration-300 hover:bg-green-50 rounded-lg relative group">
                        Home
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-green-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('profil-desa') }}"
                        class="px-4 py-2 text-gray-700 hover:text-green-600 font-semibold transition-all duration-300 hover:bg-green-50 rounded-lg relative group">
                        Profil Desa
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-green-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('organisasi') }}"
                        class="px-4 py-2 text-gray-700 hover:text-green-600 font-semibold transition-all duration-300 hover:bg-green-50 rounded-lg relative group">
                        Organisasi
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-green-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('informasi') }}"
                        class="px-4 py-2 text-gray-700 hover:text-green-600 font-semibold transition-all duration-300 hover:bg-green-50 rounded-lg relative group">
                        Informasi Publik
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-green-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                </li>

                {{-- 🔥 Berita (link publik) --}}
                <li>
                    <a href="{{ route('user.berita.index') }}"
                        class="px-4 py-2 font-semibold transition-all duration-300 rounded-lg relative group
                        {{ request()->is('berita*') ? 'text-green-600 bg-green-50 border-b-2 border-green-600' : 'text-gray-700 hover:text-green-600 hover:bg-green-50' }}">
                        Berita
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-green-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('pengaduan') }}"
                        class="px-4 py-2 text-gray-700 hover:text-green-600 font-semibold transition-all duration-300 hover:bg-green-50 rounded-lg relative group">
                        Pengaduan
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-green-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('panduan.user') }}"
                        class="px-4 py-2 text-gray-700 hover:text-green-600 font-semibold transition-all duration-300 hover:bg-green-50 rounded-lg relative group">
                        Panduan
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-green-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('user.bantuan') }}"
                        class="px-5 py-2.5 bg-green-600 text-white font-bold rounded-full hover:bg-green-700 hover:shadow-lg transition-all duration-300 hover:scale-105">
                        Bantuan
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Bottom Navigation Mobile -->
<div class="fixed bottom-4 left-4 right-4 md:hidden z-40">
    <div class="bg-white shadow-2xl border border-gray-200 rounded-2xl p-2 backdrop-blur-md bg-white/95">
        <div class="grid grid-cols-5 gap-2">

            <!-- Home -->
            <a href="{{ route('welcome') }}"
                class="group relative flex flex-col items-center gap-1 p-2 rounded-xl border transition-all duration-300 transform hover:scale-105 active:scale-95
               {{ request()->is('/') ? 'bg-green-600 text-white border-green-600 shadow-lg shadow-green-500/50' : 'text-green-600 border-green-300 hover:border-green-500 hover:bg-green-50' }}">
                <x-heroicon-o-home class="w-6 h-6 transition-transform group-hover:scale-110" />
                <span class="text-xs font-semibold">BERANDA</span>
            </a>

            <!-- Profil Desa -->
            <a href="{{ route('profil-desa') }}"
                class="group relative flex flex-col items-center gap-1 p-2 rounded-xl border transition-all duration-300 transform hover:scale-105 active:scale-95
               {{ request()->is('profil-desa') ? 'bg-green-600 text-white border-green-600 shadow-lg shadow-green-500/50' : 'text-green-600 border-green-300 hover:border-green-500 hover:bg-green-50' }}">
                <x-heroicon-o-information-circle class="w-6 h-6 transition-transform group-hover:scale-110" />
                <span class="text-xs font-semibold">PROFIL</span>
            </a>

            <!-- Informasi Publik -->
            <a href="{{ route('informasi') }}"
                class="group relative flex flex-col items-center gap-1 p-2 rounded-xl border transition-all duration-300 transform hover:scale-105 active:scale-95
               {{ request()->is('informasi-publik') ? 'bg-green-600 text-white border-green-600 shadow-lg shadow-green-500/50' : 'text-green-600 border-green-300 hover:border-green-500 hover:bg-green-50' }}">
                <x-heroicon-o-document-text class="w-6 h-6 transition-transform group-hover:scale-110" />
                <span class="text-xs font-semibold">INFORMASI</span>
            </a>

            <!-- 🔥 Berita -->
            <a href="{{ route('user.berita.index') }}"
                class="group relative flex flex-col items-center gap-1 p-2 rounded-xl border transition-all duration-300 transform hover:scale-105 active:scale-95
               {{ request()->is('berita*') ? 'bg-green-600 text-white border-green-600 shadow-lg shadow-green-500/50' : 'text-green-600 border-green-300 hover:border-green-500 hover:bg-green-50' }}">
                <x-heroicon-o-newspaper class="w-6 h-6 transition-transform group-hover:scale-110" />
                <span class="text-xs font-semibold">BERITA</span>
            </a>

            <!-- Pengaduan -->
            <a href="{{ route('pengaduan') }}"
                class="group relative flex flex-col items-center gap-1 p-2 rounded-xl border transition-all duration-300 transform hover:scale-105 active:scale-95
               {{ request()->is('pengaduan') ? 'bg-green-600 text-white border-green-600 shadow-lg shadow-green-500/50' : 'text-green-600 border-green-300 hover:border-green-500 hover:bg-green-50' }}">
                <x-heroicon-o-chat-bubble-left-right class="w-6 h-6 transition-transform group-hover:scale-110" />
                <span class="text-xs font-semibold">PENGADUAN</span>
            </a>

            <!-- Panduan -->
            <a href="{{ route('panduan.user') }}"
                class="group relative flex flex-col items-center gap-1 p-2 rounded-xl border transition-all duration-300 transform hover:scale-105 active:scale-95
               {{ request()->is('panduan') ? 'bg-green-600 text-white border-green-600 shadow-lg shadow-green-500/50' : 'text-green-600 border-green-300 hover:border-green-500 hover:bg-green-50' }}">
                <x-heroicon-o-book-open class="w-6 h-6 transition-transform group-hover:scale-110" />
                <span class="text-xs font-semibold">PANDUAN</span>
            </a>

            <!-- Bantuan -->
            <a href="{{ route('user.bantuan') }}"
                class="group relative flex flex-col items-center gap-1 p-2 rounded-xl border transition-all duration-300 transform hover:scale-105 active:scale-95
               {{ request()->is('bantuan') ? 'bg-green-600 text-white border-green-600 shadow-lg shadow-green-500/50' : 'text-green-600 border-green-300 hover:border-green-500 hover:bg-green-50' }}">
                <x-heroicon-o-question-mark-circle class="w-6 h-6 transition-transform group-hover:scale-110" />
                <span class="text-xs font-semibold">BANTUAN</span>
            </a>

        </div>
    </div>
</div>