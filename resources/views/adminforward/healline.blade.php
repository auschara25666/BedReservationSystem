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
                        <a href="/index-admin">
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
                                            <a href="/manageprofile-admin">
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
                                        <a href="/index-admin" class="waves-effect waves-dark">
                                            <span class="pcoded-micon">
                                                <i class="feather icon-home"></i>
                                            </span>
                                            <span class="pcoded-mtext">หน้าหลัก</span>
                                        </a>
                                    </li>

                                    <li class="pcoded-hasmenu active pcoded-trigger">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-settings"></i></span>
                                            <span class="pcoded-mtext">จัดสรรวอร์ด
                                                @if ($userunsub->isNotEmpty())
                                                <img
                                                src='http://oxygen.readyplanet.com/images/column_1303576852/icon0002.gif'
                                                width='25px' />
                                            @endif
                                            </span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="/managebed" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">เตียง</span>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="/healline" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">สายการรักษา</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="/managedoctor" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">อาจารย์แพทย์</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="/manageoperative" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">หัตถการ</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="/healrole" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">สิทธิ์การรักษา</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="/userwards" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">สมาชิก(ผู้ใช้งานของวอร์ด)</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="/manageuserwards" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">รออนุมัติสิทธิ์ 
                                                        @if ($userunsub->isNotEmpty())
                                                        <span class="badge badge-danger">New  {{ $userunsub->count() }}</span>
                                                         @endif
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
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
                                            <h5>สายการรักษา</h5>
                                            <span>เพิ่ม / ลบ / แก้ไข</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="/index-admin"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">สายการรักษา</a> </li>
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
                                                        <h5>จำนวนสายการรักษาทั้งหมด</h5>
                                                        <h5 style="color:red;">{{ $dept->count() }}</h5>
                                                        <h5>สาย</h5>
                                                        <button type="button" class="btn btn-primary waves-effect"
                                                            data-toggle="modal" data-target="#addModal"
                                                            style="float:right;margin-right:50px;">เพิ่มสายการรักษา</button>
                                                    </div>

                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="scr-vtr-dynamic"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>สายการรักษา (Thai)</th>
                                                                        <th>สายการรักษา (Eng)</th>
                                                                        <th>สายการรักษา (ตัวย่อ)</th>
                                                                        <th>ตัวเลือก</th>
                                                                    </tr>
                                                                </thead>
                                                                @if(is_null($dept))

                                                                @else
                                                                <tbody>
                                                                    @foreach ($dept as $listdept)
                                                                    <tr>
                                                                        <td>{{ $listdept->name_th }}</td>
                                                                        <td>{{ $listdept->name_eng }}</td>
                                                                        <td>{{ $listdept->name_abb }}</td>
                                                                        <td>

                                                                            <span  data-toggle="modal" data-target="#editDept{{ $listdept->id }}" >
                                                                                <button class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="แก้ไข">
                                                                                    <i
                                                                                    class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-white"></i>
                                                                                </button>
                                                                            </span>

                                                                            <span  data-toggle="modal" data-target="#delDept{{ $listdept->id }}" >
                                                                                <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="ลบ">
                                                                                    <i
                                                                                    class="feather icon-trash-2 f-w-600 f-16 text-c-white"></i>
                                                                                </button>
                                                                            </span>
                                                                        </td>
                                                                    </tr>



                                                                    <!-- /////////edit/////////// -->
                                                                    <div class="modal fade"
                                                                        id="editDept{{ $listdept->id }}" tabindex="-1"
                                                                        role="dialog">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <form
                                                                                    action="{{ route('department.update',$listdept->id) }}"
                                                                                    method="post">
                                                                                    @csrf
                                                                                    {{ method_field('patch') }}
                                                                                    <div class="modal-header">
                                                                                        <h4 class="modal-title">
                                                                                            แก้ไขสายการรักษา</h4>
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                            <span
                                                                                                aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <div class="form-group">
                                                                                            <label for="name_th"
                                                                                                class="control-label"><b>สายการรักษา-ไทย
                                                                                                    :</b></label>
                                                                                            <input class="form-control"
                                                                                                type="text"
                                                                                                name="name_th"
                                                                                                value="{{ $listdept->name_th }}"
                                                                                                required>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="name_eng"
                                                                                                class="control-label"><b>สายการรักษา-Eng
                                                                                                    :</b></label>
                                                                                            <input class="form-control"
                                                                                                type="text"
                                                                                                name="name_eng"
                                                                                                value="{{ $listdept->name_eng }}"
                                                                                                required>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="name_abb"
                                                                                                class="control-label"><b>สายการรักษา-ตัวย่อ
                                                                                                    :</b></label>
                                                                                            <input class="form-control"
                                                                                                type="text"
                                                                                                name="name_abb"
                                                                                                value="{{ $listdept->name_abb }}"
                                                                                                required>
                                                                                        </div>

                                                                                        <input type="hidden" name="ward"
                                                                                            value="{{ $ward->id }}">



                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="submit"
                                                                                            class="btn btn-success waves-effect waves-light ">บันทึก</button>
                                                                                        <button type="button"
                                                                                            class="btn btn-primary waves-effect "
                                                                                            data-dismiss="modal">Close</button>
                                                                                    </div>
                                                                                </form> <!-- /.form -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- //////////////////// -->

                                                                    <!-- ///////delete//////// -->
                                                                    <div class="modal fade"
                                                                        id="delDept{{ $listdept->id }}" tabindex="-1"
                                                                        role="dialog">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <form
                                                                                    action="{{ route('department.destroy',$listdept->id) }}"
                                                                                    method="post">
                                                                                    @csrf
                                                                                    {{ method_field('delete') }}
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
                                                                                            ทำการลบสายการรักษาชื่อ </p>
                                                                                        <h5 style="color: red;text-align:center;padding-top:15px;">
                                                                                            {{ $listdept->name_th }} -
                                                                                            {{ $listdept->name_eng }}
                                                                                            ({{ $listdept->name_abb }})
                                                                                        </h5>

                                                                                        <input type="hidden" name="ward"
                                                                                            value="{{ $ward->id }}">
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
                                                                                                        class="btn waves-effect waves-light btn-danger btn-square btn-block">ลบ</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </form> <!-- /.form -->
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
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form class="form-horizontal" action="{{ route('department.store') }}" method="post">
                            @csrf

                            <input type="hidden" name="ward" value="{{ $ward->id }}">
                            <div class="modal-header">
                                <h4 class="modal-title">
                                    เพิ่มสายการรักษา</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="form-group">
                                    <label for="name_th" class="control-label">สายการรักษา-ไทย
                                        :</label>
                                    <input type="text" class="form-control" name="name_th" id="name_th" required />
                                </div>
                                <div class="form-group">
                                    <label for="name_eng" class="control-label">สายการรักษา-Eng
                                        :</label>
                                    <input type="text" class="form-control" name="name_eng" id="name_eng" required />
                                </div>
                                <div class="form-group">
                                    <label for="name_abb" class="control-label">สายการรักษา-ตัวย่อ
                                        :</label>
                                    <input type="text" class="form-control" name="name_abb" id="name_abb" required />
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success waves-effect waves-light ">บันทึก</button>
                                <button type="button" class="btn btn-primary waves-effect "
                                    data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- //////////////////// -->

            <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/jquery.min.js') }}">
            </script>
            <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/jquery-ui.min.js') }}">
            </script>
            <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/popper.min.js') }}">
            </script>
            <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/bootstrap.min.js') }}">
            </script>

            <script src="{{ asset('admindek/js/waves.min.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript">
            </script>

            <script type="d28fd8086f5eb18f81d8672a-text/javascript"
                src="{{ asset('admindek/js/jquery.slimscroll.js') }}"></script>

            <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/modernizr.js') }}">
            </script>
            <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/css-scrollbars.js') }}">
            </script>

            <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/sweetalert.min.js') }}">
            </script>
            <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/modal.js') }}"></script>

            <script src="{{ asset('admindek/js/jquery.datatables.min.js') }}"
                type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
            <script src="{{ asset('admindek/js/datatables.buttons.min.js') }}"
                type="d28fd8086f5eb18f81d8672a-text/javascript">
            </script>
            <script src="{{ asset('admindek/js/jszip.min.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript">
            </script>
            <script src="{{ asset('admindek/js/pdfmake.min.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript">
            </script>
            <script src="{{ asset('admindek/js/vfs_fonts.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript">
            </script>
            <script src="{{ asset('admindek/js/buttons.print.min.js') }}"
                type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
            <script src="{{ asset('admindek/js/buttons.html5.min.js') }}"
                type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
            <script src="{{ asset('admindek/js/datatables.bootstrap4.min.js') }}"
                type="d28fd8086f5eb18f81d8672a-text/javascript">
            </script>
            <script src="{{ asset('admindek/js/datatables.responsive.min.js') }}"
                type="d28fd8086f5eb18f81d8672a-text/javascript">
            </script>
            <script src="{{ asset('admindek/js/responsive.bootstrap4.min.js') }}"
                type="d28fd8086f5eb18f81d8672a-text/javascript">
            </script>

            <script src="{{ asset('admindek/js/data-table-custom.js') }}"
                type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
            <script src="{{ asset('admindek/js/classie.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript">
            </script>
            <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/modaleffects.js') }}">
            </script>


            <script src="{{ asset('admindek/js/pcoded.min.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript">
            </script>
            <script src="{{ asset('admindek/js/vertical-layout.min.js') }}"
                type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
            <script src="{{ asset('admindek/js/jquery.mcustomscrollbar.concat.min.js') }}"
                type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
            <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/script.js') }}"></script>
            <script src="{{ asset('js/clock.js') }}"></script>
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

            <script src="{{ asset('admindek/js/rocket-loader.min.js') }}"
                data-cf-settings="d28fd8086f5eb18f81d8672a-|49" defer="">
            </script>
</body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/dt-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:09:26 GMT -->

</html>
