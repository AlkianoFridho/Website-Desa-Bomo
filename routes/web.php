<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OnboardingController;
use App\Http\Controllers\ProfilDesaController;

use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\BantuanChatController;
use App\Http\Controllers\BantuanRatingController;
use App\Http\Controllers\AdminBantuanController;
use App\Http\Controllers\CommentController;

// ðŸ”¹ Berita Controllers
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

//  Berita (User)
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



// =============================
// USER - BANTUAN - CHAT
// =============================

// ðŸ‘‰ Halaman Bantuan (pilih kategori)
Route::get('/bantuan', [BantuanController::class, 'index'])
    ->name('user.bantuan');

// ðŸ‘‰ Mulai chat (buat session)
Route::post('/bantuan/start', [BantuanChatController::class, 'start'])
    ->name('bantuan.start');

// ðŸ‘‰ Halaman chat
Route::get('/bantuan/chat', [BantuanChatController::class, 'chatView'])
    ->name('bantuan.chat.view');

// ðŸ‘‰ Kirim pesan (AJAX)
Route::post('/bantuan/chat/send', [BantuanChatController::class, 'send'])
    ->name('bantuan.chat.send');

// ðŸ‘‰ Ambil pesan (AJAX polling)
Route::get('/bantuan/chat/fetch', [BantuanChatController::class, 'fetch'])
    ->name('bantuan.chat.fetch');

// NOTE: setelah ini redirect ke halaman rating
Route::post('/bantuan/chat/end', [BantuanChatController::class, 'end'])
    ->name('bantuan.chat.end');

/*
|--------------------------------------------------------------------------
| BANTUAN - RATING (USER)
|--------------------------------------------------------------------------
*/
// ðŸ‘‰ Tampilkan halaman rating (SETELAH chat selesai)
Route::get('/bantuan/rating/{session_id}', 
    [BantuanRatingController::class, 'create']
)->name('bantuan.rating.create');

// simpan rating
Route::post('/bantuan/rating/store', 
    [BantuanRatingController::class, 'store']
)->name('bantuan.rating.store');


// =============================
// ADMIN - Layanan Bantuan Chat
// =============================
Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // ðŸ“Œ Halaman daftar percakapan bantuan (group by session_id)
        Route::get('/bantuan', [AdminBantuanController::class, 'index'])
            ->name('bantuan.index');

        // ðŸ“Œ Detail chat berdasarkan session_id
        Route::get('/bantuan/chat/{session_id}', [AdminBantuanController::class, 'showChat'])
            ->name('bantuan.chat');

        // ðŸ“Œ Admin membalas pesan
        Route::post('/bantuan/chat/reply', [AdminBantuanController::class, 'reply'])
            ->name('bantuan.reply');
    });
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
       
        // Organisasi
        Route::resource('organisasi', OrganisasiController::class);
        // Pengaduan
        Route::resource('pengaduan', PengaduanController::class)->only(['index', 'edit', 'update']);
        // Panduan
        Route::resource('panduan', PanduanController::class);

        // ðŸ“° Berita (Admin CRUD)
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


Route::get('/dashboard', function () {
    return redirect()->route('admin.profil-desa.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
