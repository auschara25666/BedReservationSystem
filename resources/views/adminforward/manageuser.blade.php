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

                    <!-- sidebar menu -->

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
                                            <li class="">
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
                                            <li class="active">
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
                                    <li class="">
                                                <a href="https://drive.google.com/file/d/1KhzcQ1E2gUUNkEM8fULuYqdxhJ8Efn6G/view?usp=sharing"
                                                    target="_blank" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i
                                                            class="feather icon-book"></i></i></span>
                                                    <span class="pcoded-mtext">คู่มือใช้งานระบบ</span>
                                                </a>
                                            </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- /sidebar menu -->



                    <div class="pcoded-content">
                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="fa fa-bed bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>สมาชิก(ผู้ใช้งานของ Ward)</h5>
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
                                            <li class="breadcrumb-item"><a href="#!">สมาชิก(ผู้ใช้งานของ Ward)</a> </li>
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
                                                        <h5>จำนวนสมาชิก ที่รอการยืนยันสิทธิ์</h5>
                                                        <h5 style="color:red;">{{ $userunsub->count() }}</h5>
                                                        <h5>คน</h5>
                                                    </div>
                                                    <!-- user ward -->
                                                    <div class="card-block mb-5">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="scr-vtr-dynamic"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>ชื่อ</th>
                                                                        <th>อีเมล</th>
                                                                        <th>เบอร์</th>
                                                                        <th>สังกัด</th>
                                                                        <th>ตำแหน่ง</th>
                                                                        <th>สิทธิ์</th>
                                                                        <th>สถานะ</th>
                                                                        <th>ตัวเลือก</th>

                                                                    </tr>
                                                                </thead>
                                                                @if (is_null($userunsub))

                                                                @else
                                                                <tbody>
                                                                    @foreach ($userunsub as $userlist)
                                                                    <tr>
                                                                        <td>{{ $userlist->prefix }}{{ $userlist->fname }} {{ $userlist->lname }}</td>
                                                                        <td>{{ $userlist->email }}</td>
                                                                        <td>{{ $userlist->phone }}</td>
                                                                        <td>{{ $userlist->ward->ward_name }}</td>
                                                                        <td>{{ $userlist->role->role }}</td>
                                                                        <td>{{ $userlist->permission->permission ?? 'ยังไม่กำหนดสิทธิ์'}}</td>
                                                                        <td>
                                                                            @if ($userlist->rec_status == 1)
                                                                            <span class="badge bg-success"
                                                                                style="font-size: 16px">อนุมัติแล้ว</span>
                                                                            @endif
                                                                            @if ($userlist->rec_status == 0)
                                                                            <span class="badge bg-danger"
                                                                                style="font-size: 16px">ยังไม่อนุมัติ</span>
                                                                            @endif
                                                                        </td>

                                                                        <td>
                                                                        @if ($userlist->rec_status == 1)
                                                                            <span  data-toggle="modal" data-target="#editUser{{ $userlist->id }}" >
                                                                                <button class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="เปลี่ยนสิทธิ์">
                                                                                    {{-- <i
                                                                                    class="fa fa-check f-w-600 f-16 m-r-15 text-c-white"></i> --}}
                                                                                    <span style="color:black;">เปลี่ยนสิทธิ์</span>
                                                                                </button>
                                                                            </span>

                                                                            @endif
                                                                            @if ($userlist->rec_status == 0)


                                                                                <span  data-toggle="modal" data-target="#editUser{{ $userlist->id }}" >
                                                                                    <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="อนุมัติ">
                                                                                        <i
                                                                                        class="fa fa-check f-w-600 f-16 m-r-15 text-c-white"></i>
                                                                                    </button>
                                                                                </span>
                                                                                
                                                                                @endif
                                                                                <span  data-toggle="modal" data-target="#delUser{{ $userlist->id }}" >
                                                                                    <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="ลบผู้ใช้">
                                                                                        <i
                                                                                        class="fa fa-trash f-w-600 f-16 m-r-15 text-c-white"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                            

                                                                    </tr>

                                                                    <!-- /////////edit/////////// -->
                                                                    <div class="modal fade"
                                                                        id="editUser{{ $userlist->id }}" tabindex="-1"
                                                                        role="dialog">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <form
                                                                                    action="{{ route('manage-user.update',$userlist->id) }}"
                                                                                    method="post">
                                                                                    @csrf
                                                                                    {{ method_field('patch') }}
                                                                                    <div class="modal-header">
                                                                                        <h4 class="modal-title">
                                                                                            ข้อมูลสมาชิก(รออนุมัติสิทธิ์)
                                                                                        </h4>
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                            <span
                                                                                                aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>

                                                                                    <div class="modal-body">
                                                                                        <div class="card">
                                                                                            <div class="card-body text-center">
                                                                                                <p class="card-text"
                                                                                                    style="font-size: 20px;">
                                                                                                    <strong>ชื่อ
                                                                                                        :</strong>
                                                                                                        {{ $userlist->prefix }}{{ $userlist->fname }} {{ $userlist->lname }}
                                                                                                </p>
                                                                                                <p class="card-text"
                                                                                                    style="font-size: 20px;">
                                                                                                    <strong>อีเมล
                                                                                                        :</strong>
                                                                                                        {{ $userlist->email }}
                                                                                                </p>
                                                                                                <p class="card-text"
                                                                                                    style="font-size: 20px;">
                                                                                                    <strong>เบอร์
                                                                                                        :</strong>
                                                                                                        {{ $userlist->phone }}
                                                                                                </p>
                                                                                                <p class="card-text"
                                                                                                    style="font-size: 20px;">
                                                                                                    <strong>สถานะ
                                                                                                        :</strong>
                                                                                                        {{ $userlist->role->role }}
                                                                                                </p>
                                                                                                <p class="card-text"
                                                                                                    style="font-size: 20px;">
                                                                                                    <strong>สังกัด
                                                                                                        :</strong>
                                                                                                        {{ $userlist->ward->ward_name }}
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                        {{-- <div class="form-group">
                                                                                            <label for="confirm" class="cols-sm-2 control-label">วอร์ด
                                                                                                <label style="color: red;">*</label></label>
                                                                                            <div class="cols-sm-10">
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-append" style="margin-right: -1px;margin-left: 0px;">
                                                                                                        <div class="input-group-text">
                                                                                                            <span class="fas fa-user-md"></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <select name="ward" id="ward" class="form-control" required>
                                                                                                        <option style="display: none" value="">...เลือกสังกัด...</option>
                                                                                                        @forelse ($wardall as $lward)
                                                                                                        <option value="{{ $lward->id }}" {{ $userlist->ward_id == $lward->id ? 'selected' : '' }}>{{ $lward->ward_name }}</option>
                                                                                                        @empty

                                                                                                        @endforelse
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div> --}}
                                                                                        {{-- <div class="form-group">
                                                                                            <label for="phone" class="control-label"><b>ตำแหน่ง
                                                                                                    :</b></label>
                                                                                            <select class="form-control" name="role">
                                                                                                <option value="" style="display: none">
                                                                                                    ..ตำแหน่ง..
                                                                                                </option>
                                                                                                @forelse ($role as
                                                                                                $lrole)
                                                                                                <option value="{{ $lrole->id }}" {{ $userlist->role_id == $lrole->id ? 'selected' : '' }}>
                                                                                                    {{ $lrole->role }}
                                                                                                </option>
                                                                                                @empty

                                                                                                @endforelse
                                                                                            </select>
                                                                                        </div> --}}
                                                                                        <div class="form-group">
                                                                                            <p class="text-center">
                                                                                                <label for="phone" class="control-label" style="font-size: 20px;font-weight: bold"><b>สิทธิ์การใช้งาน</b></label>
                                                                                            </p>
                                                                                            
                                                                                                    <p></p>
                                                                                                    <label  style="color: black;background-color:#d1eaf5;">
                                                                                                        <ul>
                                                                                                            <li>1.Admin : ผู้ดูแลระบบวอร์ด</li>
                                                                                                            <li>2.ChiefNurse : พยาบาลหัวหน้าเวร สามารถจัดดสรรเตียงได้ สามารถออกรายงานได้</li>
                                                                                                            <li>3.Nurse(Ward) : พยาบาลวอร์ดและผู้ช่วยพยาบาลวอร์ด สามารถจัดสรรเตียงได้</li>
                                                                                                            <li>4.User : แพทย์ พยาบาลและผู้ช่วยพยาบาลทั่วไป (ผู้จอง)</li>
                                                                                                        </ul>
                                                                                                    </label>
                                                                                            <select class="form-control" name="permission" required>
                                                                                                <option value="" style="display: none">
                                                                                                    ..สิทธิ์การใช้งาน..
                                                                                                </option>
                                                                                                @forelse ($permission as
                                                                                                $lper)
                                                                                                <option value="{{ $lper->id }}" {{ $userlist->permission_id == $lper->id ? 'selected' : '' }}>
                                                                                                    {{ $lper->permission }}
                                                                                                </option>
                                                                                                @empty

                                                                                                @endforelse
                                                                                            </select>
                                                                                        </div>
                                                                                        <input type="hidden" name="rec_status" value="1">
                                                                                        {{-- <div class="form-group">
                                                                                            <label for="phone"
                                                                                                class="control-label"><b>สถานะ
                                                                                                    :</b></label>
                                                                                            <select class="form-control"
                                                                                                name="rec_status">
                                                                                                <option value="0"
                                                                                                    {{ $userlist->rec_status == '0' ? 'selected' : ''}}>
                                                                                                    ยังไม่อนุมัติ
                                                                                                </option>
                                                                                                <option value="1"
                                                                                                    {{ $userlist->rec_status == '1' ? 'selected' : ''}}>
                                                                                                    อนุมัติแล้ว</option>
                                                                                            </select>
                                                                                        </div> --}}
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="submit"
                                                                                            class="btn btn-success waves-effect waves-light ">อนุมัติ</button>
                                                                                        <button type="button"
                                                                                            class="btn btn-primary waves-effect "
                                                                                            data-dismiss="modal">ปิด</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- //////////////////// -->

                                                                    <!-- ///////delete//////// -->
                                                                    <div class="modal fade"
                                                                        id="delUser{{ $userlist->id }}" tabindex="-1"
                                                                        role="dialog">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <form class="form-horizontal"
                                                                                    action="{{ route('manage-user.destroy',$userlist->id) }}"
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
                                                                                            ทำการลบผู้ใช้งานชื่อ </p>
                                                                                        <h5 style="color: red;text-align:center;padding-top:15px;">
                                                                                            {{ $userlist->prefix }}{{ $userlist->fname }} {{ $userlist->lname }}
                                                                                        </h5>

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
                                                    <!-- /user ward -->
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
            <script src="{{ asset('js/clock.js') }}"></script>
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

<script>
    function chkNumber(ele) {
    var vchar = String.fromCharCode(event.keyCode);
    if ((vchar < '0' || vchar > '9') && (vchar != '.')) return false;
    ele.onKeyPress = vchar;
}
</script>

<!-- Mirrored from colorlib.com/polygon/admindek/default/dt-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:09:26 GMT -->

</html>
