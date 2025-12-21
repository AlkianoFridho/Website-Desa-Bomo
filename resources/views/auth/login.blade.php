<x-guest-layout>
    <style>
        /* Animasi Floating untuk Cahaya Glow */
        @keyframes float-glow {
            0%, 100% { transform: translateY(0) scale(1); opacity: 0.3; }
            50% { transform: translateY(-40px) scale(1.1); opacity: 0.6; }
        }
        @keyframes float-reverse {
            0%, 100% { transform: translateY(0) scale(1.1); opacity: 0.4; }
            50% { transform: translateY(50px) scale(1); opacity: 0.2; }
        }
        .animate-glow-1 { animation: float-glow 8s ease-in-out infinite; }
        .animate-glow-2 { animation: float-reverse 10s ease-in-out infinite; }
    </style>

    {{-- Container Utama dengan Background Gelap & Glow --}}
    <div class="min-h-screen relative flex flex-col items-center justify-center bg-[#0f172a] overflow-hidden p-6">
        
        {{-- Layer 1: Pattern Titik khas Desa Bomo --}}
        <div class="absolute inset-0 z-0 opacity-[0.08]" 
             style="background-image: radial-gradient(#10b981 1.5px, transparent 1.5px); background-size: 32px 32px;">
        </div>

        {{-- Layer 2: Dekorasi Cahaya dengan Animasi Naik-Turun --}}
        <div class="absolute top-[-10%] right-[-10%] w-[600px] h-[600px] bg-emerald-500/10 rounded-full filter blur-[120px] animate-glow-1"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[600px] h-[600px] bg-blue-500/10 rounded-full filter blur-[120px] animate-glow-2"></div>

        <div class="relative z-10 w-full max-w-[440px]">
            
            {{-- Header: Logo & Judul --}}
            <div class="text-center mb-10" data-aos="fade-down">
                <img src="{{ asset('assets/banyuwangi.png') }}" class="w-20 mx-auto mb-6 drop-shadow-2xl">
                <h2 class="text-3xl font-black text-white uppercase tracking-tighter">Admin Bomo</h2>
                <div class="flex items-center justify-center gap-2 mt-2">
                    <div class="h-px w-8 bg-emerald-500/50"></div>
                    <p class="text-gray-400 text-[10px] font-black uppercase tracking-[0.3em]">Sistem Informasi Desa</p>
                    <div class="h-px w-8 bg-emerald-500/50"></div>
                </div>
            </div>

            {{-- Card Login Matte --}}
            <div class="bg-white/5 backdrop-blur-2xl border border-white/10 p-10 rounded-[2.5rem] shadow-2xl" data-aos="zoom-in">
                
                <x-auth-session-status class="mb-6" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    {{-- Input Email --}}
                    <div class="space-y-2">
                        <label for="email" class="text-gray-400 text-[10px] font-black uppercase tracking-widest ml-1">Kredensial Email</label>
                        <input id="email" type="email" name="email" :value="old('email')" required autofocus 
                            class="w-full bg-black/20 border border-white/10 rounded-2xl px-5 py-4 text-white placeholder-gray-600 focus:ring-2 focus:ring-emerald-500/50 focus:border-emerald-500 outline-none transition-all duration-300"
                            placeholder="nama@email.com">
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400 text-xs" />
                    </div>

                    {{-- Input Password --}}
                    <div class="space-y-2">
                        <div class="flex justify-between items-center ml-1">
                            <label for="password" class="text-gray-400 text-[10px] font-black uppercase tracking-widest">Kata Sandi</label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-[10px] text-emerald-400 hover:text-emerald-300 font-bold uppercase tracking-tighter transition-colors">Lupa?</a>
                            @endif
                        </div>
                        <input id="password" type="password" name="password" required 
                            class="w-full bg-black/20 border border-white/10 rounded-2xl px-5 py-4 text-white placeholder-gray-600 focus:ring-2 focus:ring-emerald-500/50 focus:border-emerald-500 outline-none transition-all duration-300"
                            placeholder="••••••••">
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400 text-xs" />
                    </div>

                    {{-- Remember Me --}}
                    <div class="flex items-center ml-1">
                        <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                            <input id="remember_me" type="checkbox" name="remember" class="rounded border-white/10 bg-white/5 text-emerald-600 shadow-sm focus:ring-emerald-500/50 ring-offset-black">
                            <span class="ms-3 text-xs text-gray-400 group-hover:text-gray-300 transition-colors uppercase tracking-widest font-bold">Ingat Sesi Ini</span>
                        </label>
                    </div>

                    {{-- Tombol Login --}}
                    <button type="submit" 
                            class="w-full bg-emerald-600 hover:bg-emerald-500 text-white font-black py-4 rounded-2xl shadow-[0_10px_20px_rgba(16,185,129,0.2)] hover:shadow-[0_15px_30px_rgba(16,185,129,0.4)] transition-all duration-500 transform hover:-translate-y-1 active:scale-95 tracking-widest text-xs">
                        OTENTIKASI MASUK
                    </button>

                    {{-- Template Baravorage (Security Notice) --}}
                    <div class="mt-8 pt-6 border-t border-white/5 text-center">
                        <p class="text-[9px] text-gray-500 font-medium uppercase tracking-[0.2em] leading-relaxed">
                            Sistem terenkripsi end-to-end. <br>
                            Akses ilegal akan dicatat secara otomatis oleh server.
                        </p>
                    </div>
                </form>
            </div>

            {{-- Footer Navigasi --}}
            <div class="mt-10 flex justify-center items-center gap-6">
                <a href="{{ route('home') }}" class="text-[10px] text-gray-500 hover:text-emerald-400 font-black uppercase tracking-widest transition-colors">Beranda Utama</a>
                <div class="h-1 w-1 bg-gray-800 rounded-full"></div>
                <p class="text-[10px] text-gray-600 font-bold uppercase tracking-widest">&copy; 2025 Desa Bomo</p>
            </div>
        </div>
    </div>
</x-guest-layout>