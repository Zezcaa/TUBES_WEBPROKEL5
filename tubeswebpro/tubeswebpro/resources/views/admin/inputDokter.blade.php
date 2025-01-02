@extends('layouts.admin')

@section('title', 'Input Dokter')

@section('content')
    <div class="container my-5">
        <div class="text-center mb-4">
            <h2>Input Dokter</h2>
        </div>

        @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif

        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Dokter</th>
                    <th>Nama Dokter</th>
                    <th>Poliklinik</th>
                    <th>Aksi</th> <!-- Kolom untuk tombol edit dan hapus -->
                </tr>
            </thead>
            <tbody>
                @foreach ($dokters as $index => $dokter)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $dokter->id_dokter }}</td>
                        <td>{{ $dokter->nama_dokter }}</td>
                        <td>{{ $dokter->poliklinik }}</td>
                        <td>
                            <a href="{{ route('dokterAdmin.edit', $dokter->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('dokterAdmin.destroy', $dokter->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-center mt-4">
            <a href="{{ route('dokterAdmin.create') }}" class="btn btn-danger">Input Dokter</a>
        </div>
    </div>
@endsection
