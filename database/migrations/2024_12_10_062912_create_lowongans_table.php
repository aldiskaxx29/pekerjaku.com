<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lowongans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id')->references('id')->on('kategoris')->onDelete('cascade');
            $table->string('name_lengkap')->nullable();
            $table->string('no_telepon')->nullable();
            $table->string('no_telepon_saudara')->nullable();
            $table->text('address')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('umur')->nullable();
            $table->string('status')->nullable();
            $table->string('punya_anak')->nullable();
            $table->string('pengalaman')->nullable();
            $table->string('salary')->nullable();
            $table->string('salary_min')->nullable();
            $table->string('bersedia_bekerja')->nullable();
            $table->string('jam_berapa_bisa_dihubungi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowongans');
    }
};
