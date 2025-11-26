<x-guest-layout class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen p-6 bg-gradient-to-br from-emerald-50 via-white to-green-100 relative overflow-hidden">

        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-0 left-0 w-full h-full" style="background-image: radial-gradient(circle at 20% 50%, rgba(16, 185, 129, 0.15) 0%, transparent 50%), radial-gradient(circle at 80% 80%, rgba(5, 150, 105, 0.15) 0%, transparent 50%);"></div>
        </div>

        <div class="absolute top-20 left-10 w-72 h-72 bg-gradient-to-br from-emerald-200 to-green-300 rounded-full filter blur-3xl opacity-40 animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-gradient-to-tl from-green-200 to-emerald-300 rounded-full filter blur-3xl opacity-40 animate-pulse" style="animation-delay: 2s;"></div>   
        <div class="absolute top-1/2 left-1/3 w-64 h-64 bg-gradient-to-br from-teal-200 to-emerald-200 rounded-full filter blur-2xl opacity-30 animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-10 right-1/4 w-32 h-32 border-4 border-green-200 rounded-full opacity-20"></div>
        <div class="absolute bottom-10 left-1/4 w-40 h-40 border-4 border-emerald-200 rounded-full opacity-20"></div>

        <div class="bg-white/90 backdrop-blur-xl rounded-3xl shadow-2xl max-w-[500px] mx-auto p-8 relative z-10 border border-green-100/50 
                     before:absolute before:inset-0 before:rounded-3xl before:bg-gradient-to-br before:from-green-50/50 before:to-transparent before:opacity-50 before:-z-10">
      
            <button 
                class="absolute top-5 right-5 w-11 h-11 flex items-center justify-center text-red-500 bg-white/80 backdrop-blur-sm rounded-full 
                        transition-all duration-300 hover:bg-red-50 hover:scale-110 hover:rotate-90 shadow-lg hover:shadow-xl border border-red-100"
                aria-label="Tutup Halaman"
                onclick="window.location.href='{{ route('home') }}'">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" stroke-width="2"/>
                    <line x1="15" y1="9" x2="9" y2="15"/>
                    <line x1="9" y1="9" x2="15" y2="15"/>
                </svg>
            </button>

            <div class="flex flex-col items-center mt-8">

                <div class="w-16 h-1 bg-gradient-to-r from-transparent via-green-500 to-transparent rounded-full mb-6"></div>

                <h1 class="text-4xl font-bold bg-gradient-to-r from-green-700 via-emerald-600 to-green-700 bg-clip-text text-transparent mb-2 text-center tracking-tight">
                    Tutorial
                </h1>
                <p class="text-sm text-green-600 font-medium mb-6">Mulai Navigasi Website</p>

                <div class="my-6 w-full flex justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-100 to-emerald-100 rounded-2xl opacity-30 blur-xl"></div>
                    <img 
                        src="{{ asset('assets/icons/onboarding/tutorial.png') }}" 
                        alt="Ilustrasi langkah-langkah navigasi website" 
                        class="w-64 h-auto relative z-10 drop-shadow-2xl">
                </div>
                <div class="w-24 h-0.5 bg-gradient-to-r from-transparent via-green-300 to-transparent rounded-full mb-6"></div>
                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-4 mb-8 border border-green-100/50">
                    <p class="text-lg text-gray-700 font-medium leading-relaxed text-center">
                        Ikuti langkah-langkah berikut untuk menelusuri situs web ini
                    </p>
                </div>
 
                <a 
                    href="{{ route('onboarding.completion') }}" 
                    class="relative py-4 px-8 bg-gradient-to-r from-green-600 via-emerald-600 to-green-600 text-white text-base font-bold text-center rounded-2xl 
                            transition-all duration-300 shadow-lg hover:shadow-2xl hover:from-green-700 hover:via-emerald-700 hover:to-green-700
                            active:scale-95 transform hover:scale-105 w-full group overflow-hidden">
                    <span class="relative z-10 flex items-center justify-center gap-2">
                        Lanjut
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </span>
                    <div class="absolute inset-0 bg-gradient-to-r from-emerald-400 to-green-400 opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                </a>

                <div class="w-16 h-1 bg-gradient-to-r from-transparent via-green-500 to-transparent rounded-full mt-6"></div>
            </div>
        </div>

        <div class="absolute top-1/4 left-20 w-3 h-3 bg-green-400 rounded-full opacity-60 animate-ping"></div>
        <div class="absolute bottom-1/4 right-20 w-2 h-2 bg-emerald-400 rounded-full opacity-60 animate-ping" style="animation-delay: 1s;"></div>
        <div class="absolute top-2/3 right-1/3 w-2.5 h-2.5 bg-green-500 rounded-full opacity-60 animate-ping" style="animation-delay: 2s;"></div>
    </div>
</x-guest-layout>