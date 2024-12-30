<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4" style="background: linear-gradient(180deg, #770210, #DD041E);">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="color: white;">
        <img src="{{ asset('assets/img/logo.jpg')}}" alt="Forbit Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Forbit</span>
    </a>
  
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/img/logo.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block" style="color: white;">{{ Auth::user()->name }}</a>
            </div>
        </div>
  
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw" style="color: white;"></i>
                    </button>
                </div>
            </div>
        </div>
  
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link" style="color: white;">
                                <i class="nav-icon fa-solid fa-table-cells-large" style="color: white;"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('scheduleTask') }}" class="nav-link" style="color: white;">
                                <i class="fa-solid fa-file-pen nav-icon" style="color: white;"></i>
                                <p>Daftar Tugas</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('schedule') }}" class="nav-link" style="color: white;">
                        <i class="nav-icon fa-regular fa-calendar-days" style="color: white;"></i>
                        <p>Jadwal Tugas</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  