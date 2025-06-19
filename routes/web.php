<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\JenisKendaraanController;
use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PembayaranController;
use App\Models\JenisKendaraan;
use App\Models\Armada;
use App\Models\Peminjaman;
use App\Models\Pembayaran;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/error-page', function () {
    return view('error_page');
})->name('error-page');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::middleware(['admin'])->group(function () {
        // Jenis Kendaraan
        Route::resource('/jenis_kendaraan', JenisKendaraanController::class);
        Route::get('/jenis_kendaraan/create{id}', [JenisKendaraanController::class, 'create']);
        Route::post('/jenis_kendaraan/store{id}', [JenisKendaraanController::class, 'store']);
        Route::get('/jenis_kendaraan/show/{id}', [JenisKendaraanController::class, 'show']);

        // Armada
        Route::resource('/armada', ArmadaController::class);
        Route::get('/armada/create{id}', [ArmadaController::class, 'create']);
        Route::post('/armada/store{id}', [ArmadaController::class, 'store']);
        Route::get('/armada/show/{id}', [ArmadaController::class, 'show']);

    });
        // Peminjaman
        Route::resource('/peminjaman', PeminjamanController::class);
        Route::get('/peminjaman/create{id}', [PeminjamanController::class, 'create']);
        Route::post('/peminjaman/store{id}', [PeminjamanController::class, 'store']);
        Route::get('/peminjaman/show/{id}', [PeminjamanController::class, 'show']);

        // Pembayaran
        Route::resource('/pembayaran', PembayaranController::class);
        Route::get('/pembayaran/create{id}', [PembayaranController::class, 'create']);
        Route::post('/pembayaran/store{id}', [PembayaranController::class, 'store']);
        Route::get('/pembayaran/show/{id}', [PembayaranController::class, 'show']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Navbar
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
