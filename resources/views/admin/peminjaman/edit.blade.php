@section('title', 'Peminjaman')
@section('page_blank', 'Peminjaman')
@auth
@if (Auth::user()->role == 'admin')
<x-layout>
    <x-slot name="page_name">Halaman Peminjaman / Edit</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="nama_peminjam" class="col-sm-4 col-form-label">Nama Peminjam</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam"
                        placeholder="Masukkan Nama Peminjam" value="{{ $peminjaman->nama_peminjam }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="ktp_peminjam" class="col-sm-4 col-form-label">KTP Peminjam</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="ktp_peminjam" name="ktp_peminjam"
                        placeholder="Masukkan KTP Peminjam" value="{{ $peminjaman->ktp_peminjam }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="keperluan_pinjam" class="col-sm-4 col-form-label">Keperluan Pinjam</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="keperluan_pinjam" name="keperluan_pinjam"
                        placeholder="Masukkan Keperluan Pinjam" value="{{ $peminjaman->keperluan_pinjam }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="mulai" class="col-sm-4 col-form-label">Mulai</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="mulai" name="mulai" value="{{ $peminjaman->mulai }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="selesai" class="col-sm-4 col-form-label">Selesai</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="selesai" name="selesai" value="{{ $peminjaman->selesai }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="biaya" class="col-sm-4 col-form-label">Biaya</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="biaya" name="biaya" placeholder="Masukkan Biaya" value="{{ $peminjaman->biaya }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="armada_id" class="col-sm-4 col-form-label">Armada</label>
                <div class="col-sm-8">
                    <select class="form-control" id="armada_id" name="armada_id">
                        @foreach ($list_armada as $armada)
                            <option value="{{ $armada->id }}" {{ $armada->id == $peminjaman->armada_id ? 'selected' : '' }}>
                                {{ $armada->merk }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="komentar_peminjam" class="col-sm-4 col-form-label">Komentar Peminjam</label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="komentar_peminjam" name="komentar_peminjam"
                        placeholder="Masukkan Komentar Peminjam">{{ $peminjaman->komentar_peminjam }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="status_pinjam" class="col-sm-4 col-form-label">Status Pinjam</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="status_pinjam" name="status_pinjam"
                        placeholder="Masukkan Status Pinjam" value="{{ $peminjaman->status_pinjam }}">
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
@endif
@endauth