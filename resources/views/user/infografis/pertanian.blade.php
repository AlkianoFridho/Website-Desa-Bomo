@extends('layouts.appuser')

@section('content')

<header class="bg-green-700 text-white py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-green-800 to-green-600 opacity-90"></div>
    
    <div class="container mx-auto px-6 max-w-5xl text-center relative z-10">
        <p class="text-base uppercase tracking-widest opacity-80 mb-2">Profil Potensi Desa Bomo</p>
        <h1 class="text-5xl md:text-6xl font-extrabold mb-4 drop-shadow-lg">
            Sektor Pertanian
        </h1>
        <p class="text-lg md:text-xl opacity-90 font-light max-w-2xl mx-auto">
            Pertanian menjadi sektor penting dalam mendukung ketahanan pangan dan perekonomian masyarakat Desa Bomo.
        </p>
    </div>
</header>

<section class="container mx-auto px-6 py-16 md:py-24">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-start">

        <div class="lg:col-span-2 p-8 bg-white rounded-xl shadow-lg border border-gray-100">
            <h2 class="text-3xl font-extrabold text-green-800 mb-6 pb-2 border-b border-green-100">
                Gambaran Umum Wilayah
            </h2>
            <p class="text-gray-700 leading-relaxed text-lg">
                Desa Bomo memiliki lahan pertanian yang produktif dengan kondisi tanah yang subur. 
                Letak geografis yang mendukung pengairan menjadikan pertanian sebagai salah satu pilar 
                ekonomi desa. Fokus utama pengembangan lahan diarahkan pada komoditas bernilai jual 
                tinggi serta keberlanjutan ekosistem lingkungan.
            </p>
        </div>

        <div class="lg:col-span-1 p-8 bg-green-50 rounded-xl shadow-md self-start border-l-4 border-green-700">
            <h3 class="font-bold text-lg text-green-900 mb-5 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                Fokus Utama
            </h3>

            <div class="mb-5 pb-5 border-b border-green-200">
                <p class="font-semibold text-sm text-green-900 mb-1">Ketahanan Pangan</p>
                <p class="text-sm text-green-800 leading-relaxed">
                    Optimalisasi lahan untuk tanaman pangan guna mencukupi kebutuhan lokal masyarakat desa.
                </p>
            </div>
            
            <div>
                <p class="font-semibold text-sm text-green-900 mb-1">Prinsip Keberlanjutan</p>
                <p class="text-sm text-green-800 leading-relaxed">
                    Penerapan metode pertanian ramah lingkungan untuk menjaga kualitas tanah jangka panjang.
                </p>
            </div>
        </div>

    </div>
</section>

<section class="bg-white py-16 md:py-24">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-extrabold text-gray-800 text-center mb-12">
            Jenis Potensi Pertanian
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            
            <div class="bg-gray-50 rounded-lg p-6 border-t-4 border-green-600 transition duration-300 hover:bg-green-50 shadow-sm">
                <div class="text-3xl text-green-700 mb-3">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-green-800 mb-2">
                    Buah Naga
                </h3>
                <p class="text-gray-600 text-sm">
                    Komoditas unggulan dengan kualitas hasil panen premium, dipasarkan hingga ke luar daerah Banyuwangi.
                </p>
            </div>

            <div class="bg-gray-50 rounded-lg p-6 border-t-4 border-green-600 transition duration-300 hover:bg-green-50 shadow-sm">
                <div class="text-3xl text-green-700 mb-3">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-green-800 mb-2">
                    Tanaman Pangan
                </h3>
                <p class="text-gray-600 text-sm">
                    Budidaya padi dan palawija yang dikelola secara kolektif untuk mendukung kemandirian pangan desa.
                </p>
            </div>

            <div class="bg-gray-50 rounded-lg p-6 border-t-4 border-green-600 transition duration-300 hover:bg-green-50 shadow-sm">
                <div class="text-3xl text-green-700 mb-3">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-green-800 mb-2">
                    Hortikultura
                </h3>
                <p class="text-gray-600 text-sm">
                    Pemanfaatan pekarangan produktif dan lahan sempit untuk sayuran dan tanaman obat keluarga.
                </p>
            </div>

        </div>
    </div>
</section>

<section class="container mx-auto px-6 py-16 md:py-24 max-w-6xl">
    <h2 class="text-3xl font-bold text-center text-green-800 mb-12">
        Alur Produksi Pertanian
    </h2>

    <div class="flex flex-col md:flex-row items-stretch justify-center space-y-4 md:space-y-0 md:space-x-0">
        
        <div class="flex-1 min-w-0 md:flex md:items-stretch">
            <div class="bg-white rounded-xl p-6 shadow-lg border-t-4 border-green-700 min-h-[200px] flex flex-col justify-between relative w-full">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-green-700 text-white rounded-full h-8 w-8 flex items-center justify-center text-sm font-bold shadow-md">1</div>
                <div class="mt-4">
                    <h4 class="font-bold text-green-800 mb-2 text-center">Persiapan Lahan</h4>
                    <p class="text-sm text-gray-600 text-center">Pengolahan tanah dan pemupukan dasar untuk memastikan media tanam optimal.</p>
                </div>
            </div>
        </div>

        <div class="hidden md:flex items-center justify-center w-10 h-full">
            <svg class="w-10 h-10 text-green-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        </div>

        <div class="flex-1 min-w-0 md:flex md:items-stretch">
             <div class="bg-white rounded-xl p-6 shadow-lg border-t-4 border-green-700 min-h-[200px] flex flex-col justify-between relative w-full">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-green-700 text-white rounded-full h-8 w-8 flex items-center justify-center text-sm font-bold shadow-md">2</div>
                <div class="mt-4">
                    <h4 class="font-bold text-green-800 mb-2 text-center">Penanaman</h4>
                    <p class="text-sm text-gray-600 text-center">Pemilihan bibit unggul dan penanaman sesuai jadwal musim tanam.</p>
                </div>
            </div>
        </div>

        <div class="hidden md:flex items-center justify-center w-10 h-full">
            <svg class="w-10 h-10 text-green-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        </div>
        
        <div class="flex-1 min-w-0 md:flex md:items-stretch">
             <div class="bg-white rounded-xl p-6 shadow-lg border-t-4 border-green-700 min-h-[200px] flex flex-col justify-between relative w-full">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-green-700 text-white rounded-full h-8 w-8 flex items-center justify-center text-sm font-bold shadow-md">3</div>
                <div class="mt-4">
                    <h4 class="font-bold text-green-800 mb-2 text-center">Pemeliharaan</h4>
                    <p class="text-sm text-gray-600 text-center">Perawatan rutin meliputi pengairan, pembersihan gulma, dan pengendalian hama.</p>
                </div>
            </div>
        </div>

        <div class="hidden md:flex items-center justify-center w-10 h-full">
            <svg class="w-10 h-10 text-green-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        </div>

        <div class="flex-1 min-w-0 md:flex md:items-stretch">
             <div class="bg-white rounded-xl p-6 shadow-lg border-t-4 border-green-700 min-h-[200px] flex flex-col justify-between relative w-full">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-green-700 text-white rounded-full h-8 w-8 flex items-center justify-center text-sm font-bold shadow-md">4</div>
                <div class="mt-4">
                    <h4 class="font-bold text-green-800 mb-2 text-center">Panen & Distribusi</h4>
                    <p class="text-sm text-gray-600 text-center">Pemetikan hasil bumi dan penyaluran ke pasar lokal maupun pengepul besar.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="bg-gray-100 py-16 md:py-20">
    <div class="container mx-auto px-6 max-w-5xl">
        <h2 class="text-3xl font-bold text-center text-green-800 mb-10">
            Data Singkat Pertanian
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="bg-white rounded-xl p-8 shadow-lg border-b-4 border-green-500">
                <p class="text-5xl font-extrabold text-green-700">±150</p>
                <p class="text-gray-600 mt-3 text-lg font-semibold">Petani Aktif</p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-lg border-b-4 border-green-500">
                <p class="text-5xl font-extrabold text-green-700">1.700</p>
                <p class="text-gray-600 mt-3 text-lg font-semibold">Total Hektar Lahan</p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-lg border-b-4 border-green-500">
                <p class="text-5xl font-extrabold text-green-700">Primer</p>
                <p class="text-gray-600 mt-3 text-lg font-semibold">Kualitas Hasil</p>
            </div>
        </div>
    </div>
</section>

<section class="container mx-auto px-6 py-16 md:py-24 max-w-5xl">
    <h2 class="text-3xl font-extrabold text-gray-800 text-center mb-12">
        Tantangan dan Peluang
    </h2>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="bg-white rounded-xl shadow-lg p-6 border-t-4 border-red-500">
            <h3 class="text-2xl font-bold text-red-600 mb-4 flex items-center">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                Tantangan Utama
            </h3>
            <ul class="space-y-3 text-gray-700">
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-red-500 mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                    <span>Perubahan cuaca ekstrem yang sulit diprediksi saat musim tanam.</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-red-500 mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                    <span>Fluktuasi harga komoditas di tingkat pasar regional.</span>
                </li>
            </ul>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg p-6 border-t-4 border-green-500">
            <h3 class="text-2xl font-bold text-green-700 mb-4 flex items-center">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.156 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.156 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.156 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.156 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                Peluang Pengembangan
            </h3>
            <ul class="space-y-3 text-gray-700">
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span>Pengembangan agrowisata petik Buah Naga bagi wisatawan.</span>
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span>Penerapan teknologi pertanian modern (Smart Farming).</span>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="bg-gray-100 py-16 text-center">
    <div class="container mx-auto px-6 max-w-4xl">
        <h3 class="text-xl font-semibold text-gray-700 mb-6">
            Lihat Potensi Desa Bomo Lainnya
        </h3>
        <a href="{{ route('infografis') }}"
           class="inline-flex items-center justify-center px-12 py-3 bg-green-600 text-white font-bold text-lg rounded-full shadow-lg border-2 border-green-300 hover:bg-green-700 transition duration-300">
            <svg class="w-6 h-6 mr-3 -ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali ke Infografis
        </a>
    </div>
</section>

@endsection