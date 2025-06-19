@section('title', 'Peminjaman')
@section('page_blank', 'Peminjaman')
<x-layout>
    <x-slot name="page_name">Halaman Peminjaman / Detail</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr>
                <th>Nama Peminjam</th>
                <td>{{ $peminjaman->nama_peminjam }}</td>
            </tr>
            <tr>
                <th>KTP Peminjam</th>
                <td>{{ $peminjaman->ktp_peminjam }}</td>
            </tr>
            <tr>
                <th>Keperluan Pinjam</th>
                <td>{{ $peminjaman->keperluan_pinjam }}</td>
            </tr>
            <tr>
                <th>Mulai</th>
                <td>{{ $peminjaman->mulai }}</td>
            </tr>
            <tr>
                <th>Selesai</th>
                <td>{{ $peminjaman->selesai }}</td>
            </tr>
            <tr>
                <th>Biaya</th>
                <td>{{ $peminjaman->biaya }}</td>
            </tr>
            <tr>
                <th>Armada</th>
                <td>{{ $peminjaman->armada->merk }}</td>
            </tr>
            <tr>
                <th>Komentar Peminjam</th>
                <td>{{ $peminjaman->komentar_peminjam }}</td>
            </tr>
            <tr>
                <th>Status Pinjam</th>
                <td>{{ $peminjaman->status_pinjam }}</td>
            </tr>
        </table>
        <a href="{{ route('peminjaman.index') }}" class="btn btn-secondary">Kembali</a>
    </x-slot>
</x-layout>
