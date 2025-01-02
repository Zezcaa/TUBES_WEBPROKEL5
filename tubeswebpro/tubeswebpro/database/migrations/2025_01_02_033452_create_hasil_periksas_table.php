<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_periksas', function (Blueprint $table) {
            $table->id();
            $table->string('pasien'); // Nama pasien
            $table->enum('jenis_rawat', ['Rawat Jalan', 'Rawat Inap'])->default('Rawat Jalan'); // Jenis rawat (Rawat Jalan/Rawat Inap)
            $table->date('tanggal_kunjungan'); // Tanggal kunjungan
            $table->string('diagnosa'); // Diagnosa pasien
            $table->text('resep'); // Resep dokter
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_periksas');
    }
};
