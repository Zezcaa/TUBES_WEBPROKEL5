<?php

namespace App\Http\Controllers;

use App\Models\Norekam; // Model untuk Norekam
use Illuminate\Http\Request;

class NorekamController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel norekams
        $norekams = Norekam::all();

        // Mengarahkan ke view norekam.blade.php dengan data norekams
        return view('admin.norekam', compact('norekams'));
    }

    // Method untuk menampilkan halaman edit
    public function edit($id)
    {
        $norekam = Norekam::findOrFail($id);
        return view('admin.editNorekam', compact('norekam'));
    }

    // Method untuk mengupdate data norekam
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nomor_Rekam' => 'required|string|max:10',
            'Nama_Pasien' => 'required|string|max:255',
            'Nama_Dokter' => 'required|string|max:255',
            'Poliklinik' => 'required|string|max:255',
            'Diagnosa' => 'required|string|max:255',
        ]);

        $norekam = Norekam::findOrFail($id);
        $norekam->update($request->all());

        return redirect()->route('admin.norekam')->with('success', 'Data rekam medis berhasil diperbarui.');
    }


    // Method untuk menghapus norekam
    public function destroy($id)
    {
        $norekam = Norekam::findOrFail($id);
        $norekam->delete();

        return redirect()->route('admin.norekam')->with('success', 'Norekam berhasil dihapus.');
    }
}
