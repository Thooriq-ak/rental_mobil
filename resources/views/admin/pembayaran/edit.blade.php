@section('title', 'Pembayaran')
@section('page_blank', 'Pembayaran')
@auth
@if (Auth::user()->role == 'admin')
<x-layout>
    <x-slot name="page_name">Halaman Pembayaran / Edit</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ route('pembayaran.update', $pembayaran->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="tanggal" class="col-sm-4 col-form-label">Tanggal</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tanggal" name="tanggal"
                        value="{{ $pembayaran->tanggal }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah_bayar" class="col-sm-4 col-form-label">Jumlah Bayar</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="jumlah_bayar" name="jumlah_bayar"
                        placeholder="Masukkan Jumlah Bayar" value="{{ $pembayaran->jumlah_bayar }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="peminjaman_id" class="col-sm-4 col-form-label">Peminjaman</label>
                <div class="col-sm-8">
                    <select class="form-control" id="peminjaman_id" name="peminjaman_id">
                        @foreach ($list_peminjaman as $peminjaman)
                            <option value="{{ $peminjaman->id }}" {{ $peminjaman->id == $pembayaran->peminjaman_id ? 'selected' : '' }}>
                                {{ $peminjaman->nama_peminjam }}
                            </option>
                        @endforeach
                    </select>
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
