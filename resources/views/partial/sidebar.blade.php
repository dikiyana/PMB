<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{asset('admin/dist/img/sepatu.png')}}" alt="AdminLTE Logo" class="brand-image img-square elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PMB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/dist/img/default_user.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            @Auth

            {{Auth::user()->name}} ({{Auth::user()->profile->umur}})
            @endauth
          </a>
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
               
                {{-- <a href="/" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  
                  <p>Dashboard</p>
                </a> --}}
              </li>

          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Table<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="/data-table" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Table</p>
              </a>
              </li>
            </ul>
          </li> --}}

          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Berita<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="/berita" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Berita</p>
              </a>
              </li>
            </ul>
          </li> --}}

          {{-- @Auth
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Kategori<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="/kategori" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kategori</p>
              </a>
              </li>
            </ul>
          </li>
          @endauth --}}

          @Auth
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Siswa<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="/siswa" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Siswa</p>
              </a>
              </li>
              <li class="nav-item">
                <a href="/agama" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ref Agama</p>
                </a>
                </li>
            </ul>
          </li>
          @endauth

          @Auth
          <li class="nav-item">
              <a href="/profile" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Profile User</p>
              </a>
              </li>

          <li class="nav-item bg-danger"> 
            <a class="nav-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
            </form>
          </li>
          @endauth

          {{-- @guest
          <li class="nav-item" bg-primary>
            <a href="/login" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Login</p>
            </a>
            
          </li>
          @endguest --}}



        </ul>
        </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
