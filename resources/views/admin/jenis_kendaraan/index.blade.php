@section('title', 'Kendaraan')
@section('page_blank', 'Kendaraan')
<x-layout>
    <x-slot name="page_name">Halaman Jenis Kendaraan</x-slot>
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

        <a href="{{ route('jenis_kendaraan.create') }}" class="btn btn-primary">+ Tambah Jenis Kendaraan</a>

        <table class="table table-bordered">
            <thead>
                <tr class="table-success">
                    <th>Id</th>
                    <th>Nama Kendaraan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list_jenis_kendaraan as $jenis_kendaraan)
                    <tr>
                        <td>{{ $jenis_kendaraan->id }}</td>
                        <td>{{ $jenis_kendaraan->nama }}</td>
                        <td>
                            <a href="{{ route('jenis_kendaraan.show', $jenis_kendaraan->id) }}" class="btn btn-primary">
                                <i class="far fa-eye"></i> Lihat
                            </a>
                            <a href="{{ route('jenis_kendaraan.edit', $jenis_kendaraan->id) }}" class="btn btn-warning">
                                <i class="far fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('jenis_kendaraan.destroy', $jenis_kendaraan->id) }}" class="d-inline" method="POST">
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
