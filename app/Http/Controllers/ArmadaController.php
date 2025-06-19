<?php

namespace App\Http\Controllers;

use App\Models\Armada;
use Illuminate\Http\Request;
use App\Models\JenisKendaraan;

class ArmadaController extends Controller
{
    // ...

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_armada = Armada::all();
        return view('admin.armada.index', compact('list_armada'));
    }

    public function create()
    {
        $list_jenis_kendaraan = JenisKendaraan::all();
        return view('admin.armada.create', compact('list_jenis_kendaraan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate form input
        $validated = $request->validate([
            'merk' => 'required|string|max:30',
            'nopol' => 'required|string|max:20',
            'thn_beli' => 'required|integer',
            'deskripsi' => 'nullable|string|max:200',
            'jenis_kendaraan_id' => 'required|exists:jenis_kendaraan,id',
            'kapasitas_kursi' => 'required|integer',
            'rating' => 'required|integer',
        ]);
    
        Armada::create($validated);
    
        return redirect('dashboard/armada')->with('pesan', 'Data Armada berhasil ditambahkan!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $armada = Armada::findOrFail($id);
        return view('admin.armada.show', compact('armada'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $armada = Armada::findOrFail($id);
        $list_jenis_kendaraan = JenisKendaraan::all();
        return view('admin.armada.edit', compact('armada', 'list_jenis_kendaraan'));
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
        // Validate form input
        $validated = $request->validate([
            'merk' => 'required|string|max:30',
            'nopol' => 'required|string|max:20',
            'thn_beli' => 'required|integer',
            'deskripsi' => 'nullable|string|max:200',
            'jenis_kendaraan_id' => 'required|exists:jenis_kendaraan,id',
            'kapasitas_kursi' => 'required|integer',
            'rating' => 'required|integer',
        ]);

        $armada = Armada::findOrFail($id);
        $armada->update($validated);

        return redirect('dashboard/armada')->with('update', 'Data Armada berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $armada = Armada::findOrFail($id);
        $armada->delete();
        return redirect('dashboard/armada')->with('delete', 'Data Armada berhasil dihapus!');
    }
}
