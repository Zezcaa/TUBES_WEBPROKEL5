@extends('layouts.app')

@section('title', 'Pilih Poli dan Dokter')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg p-5" style="background-color: #f8f9fa; border-radius: 15px;">
                <h1 class="title-underline text-center mb-5" style="font-size: 2.5rem; font-weight: 700; color: #9e1b32;">Pilih Poli dan Dokter</h1>

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

                <!-- Form Pilih Poli dan Dokter -->
                <form action="{{ route('patients.storePoli', ['patient' => $patient->id]) }}" method="POST">
                    @csrf

                    <!-- Pilih Poli -->
                    <div class="mb-4">
                        <label for="poli" class="form-label" style="font-weight: 500;">Pilih Poli</label>
                        <select class="form-select" id="poli" name="poli" required>
                            @foreach ($polies as $poli)
                                <option value="{{ $poli }}">{{ $poli }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Pilih Dokter -->
                    <div class="mb-4">
                        <label for="doctor" class="form-label" style="font-weight: 500;">Pilih Dokter</label>
                        <select class="form-select" id="doctor" name="doctor" required>
                            @foreach ($doctors as $doctor)
                                <option value="{{ $doctor }}">{{ $doctor }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Nomor Rekam Medis -->
                    <div class="mb-4">
                        <label for="medical_record" class="form-label" style="font-weight: 500;">Nomor Rekam Medis</label>
                        <input type="text" class="form-control" id="medical_record" name="medical_record" value="{{ old('medical_record') }}" required placeholder="Masukkan nomor rekam medis">
                    </div>

                    <!-- Tombol Submit -->
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary btn-lg px-5 py-3 rounded-pill" style="font-weight: 600;">Simpan Pilihan</button>
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
