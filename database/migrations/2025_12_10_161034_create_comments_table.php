<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('panduan_id');
            $table->string('name')->nullable();
            $table->text('comment');
            $table->timestamps();

            // Foreign key opsional (tidak wajib)
            $table->foreign('panduan_id')
                ->references('id')
                ->on('panduans')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
