@section('title', 'Peminjaman')
@section('page_blank', 'Peminjaman')
<x-layout>
    <x-slot name="page_name">Halaman Peminjaman / Create</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ route('peminjaman.store') }}" method="post">
            @csrf
            <div class="form-group row">
                <label for="nama_peminjam" class="col-sm-4 col-form-label">Nama Peminjam</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam"
                        placeholder="Masukkan Nama Peminjam" value="{{ old('nama_peminjam') }}">
                    @error('nama_peminjam')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="ktp_peminjam" class="col-sm-4 col-form-label">KTP Peminjam</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="ktp_peminjam" name="ktp_peminjam"
                        placeholder="Masukkan KTP Peminjam" value="{{ old('ktp_peminjam') }}">
                    @error('ktp_peminjam')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="keperluan_pinjam" class="col-sm-4 col-form-label">Keperluan Pinjam</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="keperluan_pinjam" name="keperluan_pinjam"
                        placeholder="Masukkan Keperluan Pinjam" value="{{ old('keperluan_pinjam') }}">
                    @error('keperluan_pinjam')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="mulai" class="col-sm-4 col-form-label">Mulai</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="mulai" name="mulai" value="{{ old('mulai') }}">
                    @error('mulai')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="selesai" class="col-sm-4 col-form-label">Selesai</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="selesai" name="selesai" value="{{ old('selesai') }}">
                    @error('selesai')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="biaya" class="col-sm-4 col-form-label">Biaya</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="biaya" name="biaya" placeholder="Masukkan Biaya" value="{{ old('biaya') }}">
                    @error('biaya')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="armada_id" class="col-sm-4 col-form-label">Armada</label>
                <div class="col-sm-8">
                    <select class="form-control" id="armada_id" name="armada_id">
                        @foreach ($list_armada as $armada)
                            <option value="{{ $armada->id }}">{{ $armada->merk }}</option>
                        @endforeach
                    </select>
                    @error('armada_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="komentar_peminjam" class="col-sm-4 col-form-label">Komentar Peminjam</label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="komentar_peminjam" name="komentar_peminjam"
                        placeholder="Masukkan Komentar Peminjam">{{ old('komentar_peminjam') }}</textarea>
                    @error('komentar_peminjam')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="status_pinjam" class="col-sm-4 col-form-label">Status Pinjam</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="status_pinjam" name="status_pinjam"
                        placeholder="Masukkan Status Pinjam" value="{{ old('status_pinjam') }}">
                    @error('status_pinjam')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
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
