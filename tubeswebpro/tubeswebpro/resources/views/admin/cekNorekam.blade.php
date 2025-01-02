@extends('layouts.admin')

@section('title', 'cek-norekam')

@section('content')

  <div class="container mt-5">
    <h2 class="text-center">Cek Norekam Pasien</h2>
    <hr class="my-3">

    <!-- Alert error jika tidak ditemukan -->
    @if(session('error'))
      <div class="alert alert-danger">
        {{ session('error') }}
      </div>
    @endif

    <form action="{{ route('admin.cekRekamSearch') }}" method="GET" class="mt-4">
      <div class="mb-3">
        <label for="rekamMedis" class="form-label">Masukan Nomor Rekam Medis Pasien</label>
        <input type="text" class="form-control" id="rekamMedis" name="rekamMedis" placeholder="No. CM" required>
      </div>
      <button type="submit" class="btn btn-danger">Cari</button> 
    </form>
  </div> 
@endsection
