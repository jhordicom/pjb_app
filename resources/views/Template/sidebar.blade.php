<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{route('dashboard')}}" class="brand-link">
    <img src="{{asset('gambar/pjb.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 10">
    <span class="brand-text font-weight-light">Beranda</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="nav-icon fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @if (auth()->user()->level!='user')
        
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link {{ Route::currentRouteNamed('beranda') ? 'active' : '' }}">
            <i class="nav-icon fas fa-folder"></i>
            <p>
              MENU MANAJEMEN
              <i class="right fas fa-angle-left nav-item has-treeview menu-open"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item ">
              <a href="{{route('data-pegawai')}}" class="nav-link {{ Route::currentRouteNamed('data-pegawai') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-alt"></i>
                <p>DATA PEGAWAI</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('data-jabatan')}}" class="nav-link {{ Route::currentRouteNamed('data-jabatan') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-tie"></i>
                <p>DATA JABATAN</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('data-bidang')}}" class="nav-link {{ Route::currentRouteNamed('data-bidang') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-tag"></i>
                <p>DATA BIDANG</p>
              </a>
            </li>

          </ul>
          @endif
        <li class="nav-item menu-open">
          <a href="#" class="nav-link {{ Route::currentRouteNamed('beranda') ? 'active' : '' }}">
            <i class="nav-icon fas fa-folder"></i>
            <p>
              DATA PPK
              <i class="#"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('data-sertifikasi')}}" class="nav-link {{ Route::currentRouteNamed('data-sertifikasi') ? 'active' : '' }}">
                <i class="nav-icon far fa-address-book"></i>
                <p>DATA SERTIFIKASI</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('data-workshop')}}" class="nav-link {{ Route::currentRouteNamed('data-workshop') ? 'active' : '' }}">
                <i class="nav-icon far fa-address-book"></i>
                <p>DATA WORKSHOP</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('data-pelatihan')}}" class="nav-link {{ Route::currentRouteNamed('data-pelatihan') ? 'active' : '' }}">
                <i class="nav-icon far fa-address-book"></i>
                <p>DATA PELATIHAN</p>
              </a>
            </li>
          </ul>

        </li>
        <ul class="nav nav-treeview">
        </ul>
        <li class="nav-item menu-open">
          <a href="#" class="nav-link {{ Route::currentRouteNamed('beranda') ? 'active' : '' }}">
            <i class="nav-icon fas fa-folder"></i>
            <p>
              TENTANG PERUSAHAAN
              <i class="#"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('struktur')}}" class="nav-link {{ Route::currentRouteNamed('struktur') ? 'active' : '' }}">
                <i class="nav-icon fas fa-sitemap"></i>
                <p>STRUKTUR ORGANISASI</p>
              </a>
            </li>
          </ul>
        </li>
        <ul class="nav nav-treeview">
        </ul>
        <li class="nav-item">
          <a href="{{route('login')}}" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Logout

            </p>
          </a>
        </li>
      </ul>
    </nav>
  </div>

</aside>