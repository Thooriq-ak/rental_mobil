@section('title', 'Pembayaran')
@section('page_blank', 'Pembayaran')
<x-layout>
    <x-slot name="page_name">Halaman Pembayaran / Detail</x-slot>
    <x-slot name="page_content">
        <div class="form-group row">
            <label for="tanggal" class="col-sm-4 col-form-label">Tanggal</label>
            <div class="col-sm-8">
                <p>{{ $pembayaran->tanggal }}</p>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah_bayar" class="col-sm-4 col-form-label">Jumlah Bayar</label>
            <div class="col-sm-8">
                <p>{{ $pembayaran->jumlah_bayar }}</p>
            </div>
        </div>
        <div class="form-group row">
            <label for="peminjaman_id" class="col-sm-4 col-form-label">Peminjaman</label>
            <div class="col-sm-8">
                <p>{{ $pembayaran->peminjaman->nama_peminjam }}</p>
            </div>
        </div>
        <a href="{{ route('pembayaran.index') }}" class="btn btn-secondary">Kembali</a>
    </x-slot>
</x-layout>
