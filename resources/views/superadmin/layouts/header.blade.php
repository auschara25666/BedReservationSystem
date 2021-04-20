<!-- Navbar -->

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->

    <ul class="navbar-nav">

        <li class="nav-item">

            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

        </li>

    </ul>

    <ul class="navbar-nav ml-auto mr-auto">
        <li class="nav-item mr-3">
            <h3>@php $month_arr=array(
                "1"=>"มกราคม",
                "2"=>"กุมภาพันธ์",
                "3"=>"มีนาคม",
                "4"=>"เมษายน",
                "5"=>"พฤษภาคม",
                "6"=>"มิถุนายน",
                "7"=>"กรกฎาคม",
                "8"=>"สิงหาคม",
                "9"=>"กันยายน",
                "10"=>"ตุลาคม",
                "11"=>"พฤศจิกายน",
                "12"=>"ธันวาคม"
              );
              $day_arr=array(
                "Sunday"=>"อาทิตย์",
                  "Monday"=>"จันทร์",
                  "Tuesday"=>"อังคาร",
                  "Wednesday"=>"พุธ",
                  "Thursday"=>"พฤหัสบดี",
                  "Friday"=>"ศุกร์",
                  "Saturday"=>"เสาร์"
            );
              
              
              echo $day_arr[date("l")]."ที่"." ".date("d")." ".$month_arr[date("n")]." ".(date("Y")+543);
              @endphp
              {{-- {{ date("l,d M y") }} --}}
            </h3>
          </li>
          <li class="nav-item">
            <h3>เวลา <span id="clock" style="color: blue"></span> น.</h3>
          </li>
      </ul>

    <!-- Right navbar links -->

    <ul class="navbar-nav ml-auto">



        <!-- Notifications Dropdown Menu -->

        <li class="nav-item dropdown">

            <a class="nav-link" data-toggle="dropdown" href="#">

                <i class="far fa-bell"></i>

                <span class="badge badge-warning navbar-badge">15</span>

            </a>

            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                <span class="dropdown-item dropdown-header">15 Notifications</span>

                <div class="dropdown-divider"></div>

                <a href="#" class="dropdown-item">

                    <i class="fas fa-envelope mr-2"></i> 4 new messages

                    <span class="float-right text-muted text-sm">3 mins</span>

                </a>

            </div>

        </li>

        <!-- end Notifications Dropdown Menu -->



        <!-- User dropdown menu -->

        <li class="nav-item dropdown">

            <a class="nav-link" data-toggle="dropdown" href="#">

                {{ Auth::user()->name }}

            </a>

            <div class="dropdown-menu">

                <a href="{{ route('logout') }}" class="dropdown-item"

                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                    <i class="feather icon-log-out"></i> ออกจากระบบ

                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                    @csrf

                </form>

            </div>

        </li>

        <!-- end User dropdown menu -->

    </ul>

  </nav>

  <!-- /.navbar -->
