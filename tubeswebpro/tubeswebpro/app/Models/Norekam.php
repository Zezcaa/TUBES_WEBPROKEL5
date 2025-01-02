<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Norekam extends Model
{
    use HasFactory;

    protected $table = 'norekams'; // Nama tabel
    protected $fillable = [
        'Nomor_Rekam',
        'Nama_Pasien',
        'Nama_Dokter',
        'Poliklinik',
        'Diagnosa',
    ];
}
