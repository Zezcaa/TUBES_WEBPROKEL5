<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokterAdmin extends Model
{
    use HasFactory;

    protected $table = 'dokter_admin'; // Nama tabel di database
    protected $fillable = [
        'id_dokter', 
        'nama_dokter', 
        'poliklinik'
    ]; 
}
