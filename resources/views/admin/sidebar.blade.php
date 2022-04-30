<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard.index') }}" class="brand-link">
      <img src="{{ asset('images/logo_azisten_white.png') }}" alt="AdminLTE Logo" class="brand-image elevation-3"
           style="opacity: .8">
      {{-- <span class="brand-text font-weight-light">AdminLTE 3</span> --}}
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      {{-- <div class="pb-3 mt-3 mb-3 user-panel d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.dashboard.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tabel Transaksi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.cari_kos.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pencarian Kos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.pesan_galon.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemesanan Galon</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.pesan_catering.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemesanan Catering</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.pesan_alat_kos.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemesanan Alat Kos</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tabel Data Kos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.kos.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.afiliasi.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pemilik Kos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.afiliasi.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Tipe Kos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.afiliasi.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Fasilitas Kos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.afiliasi.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kategori Kos</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tabel Data Kampus
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.college.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Perguruan Tinggi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.campus.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kampus</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tabel Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.customer.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.afiliasi.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Afiliator</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tabel Kupon
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.coupon.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kupon</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.coupon_redeem.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kupon Terpakai</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tabel Antrian
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.antrian_galon.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Antrian Galon</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav nav-item">
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button class="nav-link" type="submit">
                <i class="fas fa-sign-out-alt"></i>
                <p>Logout</p>
              </button>
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>