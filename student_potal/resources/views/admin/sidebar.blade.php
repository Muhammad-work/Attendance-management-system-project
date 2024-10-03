{{-- @extends('admin.layout.app') --}}

@section('sidebar')
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="{{ asset('img/logo.png')}}" style="width: 75%;" class="d-block m-auto">
            {{-- <span class="brand-text font-weight-light">AdminLTE 3</span> --}}
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            </div>

            <!-- SidebarSearch Form -->
            {{-- <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div> --}}

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="{{ route('dashbord') }}" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('view_user')  }}" class="nav-link">
                            <i class="nav-icon fa-solid fa-users"></i>
                            <p>
                                All Users
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('viewLeaveTable') }}" class="nav-link">
                            <i class="nav-icon fa-solid fa-message"></i>
                            <p>
                                Leaves
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('viewAttendanceTable') }}" class="nav-link">
                            <i class="nav-icon fa-solid fa-clipboard-user"></i>
                            <p>
                                All Attendance
                            </p>
                        </a>
                    </li>
                  
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
@endsection
