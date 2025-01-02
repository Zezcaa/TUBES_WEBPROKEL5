<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dokterAdmin;

class dokterAdminController extends Controller
{
    public function index()
    {
        // Ambil semua data dokter
        $dokters = dokterAdmin::all();

        // Kirim data ke view
        return view('admin.inputDokter', compact('dokters'));
    }

    public function create()
    {
        return view('admin.formInputDokter'); // Mengarahkan ke form input dokter
    }


    public function store(Request $request)
    {
        $request->validate([
            'id_dokter' => 'required|unique:dokter_admin|max:10',
            'nama_dokter' => 'required|string|max:100',
            'poliklinik' => 'required|string|max:100',
        ]);

        dokterAdmin::create($request->all());
        return redirect()->route('dokterAdmin.index')->with('success', 'Data Dokter berhasil ditambahkan');
    }

    public function edit($id)
    {
        $dokter = dokterAdmin::findOrFail($id);
        return view('admin.editDokter', compact('dokter'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_dokter' => 'required|max:10',
            'nama_dokter' => 'required|string|max:100',
            'poliklinik' => 'required|string|max:100',
        ]);

        $dokter = dokterAdmin::findOrFail($id);
        $dokter->update($request->all());
        return redirect()->route('dokterAdmin.index')->with('success', 'Data Dokter berhasil diperbarui');
    }

    public function destroy($id)
    {
        $dokter = dokterAdmin::findOrFail($id);
        $dokter->delete();
        return redirect()->route('dokterAdmin.index')->with('success', 'Data Dokter berhasil dihapus');
    }
}
