<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Rekam Medis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body>
  <div class="container my-5">
    <h1>Edit Rekam Medis</h1>
    <form action="{{ route('admin.updateNorekam', $norekam->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="Nomor_Rekam" class="form-label">Nomor Rekam</label>
            <input type="text" class="form-control" id="Nomor_Rekam" name="Nomor_Rekam" value="{{ old('Nomor_Rekam', $norekam->Nomor_Rekam) }}" required>
        </div>
        
        <div class="mb-3">
            <label for="Nama_Pasien" class="form-label">Nama Pasien</label>
            <input type="text" class="form-control" id="Nama_Pasien" name="Nama_Pasien" value="{{ old('Nama_Pasien', $norekam->Nama_Pasien) }}" required>
        </div>

        <div class="mb-3">
            <label for="Nama_Dokter" class="form-label">Nama Dokter</label>
            <input type="text" class="form-control" id="Nama_Dokter" name="Nama_Dokter" value="{{ old('Nama_Dokter', $norekam->Nama_Dokter) }}" required>
        </div>

        <div class="mb-3">
            <label for="Poliklinik" class="form-label">Poliklinik</label>
            <input type="text" class="form-control" id="Poliklinik" name="Poliklinik" value="{{ old('Poliklinik', $norekam->Poliklinik) }}" required>
        </div>

        <div class="mb-3">
            <label for="Diagnosa" class="form-label">Diagnosa</label>
            <input type="text" class="form-control" id="Diagnosa" name="Diagnosa" value="{{ old('Diagnosa', $norekam->Diagnosa) }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    <a href="{{ route('admin.norekam') }}" class="btn btn-secondary mt-3">Kembali</a>
  </div>

  <footer class="custom-footer text-center py-4">
    <p>&copy; 2024 HealthyCare. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
