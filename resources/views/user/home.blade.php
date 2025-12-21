@extends('layouts.appuser')

@section('content')
<section class="relative w-full h-[85vh] min-h-[700px] overflow-hidden hidden md:block">
    <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
        <source src="{{ asset('assets/BOMO KU BUMI KU.mp4') }}" type="video/mp4">
    </video>

    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-black/50 to-transparent z-10"></div>

    <div class="relative z-20 flex flex-col items-center justify-center h-full px-8 text-center">
        <div class="text-white max-w-5xl" 
             data-aos="fade-up" 
             data-aos-duration="1500" 
             data-aos-easing="ease-out-quad">
            
            <p class="text-xl font-medium italic mb-3 tracking-widest uppercase opacity-80" 
               data-aos="fade-up" data-aos-delay="200">Selamat Datang di</p>
            
            <h1 class="text-6xl lg:text-8xl font-extrabold leading-tight mb-6 tracking-tight drop-shadow-lg" 
                style="text-shadow: 2px 2px 10px rgba(0,0,0,0.8);"
                data-aos="fade-up" data-aos-delay="400">
                Desa Bomo
            </h1>
            
            <p class="text-2xl font-light opacity-95 mb-10"
               data-aos="fade-up" data-aos-delay="600">
                Gerbang Keindahan Alam dan Kearifan Lokal Banyuwangi.
            </p>

            <a href="#profil-home"
               class="inline-flex items-center mt-6 px-12 py-4 text-xl bg-yellow-600/90 hover:bg-yellow-700 rounded-full text-white font-bold shadow-2xl shadow-yellow-800/50 transition duration-500 ease-in-out transform hover:scale-110 hover:ring-4 ring-yellow-400 ring-offset-4 ring-offset-gray-900"
               data-aos="zoom-in" data-aos-delay="800">
               <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
               Jelajahi Pesona Kami
            </a>
        </div>
    </div>
</section>


<section class="md:hidden bg-gradient-to-br from-emerald-800 to-green-900 text-white py-16 px-6 shadow-xl">
    <h1 class="text-4xl font-extrabold text-center mb-4" data-aos="fade-down">Desa Bomo</h1>
    <p class="text-center text-md mb-8 opacity-90" data-aos="fade-down" data-aos-delay="100">
        Warisan budaya dan keindahan alam Rogojampi.
    </p>

    <div class="grid grid-cols-2 gap-4">
        <a href="{{ route('profil-desa') }}"
           class="flex flex-col items-center justify-center bg-white text-emerald-800 font-bold p-4 rounded-xl shadow-lg border-b-4 border-yellow-600 hover:bg-gray-100 transition transform hover:scale-[1.05]" data-aos="zoom-in" data-aos-delay="200">
           <svg class="w-7 h-7 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-5 0H5m14 0h-2M5 21h2m0-9h2m4 0h2"></path></svg>
           <span class="text-sm">Profil Desa</span>
        </a>

        <a href="{{ route('infografis') }}"
           class="flex flex-col items-center justify-center bg-white text-emerald-800 font-bold p-4 rounded-xl shadow-lg border-b-4 border-yellow-600 hover:bg-gray-100 transition transform hover:scale-[1.05]" data-aos="zoom-in" data-aos-delay="300">
            <svg class="w-7 h-7 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
            <span class="text-sm">Infografis</span>
        </a>
    </div>
</section>


<section id="profil-home" class="py-24 bg-gray-50 overflow-hidden">
    <div class="max-w-screen-xl mx-auto px-8 grid grid-cols-1 md:grid-cols-5 gap-16 items-center">
        <div class="md:col-span-3 order-2 md:order-1" data-aos="fade-right" data-aos-duration="1200">
            <span class="text-sm font-semibold uppercase text-yellow-700 block mb-2 tracking-widest">Kearifan Lokal</span>
            <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-800 mb-6 border-b border-gray-300 pb-4">Desa Bomo: Sebuah Warisan</h2>
            <p class="text-gray-700 leading-relaxed text-lg mb-6">
                Terletak di Kecamatan Rogojampi, Kabupaten Banyuwangi, *Desa Bomo* adalah perpaduan harmonis antara kearifan lokal dan kemajuan. Sejarahnya yang kaya membentuk masyarakat yang rukun, damai, dan menjunjung tinggi nilai-nilai adat.
            </p>
            <blockquote class="text-gray-600 leading-relaxed italic border-l-4 border-emerald-600 pl-6 py-3 bg-white shadow-lg rounded-r-lg hover:shadow-xl transition duration-300">
                 "Desa ini dikenal dengan kehidupan masyarakat yang rukun, potensi wisata bahari dan pegunungan, serta berbagai kegiatan adat yang masih lestari."
            </blockquote>
            <a href="{{ route('profil-desa') }}" class="inline-flex items-center mt-8 text-emerald-700 font-bold text-lg hover:text-emerald-900 transition transform hover:translate-x-2">
                Jelajahi Sejarah Kami
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
        
        <div class="md:col-span-2 order-1 md:order-2 flex flex-col items-center justify-center space-y-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="300">
            <img src="{{ asset('assets/banyuwangi.png') }}" alt="Lambang Desa Bomo" class="w-full max-w-sm h-auto object-contain p-8 bg-white rounded-3xl shadow-2xl border-4 border-emerald-600/50 hover:scale-105 transition duration-500">
            <span class="inline-block bg-emerald-600 text-white text-md font-bold px-6 py-2 rounded-full tracking-wider uppercase shadow-lg shadow-emerald-700/40">
                Desa Bomo, Rogojampi
            </span>
        </div>
    </div>
</section>


<section class="container mx-auto px-8 py-20 bg-white overflow-hidden">
    <div class="text-center mb-14" data-aos="fade-up">
        <h2 class="text-4xl font-extrabold text-gray-800 inline-block border-b-4 border-yellow-600 pb-2">📰 Berita & Pengumuman Terbaru</h2>
        <p class="text-lg text-gray-600 mt-4 max-w-xl mx-auto">Informasi terkini dari kantor desa, event budaya, dan kemajuan pembangunan.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        @foreach(range(1, 3) as $i)
        <div class="bg-gray-50 rounded-2xl shadow-xl border border-gray-200 hover:shadow-2xl transition duration-500 group overflow-hidden transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="{{ $i * 200 }}">
            <div class="relative overflow-hidden">
                 <img src="https://picsum.photos/400/250?random={{ $i + 10 }}" alt="Gambar Berita {{ $i }}" class="w-full h-52 object-cover transition duration-700 transform group-hover:scale-110">
                 <div class="absolute bottom-0 right-0 bg-emerald-600 text-white text-xs font-semibold px-3 py-1 rounded-tl-lg">
                    {{ date('d F Y', strtotime('-' . $i . ' days')) }}
                 </div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-emerald-700 transition">{{ 'Judul Berita Progresif ' . $i }}</h3>
                <p class="text-gray-600 mb-4 line-clamp-3 text-base">Ringkasan singkat yang ditulis dengan baik, menyoroti dampak dan relevansi berita bagi masyarakat Desa Bomo.</p>
                <a href="#" class="inline-flex items-center text-emerald-600 font-bold hover:text-emerald-700 transition">
                    Baca Selengkapnya
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="container mx-auto px-8 py-20 bg-gradient-to-t from-gray-100 to-gray-50 text-center overflow-hidden">
    <div class="text-center mb-12" data-aos="fade-up">
        <h2 class="text-4xl font-extrabold text-gray-800 inline-block border-b-4 border-yellow-600 pb-2">📌 Jadwal Agenda Desa</h2>
        <p class="text-lg text-gray-600 mt-4 max-w-xl mx-auto">Pastikan Anda tidak ketinggalan acara penting dan partisipasi masyarakat.</p>
    </div>

    <div class="max-w-4xl mx-auto" data-aos="fade-up" data-aos-delay="200">
        <ol class="relative border-l border-gray-300">
            @php
                $agendas = [
                    ['title' => 'Rapat Perencanaan Pembangunan', 'date' => '10 Maret 2025', 'desc' => 'Musyawarah desa untuk menentukan arah pembangunan tahunan.'],
                    ['title' => 'Pelatihan Pertanian Organik', 'date' => '15 Maret 2025', 'desc' => 'Program peningkatan kapasitas petani menuju praktik berkelanjutan.'],
                    ['title' => 'Lomba Bersih Desa & Gotong Royong', 'date' => '20 Maret 2025', 'desc' => 'Kegiatan rutin untuk menjaga keindahan dan kebersihan lingkungan desa.'],
                ];
            @endphp

            @foreach ($agendas as $i => $item)
            <li class="mb-10 ml-8" data-aos="fade-left" data-aos-delay="{{ 300 + ($i * 200) }}">
                <span class="absolute flex items-center justify-center w-6 h-6 bg-emerald-600 rounded-full -left-3 ring-8 ring-gray-50/70 shadow-lg">
                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </span>
                <h3 class="flex items-center mb-1 text-xl font-semibold text-gray-900">{{ $item['title'] }}</h3>
                <time class="block mb-2 text-sm font-normal leading-none text-emerald-600">{{ $item['date'] }}</time>
                <p class="text-base font-normal text-gray-700 bg-white p-4 rounded-lg shadow-xl hover:shadow-2xl transition duration-300">{{ $item['desc'] }}</p>
            </li>
            @endforeach
        </ol>
    </div>
</section>

<section class="container mx-auto px-8 py-20 bg-white text-center overflow-hidden">
    <div class="text-center mb-12" data-aos="fade-up">
        <h2 class="text-4xl font-extrabold text-gray-800 inline-block border-b-4 border-yellow-600 pb-2">📊 Transparansi Anggaran Desa</h2>
        <p class="text-lg text-gray-600 mt-4 max-w-xl mx-auto">Komitmen kami untuk pengelolaan dana yang terbuka dan akuntabel.</p>
    </div>

<!-- Struktur Organisasi -->
<section class="py-24 bg-white relative overflow-hidden" data-aos="fade-up">
    <div class="container mx-auto px-6 text-center relative z-10">
        
        <h2 class="text-4xl font-bold text-green-700 mb-4 uppercase">Struktur Organisasi</h2>
        <div class="w-20 h-1.5 bg-green-500 mx-auto rounded-full mb-10"></div>

        <p class="text-gray-600 max-w-3xl mx-auto mb-16 text-lg leading-relaxed italic">
            "Tata kelola pemerintahan Desa Bomo dijalankan oleh perangkat desa yang berdedikasi tinggi, transparan, dan akuntabel dalam setiap fungsi pelayanan publik."
        </p>

        <div class="flex flex-col items-center space-y-12 mb-16">
            @foreach($organisasi->where('jabatan', 'Kepala Desa')->take(1) as $kades)
                <div class="transform hover:scale-105 transition-transform duration-300">
                    @include('user.infografis._card_organisasi', ['anggota' => $kades, 'size' => 'medium'])
                </div>
            @endforeach
        </div>

        <a href="{{ route('organisasi') }}" 
           class="inline-flex items-center px-10 py-4 border-2 border-green-600 text-green-700 font-bold rounded-2xl hover:bg-green-600 hover:text-white transition-all duration-300 group">
            <span>Lihat Struktur Selengkapnya</span>
            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</section>

<section class="container mx-auto px-8 py-20 bg-gray-100 text-center overflow-hidden">
    <div class="text-center mb-12" data-aos="fade-up">
        <h2 class="text-4xl font-extrabold text-gray-800 inline-block border-b-4 border-yellow-600 pb-2">👨‍💼 Aparatur Pemerintah Desa Bomo</h2>
        <p class="text-lg text-gray-600 mt-4 max-w-xl mx-auto">Struktur kepemimpinan yang profesional dan berintegritas melayani masyarakat.</p>
    </div>


@endsection
