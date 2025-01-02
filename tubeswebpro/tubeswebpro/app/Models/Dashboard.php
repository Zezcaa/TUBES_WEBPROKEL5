<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;

    protected $table = 'dashboards';

    protected $fillable = [
        'nama_pasien',
        'poli_klinik',
        'tanggal_kunjungan',
        'no_antrian',
    ];
}
