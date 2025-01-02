<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HasilPeriksa;
use App\Models\Norekam;

class CetakResepController extends Controller
{
    public function cetakResep()
    {
        return view('admin.cetakResep');
    }

    public function cari(Request $request)
    {
        $nomorRekam = $request->input('rekamMedis');

        $norekam = Norekam::where('Nomor_Rekam', $nomorRekam)->first();

        if (!$norekam) {
            return back()->with('error', 'Nomor rekam medis tidak ditemukan!');
        }

        $hasilPeriksa = HasilPeriksa::where('pasien', $norekam->Nama_Pasien)->first();

        if (!$hasilPeriksa) {
            return back()->with('error', 'Hasil periksa tidak ditemukan untuk pasien ini!');
        }

        return view('admin.hasilCetak', compact('norekam', 'hasilPeriksa'));
    }
}
