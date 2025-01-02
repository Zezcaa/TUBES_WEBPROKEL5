@extends('layouts.admin')

@section('title', 'cetakResep')

@section('content')

    <div class="container mt-5">
        <h2 class="text-center">Cetak Resep</h2>
        <hr class="my-3">
        
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        
        <form action="{{ route('admin.cariResep') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="rekamMedis" class="form-label">Masukan Nomor Rekam Medis Pasien</label>
                <input type="text" class="form-control" id="rekamMedis" name="rekamMedis" placeholder="No. CM" required>
            </div>
            <button type="submit" class="btn btn-danger">Cari</button>
        </form>
    </div>
@endsection
                                                                                                