<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// User Controllers
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\InformasiPublikController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\BantuanChatController;
use App\Http\Controllers\BantuanRatingController;
use App\Http\Controllers\AdminBantuanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OnboardingController; // <-- TAMBAHKAN INI
use App\Http\Controllers\CommentController;

// =============================
// User Page Routes
// =============================
Route::get('/', function () {
    return view('onboarding.welcome');
})->name('welcome');

// Rute Onboarding
Route::get('/home', [HomeController::class, 'userview'])->name('home');
Route::get('/tutorial', [OnboardingController::class, 'showTutorial'])->name('onboarding.tutorial');
Route::get('/completion', [OnboardingController::class, 'showCompletion'])->name('onboarding.completion');
Route::get('/profil-desa', [ProfilDesaController::class, 'showUserView'])->name('profil-desa');
Route::get('/informasi-publik', [InformasiPublikController::class, 'showUserView'])->name('informasi');
Route::get('/organisasi', [OrganisasiController::class, 'showUserView'])->name('organisasi');
Route::get('/pengaduan', [PengaduanController::class, 'showUserView'])->name('pengaduan');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
Route::get('/bantuan', [BantuanController::class, 'index'])->name('user.bantuan');


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

require __DIR__ . '/auth.php';


Route::get('/infografis', function () {
    return view('user.infografis');
})->name('infografis');


// =============================
// Bantuan - Chat dan Rating
// =============================

// 👉 Menampilkan halaman Bantuan (pilih kategori)
Route::get('/bantuan', [BantuanController::class, 'index'])
    ->name('user.bantuan');

// 👉 User menekan tombol "Mulai Chat" setelah memilih kategori
Route::post('/bantuan/start', [BantuanChatController::class, 'start'])
    ->name('bantuan.start');

// 👉 Halaman tampilan chat utama (chat view) — dipanggil setelah start()
Route::get('/bantuan/chat', [BantuanChatController::class, 'chatView'])
    ->name('bantuan.chat.view');

// 👉 Mengirim pesan melalui AJAX
Route::post('/bantuan/chat/send', [BantuanChatController::class, 'send'])
    ->name('bantuan.chat.send');

Route::get('/infografis', function () {
    return view('user.infografis');
})->name('infografis');

//potensi_RouteBaru
// Wisata
Route::get('/wisata', function () {
    return view('user.wisata');
})->name('wisata');

// Perikanan
Route::get('/perikanan', function () {
    return view('user.perikanan');
})->name('perikanan');

// Pertanian
Route::get('/pertanian', function () {
    return view('user.pertanian');
})->name('pertanian');
// 📌 Bantuan
// Akhiri chat
Route::post('/bantuan/chat/end', [BantuanChatController::class, 'end'])->name('bantuan.chat.end');

// 👉 Menyimpan rating setelah chat selesai
Route::post('/bantuan/rating', [BantuanRatingController::class, 'store'])
    ->name('bantuan.rating');


// =============================
// ADMIN - Layanan Bantuan Chat
// =============================

Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // 📌 Halaman daftar percakapan bantuan (group by session_id)
        Route::get('/bantuan', [AdminBantuanController::class, 'index'])
            ->name('bantuan.index');

        // 📌 Detail chat berdasarkan session_id
        Route::get('/bantuan/chat/{session_id}', [AdminBantuanController::class, 'showChat'])
            ->name('bantuan.chat');

        // 📌 Admin membalas pesan
        Route::post('/bantuan/chat/reply', [AdminBantuanController::class, 'reply'])
            ->name('bantuan.reply');
    });
// Ambil komentar
Route::get('/comments/{panduan_id}', [CommentController::class, 'showcomment']);

// Simpan komentar
Route::post('/panduan/comment', [CommentController::class, 'store'])
    ->name('comments.store');
