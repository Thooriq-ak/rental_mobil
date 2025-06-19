@section('title', 'Kendaraan')
@section('page_blank', 'Kendaraan')
<x-layout>
    <x-slot name="page_name">Halaman Jenis Kendaraan / Edit</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ route('jenis_kendaraan.update', $jenis_kendaraan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Kendaraan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama"
                        placeholder="Masukkan Nama Kendaraan" value="{{ $jenis_kendaraan->nama }}">
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
