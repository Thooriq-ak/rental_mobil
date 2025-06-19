@use(App\Models\User)

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            <span class="text-primary">Role : {{ Auth::user()->role }}</span>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
            @auth
                @if (Auth::user()->role == 'admin')
                <li class="nav-item">
                    <a href="/dashboard/jenis_kendaraan" class="nav-link">
                        <i class="fa fa-car me-2"></i>
                        <p>
                            Jenis Kendaraan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/armada" class="nav-link">
                        <i class="fa fa-folder-open me-2"></i>
                        <p>
                            Armada
                        </p>
                    </a>
                </li>
                @endif
            @endauth
            <li class="nav-item">
                <a href="/dashboard/peminjaman" class="nav-link">
                    <i class="fas fa-handshake fa-2"></i>
                    <p>
                        Peminjaman
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/dashboard/pembayaran" class="nav-link">
                    <i class="fas fa-money-bill-wave fa-2"></i>
                    <p>
                        Pembayaran
                    </p>
                </a>
            </li>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
