<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class loginAdminController extends Controller
{
    public function showLogin()
    {
        return view('admin.adminLogin');
    }

    public function login(\Illuminate\Http\Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $user = DB::table('users')->where('username', $username)->first();

        // Gunakan hash dengan SHA-256
        $hashedPassword = hash('sha256', $password);

        if ($user && $user->password === $hashedPassword) {
            Session::put('admin_logged_in', true);
            return redirect()->route('admin.beranda');
        }

        return back()->withErrors(['loginError' => 'Username atau Password salah']);
    }

    public function beranda()
    {
        if (!Session::has('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        return view('admin.beranda');
    }

    public function logout()
    {
        Session::forget('admin_logged_in');
        return redirect()->route('admin.login');
    }
}

