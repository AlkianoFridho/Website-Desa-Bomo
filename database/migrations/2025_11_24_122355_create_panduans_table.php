<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('panduans', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->string('durasi');
        $table->string('thumbnail')->nullable();   // gambar kecil / cover video
        $table->string('video_url');               // link video YouTube / MP4
        $table->string('kategori')->nullable();    // contoh: "Administrasi", "Layanan"
        $table->string('dibuat_oleh')->default('Pemerintah Desa Bomo');
        $table->unsignedBigInteger('views')->default(0);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panduans');
    }
};
