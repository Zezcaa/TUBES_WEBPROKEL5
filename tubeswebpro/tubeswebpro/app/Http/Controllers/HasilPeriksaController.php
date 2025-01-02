<?php

namespace App\Http\Controllers;

use App\Models\HasilPeriksa;
use Illuminate\Http\Request;
use App\Models\Dashboard;

class HasilPeriksaController extends Controller
{
    public function create()
    {

        return view('dokter.hasilPeriksa');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pasien' => 'required|string|max:255',
            'jenis_rawat' => 'required|string',
            'tanggal_kunjungan' => 'required|date',
            'diagnosa' => 'required|string|max:255',
            'resep' => 'required|string',
        ]);

        HasilPeriksa::create($request->all());

        // $antrian = Dashboard::orderBy('no_antrian', 'asc')->first();

        // if ($antrian) {
        //     // Hapus antrian setelah diproses
        //     $antrian->delete();
        // }

        return redirect()->route('dokter.hasilPeriksa.store')->with('success', 'Hasil periksa berhasil disimpan.');
    }
}
