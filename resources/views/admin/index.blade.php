@section('title', 'Dashboard')
@section('page_blank', '')

<x-layout>
    <x-slot name="page_name">Halaman Beranda</x-slot>
    <x-slot name="page_content">
        <div class="row">
            {{-- Displaying Jenis Kendaraan --}}
            @if (Auth::user()->role == 'admin')
                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="{{ route('jenis_kendaraan.index') }}" style="text-decoration: none; color: inherit;">
                        <div class="card bg-primary text-white shadow h-100">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                            Jumlah <br>Jenis Kendaraan</div>
                                        <div class="h5 mb-0 font-weight-bold">{{ $query_jenis_kendaraan['jumlah'] }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-car fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endif

            {{-- Displaying Armada --}}
            @if (Auth::user()->role == 'admin')
                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="{{ route('armada.index') }}" style="text-decoration: none; color: inherit;">
                        <div class="card bg-warning text-white shadow h-100">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                            Jumlah <br>Armada</div>
                                        <div class="h5 mb-0 font-weight-bold">{{ $query_armada['jumlah'] }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-folder-open fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endif

            {{-- Displaying Peminjaman --}}
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ route('peminjaman.index') }}" style="text-decoration: none; color: inherit;">
                    <div class="card bg-success text-white shadow h-100">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">
                                        Jumlah <br>Peminjaman</div>
                                    <div class="h5 mb-0 font-weight-bold">{{ $query_peminjaman['jumlah'] }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-handshake fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Displaying Pembayaran --}}
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ route('pembayaran.index') }}" style="text-decoration: none; color: inherit;">
                    <div class="card bg-danger text-white shadow h-100">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">
                                        Jumlah <br>Pembayaran</div>
                                    <div class="h5 mb-0 font-weight-bold">{{ $query_pembayaran['jumlah'] }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-money-bill-wave fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </x-slot>
</x-layout>
