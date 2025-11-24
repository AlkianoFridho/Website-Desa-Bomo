<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// User Controllers
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\InformasiPublikController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PanduanController;

// =============================
// User Page Routes
// =============================
Route::get('/', function () {
    return view('user.home');
})->name('home');

Route::get('/profil-desa', [ProfilDesaController::class, 'showUserView'])->name('profil-desa');
Route::get('/informasi-publik', [InformasiPublikController::class, 'showUserView'])->name('informasi');
Route::get('/organisasi', [OrganisasiController::class, 'showUserView'])->name('organisasi');
Route::get('/pengaduan', [PengaduanController::class, 'showUserView'])->name('pengaduan');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');

// 👉 Halaman Panduan di sisi User
Route::get('/panduan', [PanduanController::class, 'showUserView'])->name('panduan.user');
Route::get('/panduan/{id}', [PanduanController::class, 'show'])->name('user.panduan.show');
Route::post('/panduan/{id}/view', [PanduanController::class, 'addView'])
    ->name('panduan.addView');
// =============================
// Dashboard
// =============================
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// =============================
// ADMIN Routes (Wajib Login!!)
// =============================
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    // Profil Desa
    Route::resource('profil-desa', ProfilDesaController::class)->except(['show']);

    // Informasi Publik
    Route::resource('informasi-publik', InformasiPublikController::class);

    // Struktur Organisasi
    Route::resource('organisasi', OrganisasiController::class);

    // Pengaduan
    Route::resource('pengaduan', PengaduanController::class)->only(['index', 'edit', 'update']);

    // 🔥 Panduan (CRUD)
    Route::resource('panduan', PanduanController::class);
});


// =============================
// Auth Profile
// =============================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
