@section('title', 'Armada')
@section('page_blank', 'Armada')
<x-layout>
    <x-slot name="page_name">Halaman Armada / Detail</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <td>1</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ $armada->id }}</td>
            </tr>
            <tr>
                <th>Merk</th>
                <td>{{ $armada->merk }}</td>
            </tr>
            <tr>
                <th>Nomor Polisi</th>
                <td>{{ $armada->nopol }}</td>
            </tr>
            <tr>
                <th>Tahun Beli</th>
                <td>{{ $armada->thn_beli }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $armada->deskripsi }}</td>
            </tr>
            <tr>
                <th>Jenis Kendaraan</th>
                <td>{{ $armada->jenisKendaraan->nama }}</td>
            </tr>
            <tr>
                <th>Kapasitas Kursi</th>
                <td>{{ $armada->kapasitas_kursi }}</td>
            </tr>
            <tr>
                <th>Rating</th>
                <td>{{ $armada->rating }}</td>
            </tr>
            <tr>
                <th>Data dibuat pada</th>
                <td>{{ $armada->created_at }}</td>
            </tr>
            <tr>
                <th>Data diupdate pada</th>
                <td>{{ $armada->updated_at }}</td>
            </tr>
        </table>
        <a href="{{ route('armada.index') }}" class="btn btn-secondary">Kembali</a>
    </x-slot>
</x-layout>
