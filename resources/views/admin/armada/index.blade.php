@section('title', 'Armada')
@section('page_blank', 'Armada')
<x-layout>
    <x-slot name="page_name">Halaman Armada</x-slot>
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

        <a href="{{ route('armada.create') }}" class="btn btn-primary">+ Tambah Armada</a>

        <table class="table table-bordered">
            <thead>
                <tr class="table-success">
                    <th>Id</th>
                    <th>Merk</th>
                    <th>Nopol</th>
                    <th>Tahun Beli</th>
                    <th>Deskripsi</th>
                    <th>Jenis Kendaraan</th>
                    <th>Kapasitas Kursi</th>
                    <th>Rating</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list_armada as $armada)
                    <tr>
                        <td>{{ $armada->id }}</td>
                        <td>{{ $armada->merk }}</td>
                        <td>{{ $armada->nopol }}</td>
                        <td>{{ $armada->thn_beli }}</td>
                        <td>{{ $armada->deskripsi }}</td>
                        <td>{{ $armada->jenisKendaraan->nama }}</td>
                        <td>{{ $armada->kapasitas_kursi }}</td>
                        <td>{{ $armada->rating }}</td>
                        <td>
                            <a href="{{ route('armada.show', $armada->id) }}" class="btn btn-primary">
                                <i class="far fa-eye"></i> Lihat
                            </a>
                            <a href="{{ route('armada.edit', $armada->id) }}" class="btn btn-warning">
                                <i class="far fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('armada.destroy', $armada->id) }}" class="d-inline" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apa anda yakin ingin menghapus data?')">
                                    <i class="far fa-trash-alt"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-slot>
</x-layout>
