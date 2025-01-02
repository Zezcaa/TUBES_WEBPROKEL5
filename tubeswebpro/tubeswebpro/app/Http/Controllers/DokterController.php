<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DokterController extends Controller
{
    // Menampilkan halaman login dokter
    public function showLogin()
    {
        return view('dokter.loginDokter');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Cari dokter berdasarkan username
        $dokter = DB::table('dokters')->where('username', $username)->first();

        // Gunakan hash dengan SHA-256
        $hashedPassword = hash('sha256', $password);

        // Cek apakah dokter ditemukan dan passwordnya cocok dengan hash
        if ($dokter && $dokter->password === $hashedPassword) {
            // Menyimpan session untuk status login
            Session::put('dokter_logged_in', true);

            // Redirect ke dashboard dokter
            return redirect()->route('dokter.dashboard');
        }

        // Jika login gagal, kembali dengan pesan error
        return back()->withErrors(['loginError' => 'Username atau Password salah']);
    }

    // Halaman dashboard dokter
    public function dashboard()
    {
        // Cek apakah dokter sudah login
        if (!Auth::check()) {
            // Jika belum login, redirect ke halaman login
            return redirect()->route('dokter.login');
        }

        // Ambil data dashboard untuk dokter
        $dataDashboard = Dashboard::all(); // Anda bisa mengganti dengan model lain yang sesuai

        // Menampilkan halaman dashboard dengan data pasien
        return view('dokter.dashboard', compact('dataDashboard'));
    }
    // Proses logout dokter
    //public function logout()
    //{
        // Logout menggunakan Laravel's Auth
       // Auth::logout();

        // Redirect ke halaman login
        //return redirect()->route('dokter.login');
    //}
}
