<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <div class="text-center mb-4">
            <h2>Form Input Dokter</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('dokterAdmin.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="id_dokter" class="form-label">ID Dokter</label>
                        <input type="text" name="id_dokter" id="id_dokter" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_dokter" class="form-label">Nama Dokter</label>
                        <input type="text" name="nama_dokter" id="nama_dokter" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="poliklinik" class="form-label">Poliklinik</label>
                        <input type="text" name="poliklinik" id="poliklinik" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100 mb-2">Simpan</button>
                    <a href="{{ route('dokterAdmin.index') }}" class="btn btn-secondary w-100">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
