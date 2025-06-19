@section('title', 'Kendaraan')
@section('page_blank', 'Kendaraan')
<x-layout>
    <x-slot name="page_name">Halaman Kelurahan / Detail</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-success">
                <th>No</th>
                <th>Id</th>
                <th>Nama Kendaraan</th>
                <th>Data dibuat pada</th>
                <th>Data diupdate pada</th>
            </tr>
            <tr>
                <th>1</th>
                <th>{{ $jenis_kendaraan->id }}</th>
                <th>{{ $jenis_kendaraan->nama }}</th>
                <th>{{ $jenis_kendaraan->created_at }}</th>
                <th>{{ $jenis_kendaraan->updated_at }}</th>
            </tr>
        </table>
    </x-slot>
</x-layout>