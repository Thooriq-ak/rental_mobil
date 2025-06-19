@section('title', 'Peminjaman')
@section('page_blank', 'Peminjaman')
<x-layout>
    <x-slot name="page_name">Halaman Peminjaman</x-slot>
    <x-slot name="page_content">

        @if (session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('pesan') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if (session('update'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('update') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if (session('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('delete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <a href="{{ route('peminjaman.create') }}" class="btn btn-primary">+ Tambah Peminjaman</a>

        <table class="table table-bordered">
            <thead>
                <tr class="table-success">
                    <th>Id</th>
                    <th>Nama Peminjam</th>
                    <th>KTP Peminjam</th>
                    <th>Keperluan Pinjam</th>
                    <th>Mulai</th>
                    <th>Selesai</th>
                    <th>Biaya</th>
                    <th>Armada</th>
                    <th>Komentar Peminjam</th>
                    <th>Status Pinjam</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list_peminjaman as $peminjaman)
                    <tr>
                        <td>{{ $peminjaman->id }}</td>
                        <td>{{ $peminjaman->nama_peminjam }}</td>
                        <td>{{ $peminjaman->ktp_peminjam }}</td>
                        <td>{{ $peminjaman->keperluan_pinjam }}</td>
                        <td>{{ $peminjaman->mulai }}</td>
                        <td>{{ $peminjaman->selesai }}</td>
                        <td>{{ $peminjaman->biaya }}</td>
                        <td>{{ $peminjaman->armada->merk }}</td>
                        <td>{{ $peminjaman->komentar_peminjam }}</td>
                        <td>{{ $peminjaman->status_pinjam }}</td>
                        <td>
                            <a href="{{ route('peminjaman.show', $peminjaman->id) }}" class="btn btn-primary">
                                <i class="far fa-eye"></i> Lihat
                            </a>
                                @auth
                                @if (Auth::user()->role == 'admin')
                            <a href="{{ route('peminjaman.edit', $peminjaman->id) }}" class="btn btn-warning">
                                <i class="far fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('peminjaman.destroy', $peminjaman->id) }}" class="d-inline" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apa anda yakin ingin menghapus data?')">
                                    <i class="far fa-trash-alt"></i> Hapus
                                </button>
                                @endif
                                @endauth
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-slot>
</x-layout>
