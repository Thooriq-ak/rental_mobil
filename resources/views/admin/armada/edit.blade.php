@section('title', 'Armada')
@section('page_blank', 'Armada')
<x-layout>
    <x-slot name="page_name">Halaman Armada / Edit</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ route('armada.update', $armada->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="merk" class="col-sm-4 col-form-label">Merk</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="merk" name="merk"
                        placeholder="Masukkan Merk Armada" value="{{ $armada->merk }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nopol" class="col-sm-4 col-form-label">Nomor Polisi</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nopol" name="nopol"
                        placeholder="Masukkan Nomor Polisi" value="{{ $armada->nopol }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="thn_beli" class="col-sm-4 col-form-label">Tahun Beli</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="thn_beli" name="thn_beli"
                        placeholder="Masukkan Tahun Pembelian" value="{{ $armada->thn_beli }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="deskripsi" name="deskripsi"
                        placeholder="Masukkan Deskripsi Armada">{{ $armada->deskripsi }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="jenis_kendaraan_id" class="col-sm-4 col-form-label">Jenis Kendaraan</label>
                <div class="col-sm-8">
                    <select class="form-control" id="jenis_kendaraan_id" name="jenis_kendaraan_id">
                        @foreach ($list_jenis_kendaraan as $jenis_kendaraan)
                            <option value="{{ $jenis_kendaraan->id }}" {{ $jenis_kendaraan->id == $armada->jenis_kendaraan_id ? 'selected' : '' }}>
                                {{ $jenis_kendaraan->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="kapasitas_kursi" class="col-sm-4 col-form-label">Kapasitas Kursi</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="kapasitas_kursi" name="kapasitas_kursi"
                        placeholder="Masukkan Kapasitas Kursi" value="{{ $armada->kapasitas_kursi }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="rating" class="col-sm-4 col-form-label">Rating</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="rating" name="rating"
                        placeholder="Masukkan Rating" value="{{ $armada->rating }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>
        </form>
    </x-slot>
</x-layout>
