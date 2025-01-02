<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
</head>
<body>
    <button class="toggle-sidebar" onclick="toggleSidebar()">☰ Menu</button>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <h2 class="text-center"><a href="{{ route('dokter.dashboard') }}" class="text-decoration-none text-white">HealthyCare</a></h2>
            <div class="menu-item mt-4">
                <a class="menu-link d-block py-2 text-white text-decoration-none" href="{{ route('dokter.antrian') }}">DATA PASIEN</a>
            </div>
            <div class="menu-item mt-2">
                <a class="menu-link d-block py-2 text-white text-decoration-none" href="{{ route('dokter.login') }}">LOGOUT</a>
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="table-container">
                <H1>DATA PASIEN</H1>
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Poli Klinik</th>
                            <th>Nama Pasien</th>
                            <th>Tanggal Kunjungan</th>
                            <th>No Antrian</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($dataDashboard as $index => $dashboard)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $dashboard->poli_klinik }}</td>
                                <td>{{ $dashboard->nama_pasien }}</td>
                                <td>{{ $dashboard->tanggal_kunjungan }}</td>
                                <td>{{ $dashboard->no_antrian }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data pasien</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer class="custom-footer">
        <p>&copy; 2024 HealthyCare. All rights reserved.</p>
    </footer>
    
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('open');
        }
    </script>
</body>

</html>
