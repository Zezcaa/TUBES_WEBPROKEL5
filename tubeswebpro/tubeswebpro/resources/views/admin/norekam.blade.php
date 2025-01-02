@extends('layouts.admin')

@section('title', 'norekam')

@section('content')
  <div class="container my-5">
    <h1>Daftar Rekam Medis</h1>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Rekam</th>
                <th>Nama Pasien</th>
                <th>Nama Dokter</th>
                <th>Poliklinik</th>
                <th>Diagnosa</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($norekams as $key => $norekam)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $norekam->Nomor_Rekam }}</td>
                <td>{{ $norekam->Nama_Pasien }}</td>
                <td>{{ $norekam->Nama_Dokter }}</td>
                <td>{{ $norekam->Poliklinik }}</td>
                <td>{{ $norekam->Diagnosa }}</td>
                <td>
                    <a href="{{ route('admin.editNorekam', $norekam->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    
                    <form action="{{ route('admin.deleteNorekam', $norekam->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
  </div>
@endsection
