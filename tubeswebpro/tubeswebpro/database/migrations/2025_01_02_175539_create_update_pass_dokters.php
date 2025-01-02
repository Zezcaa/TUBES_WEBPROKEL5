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
        $dokters = DB::table('dokters')->get();

        foreach ($dokters as $dokter) {
    // Hash ulang password dengan SHA-256 jika belum di-hash
        $hashedPassword = hash('sha256', $dokter->password); // Perbaikan disini: $dokter->password
        DB::table('dokters')
          ->where('id', $dokter->id)
         ->update(['password' => $hashedPassword]);
        }
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('update_pass_dokters');
    }
};
