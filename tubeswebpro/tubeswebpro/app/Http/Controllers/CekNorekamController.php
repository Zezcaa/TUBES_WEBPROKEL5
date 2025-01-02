<?php

namespace App\Http\Controllers;
 
use App\Models\Norekam; 
use Illuminate\Http\Request;

class CekNorekamController extends Controller
{
    // Method untuk menampilkan halaman cek rekam medis
    public function index()
    {
        return view('admin.cekNorekam');
    }

    // Method untuk mencari rekam medis berdasarkan nomor rekam
    public function search(Request $request)
    {
        $request->validate([
            'rekamMedis' => 'required|string|max:10',
        ]);

        $nomorRekam = $request->input('rekamMedis');
        
        // Mencari rekam medis berdasarkan Nomor_Rekam
        $norekam = Norekam::where('Nomor_Rekam', $nomorRekam)->first();

        if ($norekam) {
            return view('admin.cekRekamResult', compact('norekam')); // Menampilkan hasil pencarian
        } else {
            return redirect()->route('admin.cekRekam')->with('error', 'Rekam medis tidak ditemukan.');
        }
    }
}

