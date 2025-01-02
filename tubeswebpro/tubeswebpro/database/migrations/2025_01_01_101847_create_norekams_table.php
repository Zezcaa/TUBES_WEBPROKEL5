<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNorekamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up(): void
    {
        Schema::create('norekams', function (Blueprint $table) {
            $table->id();
            $table->string('Nomor_Rekam', 10)->unique();
            $table->string('Nama_Pasien', 255);
            $table->string('Nama_Dokter', 255);
            $table->string('Poliklinik', 255);
            $table->string('Diagnosa', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down(): void
    {
        Schema::dropIfExists('norekams');
    }
}
