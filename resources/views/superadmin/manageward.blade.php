<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:07:52 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>ระบบจองเตียงผู้ป่วยออนไลน์ โรงพยาบาลศรีนครินทร์</title>


    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="{{ asset('image/Emblem.png') }}" sizes="32x32" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admindek/css/waves.min.css') }}" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/feather.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/themify-icons.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/icofont.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/font-awesome-n.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/component.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/sweetalert.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/datatables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/buttons.datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/responsive.bootstrap4.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/widget.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/pages.css') }}">
</head>

<body onload="startTime()">

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="/index-superadmin">
                            <img class="img-fluid" src="{{ asset('admindek/image/logolekblack.png') }}" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu icon-toggle-right"></i>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left ">
                            <li>
                                <div style="font-size:16px;">

                                    @php $month_arr=array(
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

                                    echo $day_arr[date("l")]."ที่"." ".date("d")." ".$month_arr[date("n")]."
                                    ".(date("Y")+543);
                                    @endphp
                                    เวลา &nbsp;<span id="clock" style="color: blue"></span>&nbsp; น.
                                </div>
                            </li>
                        </ul>

                        <ul class="nav-right">
                            <li class="header-notification">
                                {{-- <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-red">5</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="admindek/jpg/avatar-4.jpg"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="admindek/jpg/avatar-3.jpg"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="admindek/jpg/avatar-4.jpg"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div> --}}
                            </li>

                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        {{-- <img src="{{ asset('admindek/jpg/avatar-4.jpg') }}" class="img-radius"
                                            alt="User-Profile-Image"> --}}
                                            <span>{{ Auth::user()->prefix }}{{ Auth::user()->fname }} {{ Auth::user()->lname }}</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                                        <li>
                                            <a href="/manageprofile-superadmin">
                                                <i class="feather icon-user"></i> ข้อมูลผู้ใช้
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="feather icon-log-out"></i> ออกจากระบบ
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <nav class="pcoded-navbar">
                        <div class="nav-list">
                            <div class="pcoded-inner-navbar main-menu">
                                <div class="pcoded-navigation-label">Menu</div>
                                <ul class="pcoded-item pcoded-left-item">

                                    <li class="">
                                        <a href="/index-superadmin" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                            </span>
                                            <span class="pcoded-mtext">หน้าหลัก</span>
                                        </a>
                                    </li>

                                    <li class="active">
                                        <a href="/manageward" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-calendar"></i></i></span>
                                            <span class="pcoded-mtext">จัดสรรวอร์ด</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a href="/manageadmin" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-calendar"></i></i></span>
                                            <span class="pcoded-mtext">สมาชิก (Admin ของวอร์ด)</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>



                    <div class="pcoded-content">
                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="fa fa-bed bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>จัดสรร Ward</h5>
                                            <span>เพิ่ม / ลบ / แก้ไข</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="/index-superadmin"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">จัดสรร Ward</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                @if ($errors->any())
                                                <div class="alert alert-danger background-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div><br />
                                                @endif

                                                @if (session()->has('success'))
                                                <div class="alert alert-success background-success">
                                                    {{ session()->get('success') }}
                                                </div><br />
                                                @endif
                                                <div class="card">

                                                    <div class="card-header">
                                                        <h5>จัดสรร Ward</h5>
                                                        <button type="button" class="btn btn-primary waves-effect"
                                                            data-toggle="modal" data-target="#add-Modal"
                                                            style="float:right;margin-right:50px;">เพิ่ม Ward</button>
                                                    </div>

                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="scr-vtr-dynamic"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>วอร์ด</th>
                                                                        <th>เตียง</th>
                                                                        <th>แพทย์</th>
                                                                        <th>หัตถการ</th>
                                                                        <th>เบอร์ภายนอก</th>
                                                                        <th>เบอร์ภายใน</th>
                                                                        <th>แก้ไข</th>

                                                                    </tr>
                                                                </thead>
                                                                @if (is_null($ward))
                                                                @else
                                                                <tbody>
                                                                    @foreach ($ward as $list)
                                                                    @php
                                                                        $bed = \App\Bed::where('ward_id',$list->id)->get();
                                                                        $doctor = \App\Doctor::where('ward_id',$list->id)->get();
                                                                        $opt = \App\Operative::where('ward_id',$list->id)->get();
                                                                    @endphp
                                                                    <tr>
                                                                        <td style="font-size: 20px;color:#1c2951;">

                                                                            {{ $list->ward_name }}

                                                                        </td>
                                                                        <td>{{ $bed->count() }}</td>
                                                                        <td>{{ $doctor->count() }}</td>
                                                                        <td>{{ $opt->count() }}</td>
                                                                        <td>{{ $list->ward_phone ?? '' }}
                                                                        <td>{{ $list->ward_phoneext ?? '' }}
                                                                        </td>
                                                                        <td class="text-center">
                                                                            
                                                                            <span data-toggle="modal"
                                                                                data-target="#editphone{{ $list->id }}">
                                                                                <button class="btn btn-warning"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    title="แก้ไขเบอร์วอร์ด">
                                                                                    <i
                                                                                        class="icon feather icon-phone f-w-600 f-16 m-r-15 text-c-white"></i>
                                                                                </button>
                                                                            </span>
                                                                        </td>
                                                                    </tr>

                                                                    <!-- edit ward phone -->
                                                                    <div class="modal fade" id="editphone{{ $list->id }}" tabindex="-1" role="dialog">
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content">
                                                                                <form action="/editphone" method="post">
                                                                                    @csrf
                                                                                    <div class="modal-body">
                                                                                        <h3 style="text-align:center;padding-top:15px;font-weight:bold;">แก้ไขวอร์ด <span style="color: red;">{{ $list->ward_name }}</span></h3>
                                                                                        <div class="input-group mb-3 input-group-sm">
                                                                                            <div class="input-group-prepend">
                                                                                              <span class="input-group-text">ชื่อวอร์ด</span>
                                                                                           </div>
                                                                                           <input type="text" name="ward_name" class="form-control" readonly required value="{{ $list->ward_name }}">
                                                                                         </div>
                                                                                        <div class="input-group mb-3 input-group-sm">
                                                                                            <div class="input-group-prepend">
                                                                                              <span class="input-group-text">เบอร์ภายนอก</span>
                                                                                           </div>
                                                                                           <input type="text" name="phone" class="form-control" required placeholder="กรุณากรอกเบอร์วอร์ด" value="{{ $list->ward_phone }}">
                                                                                         </div>
                                                                                        <div class="input-group mb-3 input-group-sm">
                                                                                            <div class="input-group-prepend">
                                                                                              <span class="input-group-text">เบอร์ภายใน</span>
                                                                                           </div>
                                                                                           <input type="text" name="phoneext" class="form-control" required placeholder="กรุณากรอกเบอร์วอร์ด" value="{{ $list->ward_phoneext }}">
                                                                                         </div>
                                                                                        <input type="hidden" name="id"
                                                                                        value="{{ $list->id }}">
                                                                                    </div>
                                                                                    <div class="card-block">
                                                                                        <div class="row">
                                                                                            <div
                                                                                                class="col-lg-6 col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn waves-effect waves-light btn-primary btn-block"
                                                                                                        data-dismiss="modal">ยกเลิก</button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-lg-6 col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <button
                                                                                                        type="submit"
                                                                                                        class="btn waves-effect waves-light btn-success btn-square btn-block">บันทึก</button>
                                                                                                </div>
                                                                                            </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /edit ward phone -->

                                                                    <!-- ///////delete//////// -->
                                                                    <div class="modal fade" id="delWard{{ $list->id }}"
                                                                        tabindex="-1" role="dialog">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">

                                                                                <div class="modal-body">
                                                                                    <div
                                                                                        style="display: flex;justify-content: center;align-items: center;padding-top:20px;">
                                                                                        <img src="admindek/png/warning.png"
                                                                                            style="width:40%;height:auto;" />
                                                                                    </div>
                                                                                    <h3
                                                                                        style="text-align:center;padding-top:15px;font-weight:bold;">
                                                                                        ARE YOU SURE ?</h3>
                                                                                    <p
                                                                                        style="text-align:center;padding-top:15px;">
                                                                                        คุณต้องการลบ Ward :
                                                                                        {{ $list->ward_name }} ?</p>

                                                                                </div>
                                                                                <form method="POST"
                                                                                    action="{{ route('ward.destroy',$list->id) }}">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <input type="hidden" name="cancel"
                                                                                        value="cancel">
                                                                                    <input type="hidden" name="id"
                                                                                        value="{{ $list->id }}">
                                                                                    <div class="card-block">
                                                                                        <div class="row">
                                                                                            <div
                                                                                                class="col-lg-6 col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn waves-effect waves-light btn-primary btn-block"
                                                                                                        data-dismiss="modal">ยกเลิก</button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-lg-6 col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <button
                                                                                                        type="submit"
                                                                                                        class="btn waves-effect waves-light btn-danger btn-square btn-block">ลบ</button>
                                                                                                </div>
                                                                                            </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                        </div>
                                                    </div>
                                                    <!-- ///////////////// -->
                                                    @endforeach
                                                    </tbody>
                                                    @endif
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="styleSelector">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /////////add/////////// -->
    <div class="modal fade" id="add-Modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="{{ route('ward.store') }}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">
                            เพิ่ม Ward</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="ward_name" class="control-label">ชื่อวอร์ด
                                :</label>
                            <input type="text" class="form-control" name="ward_name" id="ward_name" required />
                        </div>
                        <div class="form-group">
                            <label for="ward_phone" class="control-label">เบอร์ภายนอก
                                :</label>
                            <input type="text" class="form-control" name="ward_phone" id="ward_phone" required />
                        </div>
                        <div class="form-group">
                            <label for="ward_phoneext" class="control-label">เบอร์ภายใน
                                :</label>
                            <input type="text" class="form-control" name="ward_phoneext" id="ward_phoneext" required />
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success waves-effect waves-light ">บันทึก</button>
                        <button type="button" class="btn btn-primary waves-effect " data-dismiss="modal">ปิด</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- //////////////////// -->


    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/jquery.min.js') }}"></script>
    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/jquery-ui.min.js') }}"></script>
    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/popper.min.js') }}"></script>
    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('admindek/js/waves.min.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript"></script>

    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/jquery.slimscroll.js') }}">
    </script>

    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/modernizr.js') }}"></script>
    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/css-scrollbars.js') }}"></script>

    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/sweetalert.min.js') }}"></script>
    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/modal.js') }}"></script>

    <script src="{{ asset('admindek/js/jquery.datatables.min.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript">
    </script>
    <script src="{{ asset('admindek/js/datatables.buttons.min.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript">
    </script>
    <script src="{{ asset('admindek/js/jszip.min.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
    <script src="{{ asset('admindek/js/pdfmake.min.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
    <script src="{{ asset('admindek/js/vfs_fonts.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
    <script src="{{ asset('admindek/js/buttons.print.min.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript">
    </script>
    <script src="{{ asset('admindek/js/buttons.html5.min.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript">
    </script>
    <script src="{{ asset('admindek/js/datatables.bootstrap4.min.js') }}"
        type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
    <script src="{{ asset('admindek/js/datatables.responsive.min.js') }}"
        type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
    <script src="{{ asset('admindek/js/responsive.bootstrap4.min.js') }}"
        type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
    <script src="{{ asset('js/clock.js') }}"></script>
    <script src="{{ asset('admindek/js/data-table-custom.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript">
    </script>
    <script src="{{ asset('admindek/js/classie.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/modaleffects.js') }}"></script>


    <script src="{{ asset('admindek/js/pcoded.min.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
    <script src="{{ asset('admindek/js/vertical-layout.min.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript">
    </script>
    <script src="{{ asset('admindek/js/jquery.mcustomscrollbar.concat.min.js') }}"
        type="d28fd8086f5eb18f81d8672a-text/javascript">
    </script>
    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/script.js') }}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
        type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
    <script type="d28fd8086f5eb18f81d8672a-text/javascript">
        window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>

    <script src="{{ asset('admindek/js/rocket-loader.min.js') }}" data-cf-settings="d28fd8086f5eb18f81d8672a-|49"
        defer=""></script>
</body>


<!-- Mirrored from colorlib.com/polygon/admindek/default/dt-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:09:26 GMT -->

</html>