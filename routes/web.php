<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminSampahController;
use App\Http\Controllers\AdminSampahMasukController;
use App\Http\Controllers\AdminTabunganController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\NasabahSaldoController;
use App\Http\Controllers\NasabahSampahController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LaporanSampahController;
use App\Http\Controllers\DeveloperController;
use App\Models\Sampah;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::get('/admin/dashboard', function () {
    $totalSampah = Sampah::count();
    return view('admin.dashboard', compact('totalSampah'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/admin/sampah', [AdminSampahController::class, 'index'])->name('sampah.index');
    Route::post('/admin/sampah', [AdminSampahController::class, 'store']);
    Route::get('/admin/sampah/{id}/edit', [AdminSampahController::class, 'edit'])->name('sampah.edit');
    Route::put('/admin/sampah/{id}', [AdminSampahController::class, 'update'])->name('sampah.update');
    Route::delete('/admin/sampah/{sampah}', [AdminSampahController::class, 'destroy']);

    Route::get('/auth/ubah-password', [ProfileController::class, 'PasswordForm'])->name('password.ubah');
    Route::post('/auth/ubah-password', [ProfileController::class, 'ubahPassword'])->name('password.update');

    Route::get('/laporan/sampah', [LaporanSampahController::class, 'index']);
    Route::get('/laporan/sampah/cetak/term/{term}', [LaporanSampahController::class, 'cetak']);
    Route::get('/laporan/sampah/cetak/{sampah}', [LaporanSampahController::class, 'cetakPerUser'])->name('laporan.sampah.cetak.peruser');

    Route::get('/admin/developer', [DeveloperController::class, 'index'])->name('developer.index');
});

require __DIR__ . '/auth.php';
