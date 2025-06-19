<?php

namespace App\Http\Controllers;

use App\Models\JenisKendaraan;
use Illuminate\Http\Request;

class JenisKendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_jenis_kendaraan = JenisKendaraan::all();
        return view('admin.jenis_kendaraan.index', compact('list_jenis_kendaraan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jenis_kendaraan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi form input
        $validated = $request->validate([
            'nama' => 'required|string|max:20',
        ]);

        JenisKendaraan::create($validated);
        return redirect('dashboard/jenis_kendaraan')->with('pesan', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenis_kendaraan = JenisKendaraan::find($id);
        return view('admin.jenis_kendaraan.show', compact('jenis_kendaraan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenis_kendaraan = JenisKendaraan::find($id);
        return view('admin.jenis_kendaraan.edit', compact('jenis_kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validasi form input
        $validated = $request->validate([
            'nama' => 'required|string|max:20',
        ]);

        $jenis_kendaraan = JenisKendaraan::find($id);
        $jenis_kendaraan->update($validated);

        return redirect('dashboard/jenis_kendaraan')->with('update', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenis_kendaraan = JenisKendaraan::find($id);
        $jenis_kendaraan->delete();
        return redirect('dashboard/jenis_kendaraan')->with('delete', 'Data berhasil dihapus!');
    }
}
