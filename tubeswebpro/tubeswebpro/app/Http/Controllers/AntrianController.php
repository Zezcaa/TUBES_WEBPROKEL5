<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard; // Gunakan model Dashboard yang sudah ada

class AntrianController extends Controller
{
    public function index()
    {
        // Ambil data antrian pertama yang belum dipanggil
        $antrian = Dashboard::orderBy('no_antrian', 'asc')->first();

        return view('dokter.antrian', compact('antrian'));

        // return redirect()->route('dokter.hasilPeriksa.create')->with('success', 'Antrian berhasil diproses.');
    }

    public function nextAntrian()
    {
        // Proses antrian berikutnya
        $antrian = Dashboard::orderBy('no_antrian', 'asc')->first();

        if ($antrian) {
            $antrian->delete();
        }

        // Redirect ke halaman antrian
        return redirect()->route('dokter.antrian')->with('success', 'Antrian berikutnya telah dipanggil.');
    }
}
    
