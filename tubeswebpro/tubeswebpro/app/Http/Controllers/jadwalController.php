<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Clinic;
use App\Models\Schedule;  // Pastikan Anda sudah membuat model Schedule

class jadwalController extends Controller
{
    // Menampilkan daftar dokter dan klinik
    public function index()
    {
        // Mengambil semua dokter beserta klinik terkait dan jadwalnya
        $doctors = Doctor::with('clinic', 'schedules')->get();  // Mengambil semua dokter, beserta klinik dan jadwal
        $clinics = Clinic::all();  // Mengambil semua klinik

        return view('jadwaldokter.jadwal', compact('doctors', 'clinics'));  // Mengirim data dokter dan klinik ke view
    }

    // Menampilkan detail dokter berdasarkan ID dan jadwalnya
    public function showDoctor($id)
    {
        $doctor = Doctor::with('clinic', 'schedules')->findOrFail($id);  // Mengambil data dokter, klinik, dan jadwalnya
        return response()->json($doctor);  // Mengirimkan data dokter dalam format JSON
    }

    // Menampilkan detail klinik berdasarkan ID dan jadwal dokter di dalamnya
    public function showClinic($id)
    {
        $clinic = Clinic::with('doctors.schedules')->find($id);  // Mengambil data klinik, dokter, dan jadwal terkait
        if (!$clinic) {
            return response()->json(['message' => 'Clinic not found'], 404);  // Jika klinik tidak ditemukan
        }
        return response()->json($clinic);  // Mengirimkan data klinik dalam format JSON
    }
}
