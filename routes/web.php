<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MontirController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\DetailLayananController;
use App\Http\Controllers\KategoriMontirController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('frontend');
});

// Rute umum
Route::get('/salam', function () {
    return "Selamat Datang Mahasiswa TI07 di STTNF";
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/pasien', function () {
    return view('pasien');
});

// Rute untuk dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard.index');

// Rute untuk admin
Route::get('/admin', [AdminController::class, 'index']);

// Rute resource untuk Montir
Route::resource('montirs', MontirController::class);

// Rute resource untuk Layanan
Route::resource('layanans', LayananController::class);

// Rute resource untuk DetailLayanan
Route::resource('detail_layanans', DetailLayananController::class);

// Rute resource untuk KategoriMontir
Route::resource('kategori_montirs', KategoriMontirController::class);

// Rute untuk profil di dalam folder admin
Route::get('/admin/profile', function () {
    return view('admin.profile');
})->name('profile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Tambahkan rute POST untuk logout
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
