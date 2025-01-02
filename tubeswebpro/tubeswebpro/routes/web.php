<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\HasilPeriksaController;
use App\Http\Controllers\loginAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\dokterAdminController;
use App\Http\Controllers\NorekamController;
use App\Http\Controllers\CekNorekamController;
use App\Http\Controllers\CetakResepController;

Route::get('/', function () {
    return view('index');
});

Route::get('/masuk', [MasukController::class, 'index'])->name('masuk.index');

Route::get('/daftar', [PatientController::class, 'index'])->name('patients.index');
Route::get('/daftar-pasien-baru', [PatientController::class, 'createNew'])->name('patients.createNew');
Route::get('/daftar-pasien-lama', [PatientController::class, 'createOld'])->name('patients.createOld');
Route::post('/daftar-pasien-baru', [PatientController::class, 'storeNew'])->name('patients.storeNew');
Route::post('/daftar-pasien-lama', [PatientController::class, 'storeOld'])->name('patients.storeOld');
Route::get('/pasien/{patient}/pilih', [PatientController::class, 'selectPoli'])->name('patients.selectPoli');
Route::post('/pasien/{patient}/pilih', [PatientController::class, 'storePoli'])->name('patients.storePoli');
Route::get('/pasien/{patient}/nomor-antrean', [PatientController::class, 'showQueueNumber'])->name('patients.showQueueNumber');

Route::get('/doctors', [jadwalController::class, 'index'])->name('doctors.index');
Route::get('/dokter/{id}', [jadwalController::class, 'showDoctor'])->name('doctors.show');
Route::get('/clinics', [jadwalController::class, 'index'])->name('clinics.index');
Route::get('/klinik/{id}', [jadwalController::class, 'showClinic'])->name('clinic.show');

// Rute untuk login
Route::get('/dokter', [DokterController::class, 'showLogin'])->name('dokter.login');
Route::post('/dokter', [DokterController::class, 'login'])->name('dokter.login.submit');
Route::get('/dr/dashboard', [DashboardController::class, 'index'])->name('dokter.dashboard');

// Rute lainnya
Route::get('/antrian', [AntrianController::class, 'index'])->name('dokter.antrian');
Route::post('/antrian/next', [AntrianController::class, 'nextAntrian'])->name('dokter.antrian.next');
Route::get('/hasil-periksa', [HasilPeriksaController::class, 'create'])->name('dokter.hasilPeriksa.create');
Route::post('/hasil-periksa', [HasilPeriksaController::class, 'store'])->name('dokter.hasilPeriksa.store');

Route::get('/admin/beranda', [AdminController::class, 'beranda'])->name('admin.beranda');
Route::get('/admin/inputDokter', [dokterAdminController::class, 'index'])->name('dokterAdmin.index');
Route::get('/admin/inputDokter/create', [dokterAdminController::class, 'create'])->name('dokterAdmin.create');
Route::post('/admin/inputDokter', [dokterAdminController::class, 'store'])->name('dokterAdmin.store');
Route::get('/admin/inputDokter/{id}/edit', [dokterAdminController::class, 'edit'])->name('dokterAdmin.edit');
Route::put('/admin/inputDokter/{id}', [dokterAdminController::class, 'update'])->name('dokterAdmin.update');
Route::delete('/admin/inputDokter/{id}', [dokterAdminController::class, 'destroy'])->name('dokterAdmin.destroy');
Route::get('/admin/norekam', [NorekamController::class, 'index'])->name('admin.norekam');
Route::get('/admin/editNorekam/{id}/edit', [NorekamController::class, 'edit'])->name('admin.editNorekam');
Route::put('/admin/editNorekam/{id}', [NorekamController::class, 'update'])->name('admin.updateNorekam');
Route::delete('/admin/editNorekam/{id}', [NorekamController::class, 'destroy'])->name('admin.deleteNorekam');
Route::get('/admin/cek-rekam', [CekNorekamController::class, 'index'])->name('admin.cekRekam'); 
Route::get('/admin/cek-rekam/search', [CekNorekamController::class, 'search'])->name('admin.cekRekamSearch'); 
Route::get('/admin/cetakResep', [CetakResepController::class, 'cetakResep'])->name('admin.cetakResep');
Route::post('admin/cetakResep/cari', [CetakResepController::class, 'cari'])->name('admin.cariResep');
Route::get('/admin', [loginAdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin', [loginAdminController::class, 'login']);



