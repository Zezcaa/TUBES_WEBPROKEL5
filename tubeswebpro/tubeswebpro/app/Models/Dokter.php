<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Dokter extends  Authenticatable
{
    use HasFactory;

    protected $table = 'dokters';

    protected $fillable = [
        'username',
        'password',
    ];

    // Tidak perlu lagi menyembunyikan password karena kita tidak meng-hashnya
    // protected $hidden = [
    //     'password',
    // ];
}
