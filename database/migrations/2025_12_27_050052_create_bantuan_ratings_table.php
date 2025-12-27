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
        Schema::create('bantuan_ratings', function (Blueprint $table) {
            $table->id();

            // session chat (ID percakapan bantuan)
            $table->string('session_id')->index();

            // nilai rating 1–5
            $table->unsignedTinyInteger('rating');

            // komentar / saran pengguna
            $table->text('komentar')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bantuan_ratings');
    }
};
