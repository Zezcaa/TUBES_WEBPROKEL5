<?php

// app/Models/Doctor.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'speciality', 'photo', 'clinic_id']; // Menambahkan 'clinic_id'

    // Relasi dokter dengan klinik (satu dokter memiliki satu klinik)
    public function clinic()
    {
        return $this->belongsTo(Clinic::class);  // Relasi BelongsTo ke model Clinic
    }
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

}

