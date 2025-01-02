<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOMOR ANTRIAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/antrian.css') }}">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2><a href="{{ route('dokter.dashboard') }}" class="text-decoration-none text-white">HealthyCare</a></h2>
        <div class="menu-item">
            <a class="menu-link" href="{{ route('dokter.antrian') }}">DATA PASIEN</a>
        </div>
        <div class="menu-item">
            <a class="menu-link" href="{{ route('dokter.login') }}">LOGOUT</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <main class="main-content vh-100">
            <div class="container mt-5">
                <h2>Nomor Antrian</h2>
                @if($antrian)
                    <h3>{{ str_pad($antrian->no_antrian, 3, '0', STR_PAD_LEFT) }}</h3>
                    <div id="NamaHelp" class="form-text">{{ $antrian->poli_klinik }}</div><br>
                    <div class="button-container">
                        <a href="{{ route('dokter.dashboard') }}" class="btn btn-outline-primary">Cancel</a>
                        <form action="{{ route('dokter.hasilPeriksa.create') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">Selanjutnya</button>
                    </form>
                    </div>
                @else
                    <p>No waiting antrian found.</p>
                @endif
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="custom-footer">
        <p>&copy; 2024 HealthyCare. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
