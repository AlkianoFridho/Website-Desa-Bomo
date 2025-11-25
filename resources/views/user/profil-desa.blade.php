{{-- resources/views/user/profil-desa.blade.php --}}
@extends('layouts.appuser')

@section('content')
<!-- Mobile Hero Image (Only on Mobile) -->
<div class="w-full md:hidden mb-6">
    <img 
        src="https://upload.wikimedia.org/wikipedia/commons/6/64/Kantordesabomorogojampibanyuwangi.JPG"
        alt="Kantor Desa Bomo"
        class="w-full h-56 object-cover rounded-lg shadow-md"
    >
</div>

<div class="container mx-auto px-6">
    <section class="my-12 text-center">
        <h2 class="text-3xl font-bold text-green-700">Profil Desa Bomo</h2>
        <p class="mt-4 text-gray-700">Desa Bomo adalah salah satu desa di Kecamatan Rogojampi, Kabupaten Banyuwangi. Desa ini memiliki sejarah panjang dengan keunikan budaya serta keindahan alam yang masih asri.</p>
    </section>
    
    <!-- Sejarah Desa -->
    <section class="my-12">
        <h2 class="text-2xl font-bold text-green-700">Sejarah Desa</h2>
        <p class="mt-4 text-gray-700">Desa Bomo didirikan pada abad ke-18 oleh para leluhur yang menetap di daerah ini karena kesuburan tanah dan sumber daya alam yang melimpah. Seiring waktu, desa ini berkembang menjadi pusat agrikultur dan ekonomi masyarakat sekitar.</p>
    </section>
    
    <!-- Visi dan Misi -->
    <section class="my-12">
        <h2 class="text-2xl font-bold text-green-700">Visi dan Misi</h2>
        <p class="mt-4 text-gray-700"><strong>Visi:</strong> Mewujudkan Desa Bomo yang mandiri, sejahtera, dan berdaya saing berbasis potensi lokal.</p>
        <p class="mt-2 text-gray-700"><strong>Misi:</strong></p>
        <ul class="list-disc list-inside text-gray-700">
            <li>Meningkatkan kesejahteraan masyarakat melalui pengelolaan sumber daya alam.</li>
            <li>Meningkatkan pelayanan publik berbasis digital.</li>
            <li>Mendorong pembangunan berkelanjutan dan pelestarian lingkungan.</li>
        </ul>
    </section>
    
    <!-- Demografi Desa -->
    <section class="my-12">
        <h2 class="text-2xl font-bold text-green-700">Demografi</h2>
        <p class="mt-4 text-gray-700">Jumlah penduduk Desa Bomo sekitar 5.000 jiwa yang terdiri dari berbagai suku dan agama yang hidup rukun dan damai.</p>
        <p class="mt-2 text-gray-700">Luas wilayah desa mencapai 15 km² dengan mayoritas masyarakat bermata pencaharian sebagai petani, nelayan, dan pedagang.</p>
    </section>
</div>
@endsection
