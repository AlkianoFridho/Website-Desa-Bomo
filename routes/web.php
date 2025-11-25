<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\InformasiPublikController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\PengaduanController;

Route::get('/', function () {
    return view('user.home');
})->name('home');
Route::get('/profil-desa', [ProfilDesaController::class, 'showUserView'])->name('profil-desa');
Route::get('/informasi-publik', [InformasiPublikController::class, 'showUserView'])->name('informasi');
Route::get('/organisasi', [OrganisasiController::class, 'showUserView'])->name('organisasi');
Route::get('/pengaduan', [PengaduanController::class, 'showUserView'])->name('pengaduan');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('admin/profil-desa', ProfilDesaController::class)->except(['show']);

// 📌 Informasi Publik
Route::resource('admin/informasi-publik', InformasiPublikController::class);

// 📌 Struktur Organisasi
Route::resource('admin/organisasi', OrganisasiController::class);

// 📌 Pengaduan
Route::resource('admin/pengaduan', PengaduanController::class)->only(['index', 'edit', 'update']);
require __DIR__.'/auth.php';
