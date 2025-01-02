<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HasilPeriksa;
use App\Models\Norekam;
class AdminController extends Controller
{
    public function beranda()
    {
        return view('admin.beranda');
    }


}
