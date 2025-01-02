<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Cek Rekam Medis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body>
  <header id="header" class="header-main sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="{{ asset('assets/img/LOGOKU.png') }}" alt="HealthyCare Logo" width="50" height="50"> HealthyCare </a>
      </div>
    </nav>
  </header>

  <div class="container mt-5">
    <h2 class="text-center">Hasil Pencarian Rekam Medis</h2>
    <hr class="my-3">
    
    @if (session('error'))
      <div class="alert alert-danger">{{ session('error') }}</div>
    @else
      <table class="table table-bordered">
        <tr>
          <th>Nomor Rekam</th>
          <td>{{ $norekam->Nomor_Rekam }}</td>
        </tr>
        <tr>
          <th>Nama Pasien</th>
          <td>{{ $norekam->Nama_Pasien }}</td>
        </tr>
        <tr>
          <th>Nama Dokter</th>
          <td>{{ $norekam->Nama_Dokter }}</td>
        </tr>
        <tr>
          <th>Poliklinik</th>
          <td>{{ $norekam->Poliklinik }}</td>
        </tr>
        <tr>
          <th>Diagnosa</th>
          <td>{{ $norekam->Diagnosa }}</td>
        </tr>
      </table>
    @endif

    <!-- Tombol Kembali -->
    <div class="text-center mt-4">
      <a href="{{ route('admin.cekRekam') }}" class="btn btn-primary">Kembali ke Cek Rekam Medis</a>
    </div>
  </div>

  <footer class="custom-footer text-center py-4">
    <p>&copy; 2024 HealthyCare. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
