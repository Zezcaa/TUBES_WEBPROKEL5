<?php

namespace App\Http\Controllers;
use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $dataDashboard = Dashboard::all();
        return view('dokter.dashboard', compact('dataDashboard'));  // Ganti dengan view dashboard yang sesuai
    }
}
