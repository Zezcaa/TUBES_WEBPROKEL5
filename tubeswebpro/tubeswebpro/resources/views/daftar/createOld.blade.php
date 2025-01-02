@extends('layouts.app')

@section('title', 'Pendaftaran Pasien Lama')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg p-4" style="background-color: #f8f9fa; border-radius: 15px;">
                <h1 class="title-underline text-center mb-5" style="font-size: 2.5rem; font-weight: 700; color: #9e1b32;">Pendaftaran Pasien Lama</h1>

                <!-- Menampilkan pesan error jika ada -->
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert" style="border-radius: 10px; padding: 15px; background-color: #f8d7da; color: #721c24;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Form Pendaftaran Pasien Lama -->
                <form action="{{ route('patients.storeOld') }}" method="POST">
                    @csrf

                    <!-- Nama Lengkap -->
                    <div class="mb-3">
                        <label for="name" class="form-label" style="font-weight: 500;">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Masukkan nama lengkap">
                    </div>

                    <!-- Nomor Kartu Identitas -->
                    <div class="mb-3">
                        <label for="identity_number" class="form-label" style="font-weight: 500;">Nomor Kartu Identitas</label>
                        <input type="text" class="form-control" id="identity_number" name="identity_number" required placeholder="Masukkan nomor kartu identitas">
                    </div>

                    <!-- Nomor Rekam Medis -->
                    <div class="mb-3">
                        <label for="medical_record_number" class="form-label" style="font-weight: 500;">Nomor Rekam Medis</label>
                        <input type="text" class="form-control" id="medical_record_number" name="medical_record_number" required placeholder="Masukkan nomor rekam medis">
                    </div>

                    <!-- Tombol Submit -->
                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-primary btn-lg px-5 py-3 rounded-pill" style="font-weight: 600;">Daftar Pasien Lama</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
    <style>
        .container {
            margin-top: 80px;
        }

        .card {
            background-color: #f8f9fa;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        }

        .title-underline {
            text-decoration: underline;
            color: #9e1b32;
        }

        .btn-primary {
            background-color: #9e1b32;
            border: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #8c1c29;
            color: white;
        }

        .form-label {
            font-weight: 500;
        }

        .form-select, .form-control {
            border-radius: 10px;
        }

        /* Responsiveness */
        @media (max-width: 767px) {
            .card {
                padding: 30px;
            }

            .btn-lg {
                font-size: 1.1rem;
                padding: 12px 25px;
            }

            .container {
                margin-top: 40px;
            }
        }
    </style>
@endsection
