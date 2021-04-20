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
                            หน้าแรก
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <svg xmlns='http://www.w3.org/2000/svg' class='nav-icon' viewBox='0 0 512 512'
                            style="max-width: 26px">
                            <title>Medkit</title>
                            <rect x='32' y='112' width='448' height='352' rx='48' ry='48' fill='none'
                                stroke='currentColor' stroke-linejoin='round' stroke-width='32' />
                            <path d='M144 112V80a32 32 0 0132-32h160a32 32 0 0132 32v32M256 208v160M336 288H176'
                                fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round'
                                stroke-width='32' />
                        </svg>
                        <p class="ml-2">
                            วอร์ด
                            <i class="right fas fa-angle-left"></i>
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if (is_null($lward))

                        @else
                        @foreach ($lward as $lwa)
                        <li class="nav-item">
                            <a href="/ward/{{ $lwa->id }}" class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6" /></svg>
                                <p style="font-size: 16px">{{ $lwa->ward_name }}</p>
                                {{-- @if (is_null($lreserve))
                                    
                                @else
                                @foreach ($lreserve as $lre)
                                @if ($lwa->id == $lre->ward_id)
                                @for ($i = 0; $i < $lre->ward_id.length ; $i++)
                                    {{ $i++ }}
                                @endfor
                                <span class="badge badge-info right">{{ $i  }}</span>
                                @endif
                                @endforeach
                                
                                @endif --}}
                            </a>
                        </li>
                        @endforeach

                        @endif

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/reserve" class="nav-link">
                        <i class="nav-icon fas fa-book-medical"></i>
                        <p class="ml-2">
                            แบบฟอร์มจองเตียง
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/user" class="nav-link">
                        <i class="nav-icon fas fa-hospital-user"></i>
                        <p class="ml-2">
                            สมาชิก
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>