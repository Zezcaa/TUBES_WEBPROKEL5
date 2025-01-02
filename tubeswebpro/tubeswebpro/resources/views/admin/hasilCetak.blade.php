<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Cetak Resep</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Hasil Cetak Resep</h2>
    <hr class="my-3">

    <table class="table table-bordered">
        <tr>
            <th>Nomor Rekam Medis</th>
            <td>{{ $norekam->Nomor_Rekam }}</td>
        </tr>
        <tr>
            <th>Nama Pasien</th>
            <td>{{ $norekam->Nama_Pasien }}</td>
        </tr>
        <tr>
            <th>Jenis Rawat</th>
            <td>{{ $hasilPeriksa->jenis_rawat }}</td>
        </tr>
        <tr>
            <th>Tanggal Kunjungan</th>
            <td>{{ $hasilPeriksa->tanggal_kunjungan }}</td>
        </tr>
        <tr>
            <th>Diagnosa</th>
            <td>{{ $hasilPeriksa->diagnosa }}</td>
        </tr>
        <tr>
            <th>Resep</th>
            <td>{{ $hasilPeriksa->resep }}</td>
        </tr>
    </table>

    <div class="d-flex justify-content-between mt-4">
        <a href="{{ route('admin.cetakResep') }}" class="btn btn-secondary">Cancel</a>
        <button onclick="window.print()" class="btn btn-primary">Cetak</button>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
