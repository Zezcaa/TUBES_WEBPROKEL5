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
        Schema::create('dokter_admin', function (Blueprint $table) {
            $table->id(); // Kolom primary key (id)
            $table->string('id_dokter')->unique(); // ID Dokter unik
            $table->string('nama_dokter'); // Nama Dokter
            $table->string('poliklinik'); // Poliklinik
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokter_admin');
    }
};
