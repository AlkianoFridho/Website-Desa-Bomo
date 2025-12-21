<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OnboardingController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\InformasiPublikController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\BantuanChatController;
use App\Http\Controllers\BantuanRatingController;
use App\Http\Controllers\AdminBantuanController;
use App\Http\Controllers\CommentController;

// 🔹 Berita Controllers
use App\Http\Controllers\User\BeritaController as UserBeritaController;
use App\Http\Controllers\Admin\BeritaController as AdminBeritaController;

/*
|--------------------------------------------------------------------------
| ======================== ROUTE UNTUK USER =========================
|--------------------------------------------------------------------------
*/

// Halaman utama
Route::get('/', fn() => view('onboarding.welcome'))->name('welcome');

// Home & Onboarding
Route::get('/home', [HomeController::class, 'userview'])->name('home');
Route::get('/tutorial', [OnboardingController::class, 'showTutorial'])->name('onboarding.tutorial');
Route::get('/completion', [OnboardingController::class, 'showCompletion'])->name('onboarding.completion');

// Informasi Desa
Route::get('/profil-desa', [ProfilDesaController::class, 'showUserView'])->name('profil-desa');
Route::get('/informasi-publik', [InformasiPublikController::class, 'showUserView'])->name('informasi');
Route::get('/organisasi', [OrganisasiController::class, 'showUserView'])->name('organisasi');

// Pengaduan
Route::get('/pengaduan', [PengaduanController::class, 'showUserView'])->name('pengaduan');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');

// Panduan
Route::get('/panduan', [PanduanController::class, 'showUserView'])->name('panduan.user');
Route::get('/panduan/{id}', [PanduanController::class, 'show'])->name('user.panduan.show');
Route::post('/panduan/{id}/view', [PanduanController::class, 'addView'])->name('panduan.addView');

// Komentar
Route::get('/comments/{panduan_id}', [CommentController::class, 'showcomment']);
Route::post('/panduan/comment', [CommentController::class, 'store'])->name('comments.store');

// 📰 Berita (User)
Route::get('/berita', [UserBeritaController::class, 'index'])->name('user.berita.index');
Route::get('/berita/{slug}', [UserBeritaController::class, 'show'])->name('user.berita.show');

// Halaman tambahan
Route::view('/infografis', 'user.infografis')->name('infografis');
Route::view('/wisata', 'user.wisata')->name('wisata');
Route::view('/perikanan', 'user.perikanan')->name('perikanan');
Route::view('/pertanian', 'user.pertanian')->name('pertanian');

// Bantuan (User)
Route::get('/bantuan', [BantuanController::class, 'index'])->name('user.bantuan');
Route::post('/bantuan/start', [BantuanChatController::class, 'start'])->name('bantuan.start');
Route::get('/bantuan/chat', [BantuanChatController::class, 'chatView'])->name('bantuan.chat.view');
Route::post('/bantuan/chat/send', [BantuanChatController::class, 'send'])->name('bantuan.chat.send');
Route::post('/bantuan/chat/end', [BantuanChatController::class, 'end'])->name('bantuan.chat.end');
Route::post('/bantuan/rating', [BantuanRatingController::class, 'store'])->name('bantuan.rating');

/*
|--------------------------------------------------------------------------
| ======================== ROUTE UNTUK ADMIN =========================
|--------------------------------------------------------------------------
*/

// Dashboard
Route::get('/dashboard', fn() => view('admin.dashboard'))
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
// ambil semua chat berdasarkan session_id (AJAX polling)
Route::get('/bantuan/chat/fetch', [BantuanChatController::class, 'fetch'])
    ->name('bantuan.chat.fetch');


// 👉 Mengakhiri sesi chat
Route::post('/bantuan/chat/end', [BantuanChatController::class, 'end'])
    ->name('bantuan.chat.end');
Route::get('/infografis', function () {
    return view('user.infografis');
})->name('infografis');

Route::get('/wisata', function () {
    return view('user.wisata');
})->name('wisata');

Route::get('/perikanan', function () {
    return view('user.perikanan');
})->name('perikanan');

Route::get('/pertanian', function () {
    return view('user.pertanian');
})->name('pertanian');


/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/bantuan/chat/messages', [BantuanChatController::class, 'messages'])
    ->name('bantuan.chat.messages');


// =============================
// ADMIN - Layanan Bantuan Chat
// =============================

/*
|--------------------------------------------------------------------------
| ADMIN Routes (WAJIB LOGIN)
|--------------------------------------------------------------------------
*/

// Semua route admin wajib login
Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        // Profil Desa
        Route::resource('profil-desa', ProfilDesaController::class)->except(['show']);
        // Informasi Publik
        Route::resource('informasi-publik', InformasiPublikController::class);
        // Organisasi
        Route::resource('organisasi', OrganisasiController::class);
        // Pengaduan
        Route::resource('pengaduan', PengaduanController::class)->only(['index', 'edit', 'update']);
        // Panduan
        Route::resource('panduan', PanduanController::class);

        // 📰 Berita (Admin CRUD)
        Route::get('/berita', [AdminBeritaController::class, 'index'])->name('berita.index');
        Route::get('/berita/create', [AdminBeritaController::class, 'create'])->name('berita.create');
        Route::post('/berita', [AdminBeritaController::class, 'store'])->name('berita.store');
        Route::get('/berita/{beritum}/edit', [AdminBeritaController::class, 'edit'])->name('berita.edit');
        Route::put('/berita/{beritum}', [AdminBeritaController::class, 'update'])->name('berita.update');
        Route::delete('/berita/{beritum}', [AdminBeritaController::class, 'destroy'])->name('berita.destroy');

        // Bantuan - Admin
        Route::get('/bantuan', [AdminBantuanController::class, 'index'])->name('bantuan.index');
        Route::get('/bantuan/chat/{session_id}', [AdminBantuanController::class, 'showChat'])->name('bantuan.chat');
        Route::post('/bantuan/chat/reply', [AdminBantuanController::class, 'reply'])->name('bantuan.reply');
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
// Ambil komentar
Route::get('/comments/{panduan_id}', [CommentController::class, 'showcomment']);


/*
|--------------------------------------------------------------------------
| ======================== PROFILE =========================
|--------------------------------------------------------------------------
*/

Route::get('/bantuan', [BantuanController::class, 'index'])
    ->name('user.bantuan');

Route::post('/bantuan/start', [BantuanChatController::class, 'start'])
    ->name('bantuan.start');

Route::get('/bantuan/chat', [BantuanChatController::class, 'chatView'])
    ->name('bantuan.chat.view');

Route::post('/bantuan/chat/send', [BantuanChatController::class, 'send'])
    ->name('bantuan.chat.send');


// =============================
// Sektor Infografis & Potensi Desa
// =============================
Route::prefix('infografis')->group(function () {
    
    // Halaman Utama Infografis
    Route::get('/', function () {
        return view('user.infografis.index-infografis');
    })->name('infografis');

    // Detail Potensi Wisata
    Route::get('/wisata', function () {
        return view('user.infografis.wisata');
    })->name('wisata');

    // Detail Potensi Perikanan
    Route::get('/perikanan', function () {
        return view('user.infografis.perikanan');
    })->name('perikanan');

    // Detail Potensi Pertanian
    Route::get('/pertanian', function () {
        return view('user.infografis.pertanian');
    })->name('pertanian');
    
});

// 📌 Bantuan
// Akhiri chat
Route::post('/bantuan/chat/end', [BantuanChatController::class, 'end'])->name('bantuan.chat.end');

Route::post('/bantuan/rating', [BantuanRatingController::class, 'store'])
    ->name('bantuan.rating');


/*
|--------------------------------------------------------------------------
| Auth Profile
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
