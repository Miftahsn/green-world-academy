<?php

use App\Http\Controllers\Admin\SiswaController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\BaseController;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\PembinaController;
use App\Http\Controllers\Admin\TestimoniController;
use App\Http\Controllers\Admin\ProfileSekolahController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\InfoPendaftaranController;
use App\Http\Controllers\Admin\KegiatanCOntroller;
use App\Http\Controllers\Pembina\PembinaController as PembinaPembinaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
});

Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/kegiatan', 'kegiatan')->name('info.kegiatan');
    Route::get('/info/pendaftaran', 'infoPendaftaran')->name('info.pendaftaran');
});

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(BaseController::class)->group(function () {
        Route::get('/home', 'index')->name('index.home');
    });
    Route::controller(ChartController::class)->group(function () {
        Route::get('/chart/user', 'index')->name('index.chart');
    });
    Route::controller(InfoPendaftaranController::class)->group(function () {
        Route::get('/info/daftar', 'infoDaftar')->name('info.daftar');
        Route::get('/info/daftar/create', 'createInfoDaftar')->name('create.info.daftar');
        Route::post('/info/daftar/store', 'storeInfoDaftar')->name('store.info.daftar');
        Route::get('/info/daftar/edit/{id}', 'editInfoDaftar')->name('edit.info.daftar');
        Route::put('/info/daftar/update/{id}', 'updateInfoDaftar')->name('update.info.daftar');
        Route::get('/info/daftar/lihat/{id}', 'lihatInfoDaftar')->name('lihat.info.daftar');
    });
    Route::controller(PembinaController::class)->group(function () {
        Route::get('/pembina', 'index')->name('index.dataPembina');
        Route::get('/search-pembina', 'search')->name('search.dataPembina');
        Route::get('/create/pembina', 'createPembina')->name('create.pembina');
        Route::post('/store/pembina', 'storePembina')->name('store.pembina');
        Route::delete('/delete/pembina', 'deletePembina')->name('delete.pembina');
    });
    Route::controller(SiswaController::class)->group(function () {
        Route::get('/siswa', 'index')->name('index.dataSiswa');
        Route::get('/search-siswa', 'search')->name('search.dataSiswa');
        Route::get('/create/siswa', 'createSiswa')->name('create.siswa');
        Route::post('/store/siswa', 'storeSiswa')->name('store.siswa');
        Route::get('/edit/siswa/{id}', 'editSiswa')->name('edit.siswa');
        Route::put('/update/siswa/{id}', 'updateSiswa')->name('update.siswa');
        Route::delete('/delete/siswa', 'deleteSiswa')->name('delete.siswa');
    });
    Route::controller(ProfileSekolahController::class)->group(function () {
        Route::get('/profile/sekolah', 'index')->name('index.profile.sekolah');
        Route::get('/create/profile/sekolah', 'createProfile')->name('create.profile.sekolah');
        Route::post('/store/profile', 'storeProfile')->name('store.profile.sekolah');
        Route::get('/edit/profile/{id}', 'editProfile')->name('edit.profile.sekolah');
        Route::put('/update/profile/{id}', 'updateProfile')->name('update.profile.sekolah');
        Route::delete('/delete/profile', 'deleteProfile')->name('delete.profile.sekolah');
        Route::get('/visi/{id}', 'visi')->name('visi');
        Route::get('/misi/{id}', 'misi')->name('misi');
        Route::get('/sejarah/{id}', 'sejarah')->name('sejarah');

    });
    Route::controller(KegiatanCOntroller::class)->group(function () {
        Route::get('/kegiatan', 'index')->name('index.kegiatan');
        Route::get('/search-kegiatan', 'search')->name('search.kegiatan');
        Route::get('/create/kegiatan', 'createKegiatan')->name('create.kegiatan');
        Route::post('/store/kegiatan', 'storeKegiatan')->name('store.kegiatan');
        Route::get('/edit/kegiatan/{id}', 'editKegiatan')->name('edit.kegiatan');
        Route::put('/update/kegiatan/{id}', 'updateKegiatan')->name('update.kegiatan');
        Route::delete('/delete/kegiatan', 'deleteKegiatan')->name('delete.kegiatan');
    });
});

Route::prefix('pembina')->middleware(['auth', 'isPembina'])->group(function () {
    Route::controller(PembinaPembinaController::class)->group(function () {
        Route::get('/home', 'index')->name('index.pembina');
        Route::get('/profile/pembina/', 'profilePembina')->name('profile.pembina');
        Route::get('edit/profile/pembina/{id}', 'editProfile')->name('edit.profile.pembina');
        Route::put('update/profile/pembina/{id}', 'updateProfile')->name('update.profile.pembina');
        Route::get('/tugasPekanan', 'tugasPekanan')->name('tugas.pekanan');
        Route::get('/create/tugasPekanan', 'createTugas')->name('create.tugas.pekanan');
        Route::post('/store/tugasPekanan', 'storeTugas')->name('store.tugas.pekanan');
        Route::get('/edit/tugasPekanan/{id}', 'editTugas')->name('edit.tugas.pekanan');
        Route::put('/update/tugasPekanan/{id}', 'updateTugas')->name('update.tugas.pekanan');
        Route::get('/show/tugasPekanan/{id}', 'showTugas')->name('show.tugas.pekanan');
        Route::get('/hasil/tugasPekanan', 'hasilTugas')->name('hasil.tugas.pekanan');
        Route::get('/siswa/data', 'siswaData')->name('index.siswa.data');
        Route::get('/search-siswadata', 'searchSiswa')->name('search.siswa.data');
        Route::get('/search-tugas', 'searchTugas')->name('search.tugas');
        Route::get('/search-hasiltugas', 'searchHasilTugas')->name('search.hasil.tugas');
    });
});

Route::prefix('user')->middleware(['auth', 'isUser'])->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/home', 'index')->name('index.user');
        Route::get('/profile/user', 'profileUser')->name('profile.user');
        Route::put('/update/profile/{id}', 'updateProfile')->name('user.update.profile');
        Route::get('/tugas', 'tugas')->name('user.tugas');
        Route::get('/detail/tugas/{id}', 'detailTugas')->name('user.detail.tugas');
        Route::get('/kirim/tugas/{id}', 'kirimTugas')->name('user.kirim.tugas');
        Route::put('/submit/tugas/{id}', 'submitTugas')->name('user.submit.tugas');
        Route::get('/tugas/terkirim/', 'tugasTerkirim')->name('user.tugas.terkirim');
        Route::get('edit/tugas/terkirim/{id}', 'editTugas')->name('user.tugas.edit');
        Route::put('/update/tugas/terkirim/{id}', 'updateTugasTerkirim')->name('user.update.tugas');
        Route::get('/search-tugaspekanan', 'searchTugas')->name('search.tugas.pekan');
        Route::get('/search-tugasuser', 'search')->name('search.tugas.user');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
