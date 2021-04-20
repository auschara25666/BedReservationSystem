<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/home') }}" class="brand-link">
        <span class="brand-text font-weight-light"><img src="{{ asset('image/logo.png') }}" style="width: 100%;"></span>
      </a>


    <!-- Sidebar -->
    <div class="sidebar">


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/home" class="nav-link">
                        <i class="nav-icon fas fa-clinic-medical"></i>
                        <p class="ml-2">
                            จัดสรรวอร์ด
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/manageuser" class="nav-link">
                        <i class="nav-icon fas fa-hospital-user"></i>
                        <p class="ml-2">
                            สมาชิก (Admin วอร์ด)
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
