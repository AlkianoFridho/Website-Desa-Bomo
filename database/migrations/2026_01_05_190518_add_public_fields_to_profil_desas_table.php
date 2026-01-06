<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('profil_desas', function (Blueprint $table) {
            // Tentang Kami
            $table->text('tentang_kami')->nullable()->after('nama_desa');

            // Statistik singkat
            $table->string('total_penduduk', 50)->nullable()->after('sejarah_singkat');
            $table->string('luas_wilayah', 50)->nullable()->after('total_penduduk');
            $table->string('potensi_utama', 50)->nullable()->after('luas_wilayah');

            // Section Data & Statistik
            $table->string('judul_data')->nullable()->after('potensi_utama');
            $table->text('deskripsi_data')->nullable()->after('judul_data');
            $table->string('label_tombol_data')->nullable()->after('deskripsi_data');
        });
    }

    public function down(): void
    {
        Schema::table('profil_desas', function (Blueprint $table) {
            $table->dropColumn([
                'tentang_kami',
                'total_penduduk',
                'luas_wilayah',
                'potensi_utama',
                'judul_data',
                'deskripsi_data',
            ]);
        });
    }
};
