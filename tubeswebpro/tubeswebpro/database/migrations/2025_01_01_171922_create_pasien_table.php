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
        Schema::create('patients', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('name');
            $table->string('identity_number')->unique();
            $table->integer('age')->nullable(); // Opsional untuk pasien lama
            $table->enum('gender', ['male', 'female', 'other'])->nullable(); // Opsional untuk pasien lama
            $table->date('birth_date')->nullable(); // Opsional untuk pasien lama
            $table->string('medical_record_number')->nullable(); // Hanya pasien lama
            $table->string('queue_number')->unique(); // Nomor antrean
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients'); // Ganti 'pasien' menjadi 'patients'
    }
};
