<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::all();
        return view('admin.pembayaran.index', compact('pembayaran'));
    }

    public function create()
    {
        $list_peminjaman = Peminjaman::all();
        return view('admin.pembayaran.create', compact('list_peminjaman'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jumlah_bayar' => 'required|numeric',
            'peminjaman_id' => 'required|exists:peminjaman,id',
        ]);

        Pembayaran::create($request->all());

        return redirect()->route('pembayaran.index')->with('pesan', 'Pembayaran created successfully.');
    }

    public function show(Pembayaran $pembayaran)
    {
        return view('admin.pembayaran.show', compact('pembayaran'));
    }

    public function edit(Pembayaran $pembayaran)
    {
        $list_peminjaman = Peminjaman::all();
        return view('admin.pembayaran.edit', compact('pembayaran', 'list_peminjaman'));
    }

    public function update(Request $request, Pembayaran $pembayaran)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jumlah_bayar' => 'required|numeric',
            'peminjaman_id' => 'required|exists:peminjaman,id',
        ]);

        $pembayaran->update($request->all());

        return redirect()->route('pembayaran.index')->with('update', 'Pembayaran updated successfully.');
    }

    public function destroy(Pembayaran $pembayaran)
    {
        $pembayaran->delete();

        return redirect()->route('pembayaran.index')->with('delete', 'Pembayaran deleted successfully.');
    }
}
