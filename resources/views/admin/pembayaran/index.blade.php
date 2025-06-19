@section('title', 'Pembayaran')
@section('page_blank', 'Pembayaran')
<x-layout>
    <x-slot name="page_name">Halaman Pembayaran</x-slot>
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

        <a href="{{ route('pembayaran.create') }}" class="btn btn-primary">+ Tambah Pembayaran</a>

        <table class="table table-bordered">
            <thead>
                <tr class="table-success">
                    <th>Id</th>
                    <th>Tanggal</th>
                    <th>Jumlah Bayar</th>
                    <th>Peminjaman Id</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pembayaran as $bayar)
                    <tr>
                        <td>{{ $bayar->id }}</td>
                        <td>{{ $bayar->tanggal }}</td>
                        <td>{{ $bayar->jumlah_bayar }}</td>
                        <td>{{ $bayar->peminjaman->nama_peminjam }}</td>
                        <td>
                            <a href="{{ route('pembayaran.show', $bayar->id) }}" class="btn btn-primary">
                                <i class="far fa-eye"></i> Lihat
                            </a>
                            @auth
                            @if (Auth::user()->role == 'admin')
                            <a href="{{ route('pembayaran.edit', $bayar->id) }}" class="btn btn-warning">
                                <i class="far fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('pembayaran.destroy', $bayar->id) }}" class="d-inline" method="POST">
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
