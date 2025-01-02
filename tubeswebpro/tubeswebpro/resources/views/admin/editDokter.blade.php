<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <div class="text-center mb-4">
            <h2>Edit Dokter</h2>
        </div>

        <form action="{{ route('dokterAdmin.update', $dokter->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="id_dokter" class="form-label">ID Dokter</label>
                <input type="text" name="id_dokter" id="id_dokter" class="form-control" value="{{ $dokter->id_dokter }}" required>
            </div>
            <div class="mb-3">
                <label for="nama_dokter" class="form-label">Nama Dokter</label>
                <input type="text" name="nama_dokter" id="nama_dokter" class="form-control" value="{{ $dokter->nama_dokter }}" required>
            </div>
            <div class="mb-3">
                <label for="poliklinik" class="form-label">Poliklinik</label>
                <input type="text" name="poliklinik" id="poliklinik" class="form-control" value="{{ $dokter->poliklinik }}" required>
            </div>

            <button type="submit" class="btn btn-success w-100 mb-3">Update</button>
            <a href="{{ route('dokterAdmin.index') }}" class="btn btn-secondary w-100">Kembali</a>
        </form>
    </div>
</body>
</html>
