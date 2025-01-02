<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilPeriksa extends Model
{
    use HasFactory;

    protected $table = 'hasil_periksaAdmin';

    protected $fillable = [
        'pasien',
        'jenis_rawat',
        'tanggal_kunjungan',
        'diagnosa',
        'resep',
    ];
}
