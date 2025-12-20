<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Controllers
|--------------------------------------------------------------------------
*/

// User Controllers
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
use App\Http\Controllers\BeritaController;


/*
|--------------------------------------------------------------------------
| User Page Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('onboarding.welcome');
})->name('welcome');

// Onboarding
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

// Panduan User
Route::get('/panduan', [PanduanController::class, 'showUserView'])->name('panduan.user');
Route::get('/panduan/{id}', [PanduanController::class, 'show'])->name('user.panduan.show');
Route::post('/panduan/{id}/view', [PanduanController::class, 'addView'])->name('panduan.addView');

// Komentar Panduan
Route::get('/comments/{panduan_id}', [CommentController::class, 'showcomment']);
Route::post('/panduan/comment', [CommentController::class, 'store'])->name('comments.store');


/*
|--------------------------------------------------------------------------
| Berita Desa (USER)
|--------------------------------------------------------------------------
*/

Route::get('/berita', [BeritaController::class, 'userIndex'])
    ->name('berita.index');

Route::get('/berita/{slug}', [BeritaController::class, 'show'])
    ->name('berita.show');



/*
|--------------------------------------------------------------------------
| Halaman Tambahan User
|--------------------------------------------------------------------------
*/

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

Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Profil Desa
        Route::resource('profil-desa', ProfilDesaController::class)->except(['show']);

        // Informasi Publik
        Route::resource('informasi-publik', InformasiPublikController::class);

        // Struktur Organisasi
        Route::resource('organisasi', OrganisasiController::class);

        // Pengaduan
        Route::resource('pengaduan', PengaduanController::class)
            ->only(['index', 'edit', 'update']);

        // Panduan
        Route::resource('panduan', PanduanController::class);

        // 🔥 Berita Desa (ADMIN CRUD)
        Route::resource('berita', BeritaController::class)
            ->except(['show']);

        // Bantuan - Admin
        Route::get('/bantuan', [AdminBantuanController::class, 'index'])
            ->name('bantuan.index');

        Route::get('/bantuan/chat/{session_id}', [AdminBantuanController::class, 'showChat'])
            ->name('bantuan.chat');

        Route::post('/bantuan/chat/reply', [AdminBantuanController::class, 'reply'])
            ->name('bantuan.reply');
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
| Bantuan - User Chat
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

Route::post('/bantuan/chat/end', [BantuanChatController::class, 'end'])
    ->name('bantuan.chat.end');

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
