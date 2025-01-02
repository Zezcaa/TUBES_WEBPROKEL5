@extends('layouts.admin')

@section('title', 'Input norekam')

@section('content')

  <div>
    <table class="table table-success table-striped">
        <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nomor_Rekam</th>
              <th scope="col">Nama_Pasien</th>
              <th scope="col">Nama_Dokter</th>
              <th scope="col">Poliklinik</th>
              <th scope="col">Diagnosa</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <th scope="row">1</th>
              <td>PS01</td>
              <td>Ahmad Syahputra</td>
              <td>Dr. Andi Setiawan</td>
              <td>Klinik Umum</td>
              <td>Demam Tinggi</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>PS02</td>
                <td>Rina Mustika</td>
                <td>Dr. Budi Santoso</td>
                <td>Klinik Umum</td>
                <td>Batuk Berdahak</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>PS03</td>
                <td>Siti Nurhayati</td>
                <td>Dr. Fitriani Rahmawati</td>
                <td>Klinik Ibu & Anak</td>
                <td>Infeksi Saluran Kemih</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>PS04</td>
                <td>Lina Oktaviani</td>
                <td>Dr. Dwi Lestari</td>
                <td>Klinik Gigi</td>
                <td>Karies Gigi</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>PS05</td>
                <td>Farida Mulyani</td>
                <td>Dr. Guntur Saputra</td>
                <td>Klinik Gigi</td>
                <td>Gingivitis</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>PS06</td>
                <td>Dedi Kurniawan</td>
                <td>Dr. Andi Setiawan</td>
                <td>Klinik Umum</td>
                <td>Radang Tenggorokan</td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td>PS07</td>
                <td>Angga Pratama</td>
                <td>Dr. Budi Santoso</td>
                <td>Klinik Umum</td>
                <td>Asma</td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td>PS08</td>
                <td>Sari Wulandari</td>
                <td>Dr. Dwi Lestari</td>
                <td>Klinik Gigi</td>
                <td>Abses Gigi</td>
            </tr>
            <tr>
                <th scope="row">9</th>
                <td>PS09</td>
                <td>Wulan Cahaya</td>
                <td>Dr. Fitriani Rahmawati</td>
                <td>Klinik Ibu & Anak</td>
                <td>Anemia pada Kehamilan</td>
            </tr>
            <tr>
                <th scope="row">10</th>
                <td>PS10</td>
                <td>Putri Amelia</td>
                <td>Dr. Fitriani Rahmawati</td>
                <td>Klinik Ibu & Anak</td>
                <td>Prenatal Checkup</td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-4 mb-4">
        <button type="button" id="inputDokter" class="btn btn-danger">Input Nomor Rekam</button>
    </div>    
  </div>
@endsection