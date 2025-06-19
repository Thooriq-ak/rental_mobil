<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisKendaraan;
use App\Models\Armada;
use App\Models\Peminjaman;
use App\Models\Pembayaran;

class AdminController extends Controller
{
    public function index()
    {
        $jumlahJenisKendaraan = JenisKendaraan::count();
        $jumlahArmada = Armada::count();
        $jumlahPeminjaman = Peminjaman::count();
        $jumlahPembayaran = Pembayaran::count();

        return view('admin.index', [
            'query_jenis_kendaraan' => ['jumlah' => $jumlahJenisKendaraan],
            'query_armada' => ['jumlah' => $jumlahArmada],
            'query_peminjaman' => ['jumlah' => $jumlahPeminjaman],
            'query_pembayaran' => ['jumlah' => $jumlahPembayaran],
        ]);
    }
}
