<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4" style="background: linear-gradient(to right, #40217F, #8C52FF); color: white;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="color: white;">
        <img src="{{('../admin/dist/img/logo2.png')}}" alt="Forbit Logo" class="brand-image img-circle>
        <span class="brand-text font-weight-light">Tender Care</span>
    </a>
  
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{('../admin/dist/img/logo2.png')}}" class="img-circle elevation-2" alt="User Image">
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
                            <a href="{{ url('index1') }}" class="nav-link" style="color: white;">
                                <i class="nav-icon fa-solid fa-table-cells-large" style="color: white;"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('member') }}" class="nav-link" style="color: white;">
                                <i class="fas fa-user nav-icon" style="color: white;"></i>
                                <p>Data Member</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('medic') }}" class="nav-link" style="color: white;">
                                <i class="fa-solid fa-file-pen nav-icon" style="color: white;"></i>
                                <p>Data Tenaga Medis</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color: white;">
                        <i class="nav-icon fa-regular fa-calendar-days" style="color: white;"></i>
                        <p>Data Rekam Medis</p>
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li>
                            <a href="{{ asset('health-record') }}" class="dropdown-item text-white">
                                <i class="fa-solid fa-notes-medical me-2"></i> Health Record
                            </a>
                        </li>
                        <li>
                            <a href="{{ asset('growth') }}" class="dropdown-item text-white">
                                <i class="fa-solid fa-chart-line me-2"></i> Growth Record
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('scheduleTask') }}" class="nav-link" style="color: white;">
                        <i class="fa-solid fa-file-pen nav-icon" style="color: white;"></i>
                        <p>Data Artikel</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('conseling') }}" class="nav-link" style="color: white;">
                        <i class="fa-solid fa-file-pen nav-icon" style="color: white;"></i>
                        <p>Data Konseling</p>
                    </a>
                </li>
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  