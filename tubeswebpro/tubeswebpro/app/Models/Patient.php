<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'identity_number',
        'age',
        'gender',
        'birth_date',
        'medical_record_number',
        'queue_number',
    ];
}

