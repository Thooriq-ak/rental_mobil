<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Armada;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $list_peminjaman = Peminjaman::all();
        return view('admin.peminjaman.index', compact('list_peminjaman'));
    }

    public function create()
    {
        $list_armada = Armada::all();
        return view('admin.peminjaman.create', compact('list_armada'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_peminjam' => 'required|string|max:45',
            'ktp_peminjam' => 'required|string|max:20',
            'keperluan_pinjam' => 'required|string|max:100',
            'mulai' => 'required|date',
            'selesai' => 'required|date',
            'biaya' => 'required|numeric',
            'armada_id' => 'required|exists:armada,id',
            'komentar_peminjam' => 'nullable|string|max:100',
            'status_pinjam' => 'required|string|max:20',
        ]);

        Peminjaman::create($validated);

        return redirect('dashboard/peminjaman')->with('pesan', 'Data Peminjaman berhasil ditambahkan!');
    }

    public function show($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        return view('admin.peminjaman.show', compact('peminjaman'));
    }

    public function edit($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $list_armada = Armada::all();
        return view('admin.peminjaman.edit', compact('peminjaman', 'list_armada'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_peminjam' => 'required|string|max:45',
            'ktp_peminjam' => 'required|string|max:20',
            'keperluan_pinjam' => 'required|string|max:100',
            'mulai' => 'required|date',
            'selesai' => 'required|date',
            'biaya' => 'required|numeric',
            'armada_id' => 'required|exists:armada,id',
            'komentar_peminjam' => 'nullable|string|max:100',
            'status_pinjam' => 'required|string|max:20',
        ]);

        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update($validated);

        return redirect('dashboard/peminjaman')->with('update', 'Data Peminjaman berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();
        return redirect('dashboard/peminjaman')->with('delete', 'Data Peminjaman berhasil dihapus!');
    }
}
