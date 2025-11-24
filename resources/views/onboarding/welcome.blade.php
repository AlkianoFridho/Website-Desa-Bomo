<x-guest-layout>
    {{-- Container utama untuk mengatur tata letak --}}
    <div class="onboarding-container">
        
        <button class="close-button" aria-label="Tutup Halaman" onclick="window.location.href='/'">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>

        <div class="content-wrapper">
            <h1 class="title">Selamat Datang</h1>
            
            <div class="illustration-wrapper">
                {{-- Gunakan fungsi asset() Laravel untuk memuat gambar --}}
                <img src="{{ asset('assets/images/kakek.png') }}" alt="Ilustrasi seorang kakek melambai" class="illustration-img">
            </div>

            <p class="description">
                Aplikasi ini dibuat untuk membantu memahami fungsi utama website desa
            </p>
        </div>

        <div class="button-area">
            {{-- Ganti '#panduan-url' dengan rute ke halaman panduan Anda --}}
            <a href="#panduan-url" class="onboarding-button">Lanjutkan Ke Panduan</a>
        </div>
    </div>
</x-guest-layout>