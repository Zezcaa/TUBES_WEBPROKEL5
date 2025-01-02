@extends('layouts.admin')

@section('title', 'Beranda')

@section('content')

  <section id="text-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url('{{ asset('assets/img/bg-healthycare.png') }}');">
    <div class="container h-100">
      <div class="caption">
        <h1>Selamat Datang, Admin</h1>
      </div>
    </div>
  </section>

@endsection

