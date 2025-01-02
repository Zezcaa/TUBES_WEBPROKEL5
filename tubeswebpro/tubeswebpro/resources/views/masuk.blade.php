@extends('layouts.app')

@section('content')
  <main class="main-content vh-100 d-flex justify-content-center align-items-center" style="background-color: #ffffff; color: #333;">
    <div class="container text-center">
        <h2 style="font-size: 3.5rem; font-weight: bold; color: #d9534f; margin-bottom: 20px;">Selamat Datang di HealthyCare!</h2>
        <p style="font-size: 1.25rem; color: #555; margin-bottom: 40px;">Silakan masuk ke akun Anda untuk melanjutkan</p>

        <div>
            <a class="btn btn-danger btn-lg" href="{{route('dokter.login')}}" style="margin: 15px; padding: 15px 50px; font-size: 1.2rem; border-radius: 50px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-decoration: none; transition: all 0.3s ease;">Masuk sebagai Dokter</a>
            <a class="btn btn-danger btn-lg" href="{{route('admin.login')}}" style="margin: 15px; padding: 15px 50px; font-size: 1.2rem; border-radius: 50px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-decoration: none; transition: all 0.3s ease;">Masuk sebagai Admin</a>
        </div>
    </div>
  </main>
  
@endsection
