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

    <link rel="stylesheet" href="{{ asset('admindek/css/select2.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/bootstrap-multiselect.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/multi-select.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/spectrum.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/pages.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/component.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/sweetalert.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/datatables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/buttons.datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/responsive.bootstrap4.min.css') }}">




    <style>
    .blink {
        animation: blinker 1.5s step-start infinite;
        color: #1ed7b2;
    }

    @keyframes blinker {
        50% {
            opacity: 0;
        }
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        /* background-color: white; */
        color: black;
        padding: 6px 30px 6px 20px;
    }

    form input.invalid {
        border-color: #dc3545;
    }

    form .invalid-feedback {
        color: #dc3545;
        font-size: 14px;
        line-height: 21px;
        margin-top: 4px;
        text-align: left;
    }
    </style>
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
                            <img class="img-fluid" src="{{ asset('admindek/image/logolekblack.png') }}"
                                alt="Theme-Logo" />
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
                                        <span>{{ Auth::user()->prefix }}{{ Auth::user()->fname }}
                                            {{ Auth::user()->lname }}</span>
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
                                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                            </span>
                                            <span class="pcoded-mtext">หน้าหลัก</span>
                                        </a>
                                    </li>

                                    <li class="pcoded-hasmenu  active pcoded-trigger">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-settings"></i></span>
                                            <span class="pcoded-mtext">จัดสรรวอร์ด
                                                @if ($userunsub->isNotEmpty())
                                                <img src='http://oxygen.readyplanet.com/images/column_1303576852/icon0002.gif'
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
                                            <li class="active">
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
                                                    <span class="pcoded-mtext">สิทธิการรักษา</span>
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
                                                        <span class="badge badge-danger">New
                                                            {{ $userunsub->count() }}</span>
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
                                            <h5>อาจารย์แพทย์</h5>
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
                                            <li class="breadcrumb-item"><a href="#!">อาจารย์แพทย์</a> </li>
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
                                                        <h5>จำนวนอาจารย์แพทย์ทั้งหมด</h5>
                                                        <h5 style="color:red;">{{ $doctor->count() }}</h5>
                                                        <h5>คน</h5>
                                                        <button type="button" class="btn btn-primary waves-effect"
                                                            data-toggle="modal" data-target="#add-Modal"
                                                            style="float:right;margin-right:50px;">เพิ่มอาจารย์แพทย์</button>
                                                    </div>

                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="scr-vtr-dynamic"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>ชื่อ</th>
                                                                        <th>สายการรักษา</th>
                                                                        <th>ตัวเลือก</th>

                                                                    </tr>
                                                                </thead>
                                                                @if(is_null($doctor))

                                                                @else
                                                                <tbody>
                                                                    @foreach ($doctor as $listdoctor)
                                                                    <tr>
                                                                        <td>{{ $listdoctor->prefix }}{{ $listdoctor->fname }}
                                                                            {{ $listdoctor->lname }}</td>
                                                                        <td>
                                                                            @if (is_null($listdoctor->department))
                                                                            ยังไม่ระบุสายการรักษา
                                                                            @else
                                                                            {{ $listdoctor->department->name_th ?? '' }}-{{ $listdoctor->department->name_eng ?? '' }}({{ $listdoctor->department->name_abb ?? '' }})
                                                                            @endif
                                                                        </td>
                                                                        <td>

                                                                            <span data-toggle="modal"
                                                                                data-target="#editDoctor{{ $listdoctor->id }}">
                                                                                <button class="btn btn-warning"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top" title="แก้ไข">
                                                                                    <i
                                                                                        class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-white"></i>
                                                                                </button>
                                                                            </span>
                                                                            <span data-toggle="modal"
                                                                                data-target="#delDoctor{{ $listdoctor->id }}">
                                                                                <button class="btn btn-danger"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top" title="ลบ">
                                                                                    <i
                                                                                        class="feather icon-trash-2 f-w-600 f-16 text-c-white"></i>
                                                                                </button>
                                                                            </span>
                                                                        </td>
                                                                    </tr>

                                                                    <!-- /////////edit/////////// -->
                                                                    <div class="modal fade"
                                                                        id="editDoctor{{ $listdoctor->id }}"
                                                                        role="dialog" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg modal-dialog-centered"
                                                                            role="document">
                                                                            <div class="modal-content">
                                                                                <form class="form-horizontal"
                                                                                    action="{{ route('doctor.update',$listdoctor->id) }}"
                                                                                    method="post">
                                                                                    @csrf
                                                                                    {{ method_field('patch') }}
                                                                                    <div class="modal-header">
                                                                                        <h4 class="modal-title">
                                                                                            แก้ไขอาจารย์แพทย์</h4>
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                            <span
                                                                                                aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">

                                                                                        <div class="input-group mb-3">
                                                                                            <div
                                                                                                class="input-group-prepend">
                                                                                                <span
                                                                                                    class="input-group-text">ชื่ออาจารย์แพทย์</span>
                                                                                            </div>
                                                                                            <select class="form-control"
                                                                                                name="prefix"
                                                                                                id="prefix" required>

                                                                                                <option value=""
                                                                                                    style="display: none"
                                                                                                    selected>
                                                                                                    ..เลือกคำนำหน้า..
                                                                                                </option>
                                                                                                @forelse ($prefix as
                                                                                                $lprefix)
                                                                                                <option
                                                                                                    value="{{ $lprefix->prefix }}"
                                                                                                    {{ $listdoctor->prefix == $lprefix->prefix ? 'selected' : '' }}>
                                                                                                    {{ $lprefix->prefix }}
                                                                                                </option>
                                                                                                @empty

                                                                                                @endforelse
                                                                                            </select>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                name="fname" required
                                                                                                value="{{ $listdoctor->fname }}"
                                                                                                placeholder="ชื่อจริง">
                                                                                            <input type="text"
                                                                                                name="lname" required
                                                                                                value="{{ $listdoctor->lname }}"
                                                                                                class="form-control"
                                                                                                placeholder="นามสกุล">
                                                                                        </div>

                                                                                        <div
                                                                                            class="col-sm-12 col-xl-12">
                                                                                            <div class="form-group row">
                                                                                                <div class="col-sm-12">
                                                                                                    <label
                                                                                                        class="block"><i
                                                                                                            class="fa fa-user-md"></i>&nbsp;สายการักษา
                                                                                                        *</label>
                                                                                                </div>
                                                                                                <div class="col-sm-12">
                                                                                                    <select
                                                                                                        class="js-example-basic-single col-sm-12"
                                                                                                        name="dept_id"
                                                                                                        style="width:100%">
                                                                                                        <option value=""
                                                                                                            disabled
                                                                                                            style="display: none"
                                                                                                            selected>
                                                                                                            ..กรุณาเลือกสายการรักษา..
                                                                                                        </option>

                                                                                                        @if (is_null($dept))

                                                                                                        @else
                                                                                                        @foreach ($dept as $listdept)
                                                                                                        <option
                                                                                                            value="{{ $listdept->id }}"
                                                                                                            @if($listdoctor->
                                                                                                            dept_id ==
                                                                                                            $listdept->id)

                                                                                                            @php echo
                                                                                                            'selected';
                                                                                                            @endphp
                                                                                                            @endif >
                                                                                                            {{ $listdept->name_th }}
                                                                                                            -
                                                                                                            {{ $listdept->name_eng }}
                                                                                                            ({{ $listdept->name_abb }})
                                                                                                        </option>
                                                                                                        @endforeach
                                                                                                        @endif
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
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
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- //////////////////// -->

                                                                    <!-- ///////delete//////// -->
                                                                    <div class="modal fade"
                                                                        id="delDoctor{{ $listdoctor->id }}"
                                                                        tabindex="-1" role="dialog">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <form class="form-horizontal"
                                                                                    action="{{ route('doctor.destroy',$listdoctor->id) }}"
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
                                                                                            ทำการลบอาจารย์แพทย์ชื่อ</p>
                                                                                        <h5
                                                                                            style="color: red;text-align:center;padding-top:15px;">
                                                                                            {{ $listdoctor->prefix }}{{ $listdoctor->fname }}
                                                                                            {{ $listdoctor->lname }}
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
            <div class="modal fade" id="add-Modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form class="form-horizontal" action="{{ route('doctor.store') }}" method="post" id="main"
                            name="main">
                            @csrf
                            <input type="hidden" name="ward" value="{{ $ward->id }}">
                            <div class="modal-header">
                                <h4 class="modal-title">
                                    เพิ่มอาจารย์แพทย์</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">ชื่ออาจารย์แพทย์</span>
                                    </div>
                                    <select class="form-control" name="prefix" id="prefix" required>

                                        <option value="" style="display: none" selected>
                                            ..เลือกคำนำหน้า..
                                        </option>
                                        @forelse ($prefix as $lprefix)
                                        <option value="{{ $lprefix->prefix }}">
                                            {{ $lprefix->prefix }}
                                        </option>
                                        @empty

                                        @endforelse
                                    </select>
                                    <input type="text" class="form-control" name="fname" required
                                        placeholder="ชื่อจริง">
                                    <input type="text" name="lname" required class="form-control" placeholder="นามสกุล">
                                </div>
                                <div class="col-sm-12 col-xl-12">
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <label class="block"><i class="fa fa-user-md"></i>&nbsp;สายการักษา
                                                *</label>
                                        </div>
                                        <div class="col-sm-12">
                                            <select class="js-example-basic-single-modal col-sm-12" name="dept_id"
                                                style="width:100%">
                                                <option value="" disabled selected>
                                                    เลือกสายการรักษา</option>
                                                @if (is_null($dept))

                                                @else
                                                @foreach ($dept as $item)
                                                <option value="{{ $item->id }}">
                                                    {{ $item->name_th }}
                                                    -
                                                    {{ $item->name_eng }}
                                                    ({{ $item->name_abb }})
                                                </option>
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
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
                src="{{ asset('admindek/js/jquery.slimscroll.js') }}">
            </script>

            <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/modernizr.js') }}">
            </script>
            <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/css-scrollbars.js') }}">
            </script>

            <script type="d28fd8086f5eb18f81d8672a-text/javascript"
                src="{{ asset('admindek/js/select2.full.min.js') }}">
            </script>

            <script type="d28fd8086f5eb18f81d8672a-text/javascript"
                src="{{ asset('admindek/js/bootstrap-multiselect.js') }}">
            </script>
            <script type="d28fd8086f5eb18f81d8672a-text/javascript"
                src="{{ asset('admindek/js/jquery.multi-select.js') }}">
            </script>
            <script type="d28fd8086f5eb18f81d8672a-text/javascript"
                src="{{ asset('admindek/js/jquery.quicksearch.js') }}">
            </script>

            <script src="{{ asset('admindek/js/underscore-min.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript">
            </script>
            <script src="{{ asset('admindek/js/moment.min.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript">
            </script>
            {{-- <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/validate.js') }}" >
            </script> --}}



            <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/sweetalert.min.js') }}">
            </script>
            <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/modal.js') }}"></script>

            <script src="{{ asset('admindek/js/jquery.datatables.min.js') }}"
                type="d28fd8086f5eb18f81d8672a-text/javascript">
            </script>
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
                type="d28fd8086f5eb18f81d8672a-text/javascript">
            </script>
            <script src="{{ asset('admindek/js/buttons.html5.min.js') }}"
                type="d28fd8086f5eb18f81d8672a-text/javascript">
            </script>
            <script src="{{ asset('admindek/js/datatables.bootstrap4.min.js') }}"
                type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
            <script src="{{ asset('admindek/js/datatables.responsive.min.js') }}"
                type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
            <script src="{{ asset('admindek/js/responsive.bootstrap4.min.js') }}"
                type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
            <script src="{{ asset('js/clock.js') }}"></script>
            <script src="{{ asset('admindek/js/data-table-custom.js') }}"
                type="d28fd8086f5eb18f81d8672a-text/javascript">
            </script>
            <script src="{{ asset('admindek/js/classie.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript">
            </script>
            <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/modaleffects.js') }}">
            </script>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

            <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/select2-custom.js') }}">
            </script>
            <script src="{{ asset('admindek/js/pcoded.min.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript">
            </script>
            <script src="{{ asset('admindek/js/vertical-layout.min.js') }}"
                type="d28fd8086f5eb18f81d8672a-text/javascript">
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
            <script src="{{ asset('admindek/js/rocket-loader.min.js') }}"
                data-cf-settings="d28fd8086f5eb18f81d8672a-|49" defer=""></script>


</body>

</html>