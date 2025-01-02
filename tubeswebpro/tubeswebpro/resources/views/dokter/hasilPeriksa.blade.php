<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HASIL PERIKSA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/hasilPeriksa.css') }}">
</head>
<body>
    <!-- Tombol untuk Toggle Sidebar -->
    <button class="toggle-sidebar" onclick="toggleSidebar()">☰ Menu</button>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <h2><a href="{{ route('dokter.dashboard') }}" class="text-decoration-none text-white">HealthyCare</a></h2>
        <div class="menu-item">
            <a class="menu-link" href="{{ route('dokter.antrian') }}">DATA PASIEN</a>
        </div>
        <div class="menu-item">
            <a class="menu-link" href="{{ route('dokter.login') }}">LOGOUT</a>
        </div>
    </div>

    <!-- Konten Periksa -->
    <div class="content-periksa">
        <h2>Hasil Periksa</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('dokter.hasilPeriksa.store') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group">
                    <label for="pasien">Pasien:</label>
                    <input type="text" id="pasien" name="pasien" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="jenis-rawat">Jenis Rawat:</label>
                    <select id="jenis-rawat" name="jenis_rawat" class="form-control" required>
                        <option value="">-Pilih-</option>
                        <option value="Rawat Jalan">Rawat Jalan</option>
                        <option value="Rawat Inap">Rawat Inap</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="tanggal-kunjungan">Tanggal Kunjungan:</label>
                    <input type="date" id="tanggal-kunjungan" name="tanggal_kunjungan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="diagnosa">Diagnosa:</label>
                    <input type="text" id="diagnosa" name="diagnosa" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="resep">Resep:</label>
                <textarea id="resep" name="resep" class="form-control" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-secondary btn-block">Submit</button>
        </form>
        <form action="{{ route('dokter.antrian.next') }}" method="POST">
            @csrf
            <button type="submit" class="tn btn-secondary btn-block">Exit</button>
        </form>
    </div>


    <!-- Footer -->
    <footer class="custom-footer">
        <p>&copy; 2024 HealthyCare. All rights reserved.</p>
    </footer>

    <script>
        // Fungsi untuk toggle sidebar
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const isHidden = sidebar.style.width === '0px' || sidebar.style.width === '';
            sidebar.style.width = isHidden ? '250px' : '0px';
            sidebar.style.height = isHidden ? '100vh' : '0px';
        }
    </script>
</body>
</html>
