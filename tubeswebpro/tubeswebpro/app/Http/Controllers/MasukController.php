<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasukController extends Controller
{
    public function index()
    {
        return view('masuk');  // This will point to resources/views/masuk/index.blade.php
    }
}
