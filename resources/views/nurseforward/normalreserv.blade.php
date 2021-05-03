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
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/sweetalert.css') }}"> --}}

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/datatables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/buttons.datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/responsive.bootstrap4.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/widget.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/pages.css') }}">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('admindek/css/select2.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/bootstrap-multiselect.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/multi-select.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/bootstrap-datetimepicker.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/daterangepicker.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/datedropper.min.css') }}" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>

    <style>
        .img_border {
            border: 2px solid red;
            background-color: red;
        }

        img:hover {
            cursor: pointer;
        }

        .select2-selection--single {
            color: black;
            /* height: auto; */
        }

        .datepicker td,
        .datepicker th {
            width: 2.5rem;
            height: 2.5rem;
            font-size: 0.85rem;
        }

        .datepicker {
            margin-bottom: 3rem;
        }

        .ui-timepicker-container {
            z-index: 1151 !important;
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
                        <a href="/index-nurse">
                            <img class="img-fluid" src="{{ asset('admindek/image/logolek.png') }}" alt="Theme-Logo" />
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
                                <span class="font-weight-bold" style="color: blue;">{{ Auth::user()->ward->ward_name ?? '' }}</span>

                            </li>

                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <!-- <img src="{{ asset('admindek/jpg/avatar-4.jpg') }}" class="img-radius"
                                            alt="User-Profile-Image"> -->
                                            <span>{{ Auth::user()->prefix }}{{ Auth::user()->fname }} {{ Auth::user()->lname }}</span>

                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                                        <li>
                                            <a href="/manageprofile-nurse">
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
                                        <a href="/index-nurse" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                            </span>
                                            <span class="pcoded-mtext">หน้าหลัก</span>
                                        </a>
                                    </li>

                                    <li class="pcoded-hasmenu active pcoded-trigger">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-settings"></i></span>
                                            <span class="pcoded-mtext">จัดสรรเตียง
                                                @if ($reserve->isNotEmpty())
                                            <img
                                            src='http://oxygen.readyplanet.com/images/column_1303576852/icon0002.gif'
                                            width='25px' />
                                        @endif
                                            </span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="/bedstatus-nurse" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">สถานะเตียง</span>
                                                </a>
                                            </li>
                                            {{-- <li class="active">
                                                <a href="/quotareserv-nurse" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">รายการจอง (โควต้า)</span>
                                                </a>
                                            </li> --}}
                                            <li class="active">
                                                <a href="/normalreserv-nurse" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">รายการจอง 
                                                        @if ($reserve->isNotEmpty())
                                                        <span class="badge badge-danger">New  {{ $reserve->count() }}</span>
                                            @endif                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="/approvedreserv-nurse" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">รายการอนุมัติแล้ว</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>


                                    <li class="">
                                        <a href="/formreserv-nurse" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-calendar"></i></i></span>
                                            <span class="pcoded-mtext">จองเตียง</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a href="/managepatient-nurse" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-user"></i></i></span>
                                            <span class="pcoded-mtext">ผู้ป่วย</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="https://drive.google.com/file/d/1KhzcQ1E2gUUNkEM8fULuYqdxhJ8Efn6G/view?usp=sharing" target="_blank" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-book"></i></i></span>
                                            <span class="pcoded-mtext">คู่มือใช้งานระบบ</span>
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
                                            <h5>รายการจอง</h5>
                                            <span>อนุมัติ / แก้ไข / ยกเลิก</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">รายการจอง</a> </li>
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

                                                    <div class="card-header"></div>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-xl-6">
                                                            <div class="input-group" style="margin-left: 20px;">

                                                                <div class="input-group-prepend">
                                                                    <span
                                                                        class="input-group-text text-bold">ค้นรายการของวันที่</span>
                                                                </div>
                                                                <input type="text" id="dropper-default" name="min"
                                                                    class="employee-search-input-normal datepicker form-control"
                                                                    style="max-width: 200px"
                                                                    placeholder="เลือกวันที่..."
                                                                    data-date-format="dd/mm/yyyy" title="เลือกวันที่"
                                                                    autocomplete="off" />


                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <div class="input-group-prepend">
                                                                    <span
                                                                        class="input-group-text text-bold">ค้นหาตามสิทธิ์การรักษา</span>
                                                                </div>
                                                                <select
                                                                    class="employee-search-select-normal form-control col-sm-12">
                                                                    <option value="" selected>แสดงทั้งหมด</option>
                                                                    @if (is_null($pay))
                                                                    @else
                                                                    @foreach ($pay as $lpay)
                                                                    <option value="{{ $lpay->name }}">{{ $lpay->name }} </option>
                                                                    @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="scr-vtr-dynamic-normal"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width: 15px;">ลำดับ</th>
                                                                        <th style="width: 15px;">รหัส HN ผู้ป่วย</th>
                                                                        <th>ชื่อผู้ป่วย</th>
                                                                        <th>หัตถการ</th>
                                                                        <th>สิทธิการรักษา</th>
                                                                        <th>หน่วยงานที่จอง</th>
                                                                        <th style="width: 10%;">วันที่ต้องการเข้าเตียง
                                                                        </th>
                                                                        <th style="width: 15px;">สถานะ</th>
                                                                        <th style="width: 10%;">ตัวเลือก</th>

                                                                    </tr>
                                                                </thead>
                                                                @if(is_null($reserve))

                                                                @else
                                                                <tbody>

                                                                    @php $number = 1; @endphp

                                                                    @foreach ($reserve as $lreserve)
                                                                    @php
                                                                    $user = \App\User::find($lreserve->created_user_id);
                                                                    @endphp

                                                                    <tr class="text-center">

                                                                        <td>{{ $number }}</td>
                                                                        <td>{{ $lreserve->patient->hn }}</td>
                                                                        <td>{{ $lreserve->patient->prefix }}{{ $lreserve->patient->fname }} {{ $lreserve->patient->lname }}</td>
                                                                        <td>{{ $lreserve->operative->opt_name }}</td>
                                                                        <td>{{ $lreserve->name }}</td>
                                                                        <td>{{ $user->ward->ward_name }}</td>
                                                                        <td>{{
                                                                            \Carbon\Carbon::parse($lreserve->reserve_booking)->format('d/m/Y')
                                                                            }}
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <small class="badge badge-warning"
                                                                                style="font-size:15px;">{{
                                                                                $lreserve->reserve_status }}</small>
                                                                        </td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <button type="button"
                                                                                    class="btn btn-primary dropdown-toggle"
                                                                                    data-toggle="dropdown">
                                                                                    เมนู
                                                                                </button>
                                                                                <div class="dropdown-menu">
                                                                                    @if (\Carbon\Carbon::now() < \Carbon\Carbon::parse($lreserve->reserve_booking))
                                                                                    @else
                                                                                    <a class="dropdown-item"
                                                                                    data-toggle="modal"
                                                                                    href="#modal-xl_{{ $lreserve->id }}">จัดสรรเตียง</a>
                                                                                    @endif
                                                                                        <a class="dropdown-item"
                                                                                            data-toggle="modal"
                                                                                            href="#canReserve{{ $lreserve->id }}">ยกเลิกรายการจอง</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <!-- <td>
                                                                            <div class="btn-group text-center">
                                                                                @if (\Carbon\Carbon::now() <
                                                                                    \Carbon\Carbon::parse($lreserve->
                                                                                    reserve_booking))
                                                                                    <span data-toggle="modal"
                                                                                        data-target="">
                                                                                        <button class="btn btn-disabled disabled waves-effect waves-light"
                                                                                            data-toggle="tooltip"
                                                                                            data-placement="top"
                                                                                            title="ไม่สามารถจัดสรรเตียงได้! เนื่องจากยังไม่ถึงเวลา">
                                                                                            จัดสรรเตียง
                                                                                        </button>
                                                                                    </span>
                                                                                    @else
                                                                                    <span data-toggle="modal"
                                                                                        data-target="#modal-xl_{{ $lreserve->id }}">
                                                                        <button class="btn btn-success"
                                                                            data-toggle="tooltip" data-placement="top"
                                                                            title="จัดสรรเตียง">
                                                                            จัดสรรเตียง
                                                                        </button>
                                                                        </span>
                                                                        @endif

                                                                        <span data-toggle="modal"
                                                                            data-target="#canReserve{{ $lreserve->id }}">
                                                                            <button class="btn btn-danger"
                                                                                data-toggle="tooltip"
                                                                                data-placement="top"
                                                                                title="ไม่สามารถจัดสรรได้! เนื่องจากเตียงไม่ว่าง">
                                                                                ไม่สามารถจัดสรรได้
                                                                            </button>
                                                                        </span>
                                                                        </div>

                                                                        </td> -->
                                                                     </tr>

                                                        @php $number = $number + 1; @endphp

                                                        {{-- MODAL SHOW BED --}}

                                                        <div class="modal fade" id="modal-xl_{{ $lreserve->id }}"
                                                            role="dialog">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">
                                                                            เลือกเตียงที่ต้องการจัดสรร</h4>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>

                                                                    <div class="modal-body">

                                                                        <div class="card bg-light mb-3"
                                                                            style="max-width: 25rem;display: block;margin: auto;">
                                                                            <div class="card-body">
                                                                                <p class="card-text"
                                                                                    style="font-size: 18px;">
                                                                                    <strong>ชื่อผู้ป่วย
                                                                                        :</strong>
                                                                                        {{ $lreserve->patient->prefix }}{{ $lreserve->patient->fname }} {{ $lreserve->patient->lname }}
                                                                                </p>
                                                                                <p class="card-text"
                                                                                    style="font-size: 18px;">
                                                                                    <strong>หัตถการ
                                                                                        :</strong>
                                                                                    {{ $lreserve->operative->opt_name }}
                                                                                </p>
                                                                                <p class="card-text"
                                                                                    style="font-size: 18px;">
                                                                                    <strong>อาจารย์แพทย์เจ้าของไข้
                                                                                        :</strong>
                                                                                        {{ $lreserve->doctor->prefix }}{{ $lreserve->doctor->fname }} {{ $lreserve->doctor->lname }}
                                                                                </p>
                                                                                <p class="card-text"
                                                                                    style="font-size: 18px;">
                                                                                    <strong>วันที่ต้องการเข้าเตียง
                                                                                        :</strong>
                                                                                    {{ \Carbon\Carbon::parse($lreserve->reserve_booking)->format('d/m/Y') }}
                                                                                </p>
                                                                                @php
                                                                                $i = 1;
                                                                                @endphp


                                                                            </div>
                                                                        </div>

                                                                        <form action="{{ route('event.store') }}" id="main" name="main" method="POST">
                                                                            @csrf
                                                                            <div class="card-body">
                                                                                <div class="shortcuts ml-3" style="width: 100%;height: 250px;
                                                                                    overflow-y: scroll;">
                                                                                    @if (is_null($bed))

                                                                                    @else


                                                                                    @foreach ($bed as $list)
                                                                                    @if ($list->bed_status == 'ว่าง')



                                                                                    <div class="shortcut text-center"
                                                                                        id="image_container"
                                                                                        style="font-size: 16px">

                                                                                        <img src="{{ asset('image/bedAvailable.png') }}"
                                                                                            style="max-width:90%;"
                                                                                            id="{{ $list->id }}" />
                                                                                        <span
                                                                                            class="shortcut-label">เตียง
                                                                                            {{ $list->bed_number }}</span>

                                                                                    </div>

                                                                                    @endif

                                                                                    @endforeach
                                                                                    @endif

                                                                                    <input type="hidden" name="bed_id"
                                                                                        id="bed_id" class="bed_id" value="" />

                                                                                    <input type="hidden"
                                                                                        name="reserve_id" value="{{ $lreserve->id }}" />

                                                                                </div>
                                                                                <label class="mt-3"><strong
                                                                                        style="color: red;text-decoration: underline;">หมายเหตุ</strong><strong
                                                                                        style="color: red;">*</strong>
                                                                                    (เวลาที่เข้าเตียงได้
                                                                                    หรือรายละเอียดอื่นๆเพิ่มเติม)</label>
                                                                                <div class="row">
                                                                                    <div class="col-6">
                                                                                        <div class="form-group"
                                                                                            style="width: 80%;padding-top:20px;">
                                                                                            <label>ช่วงเวลาที่ให้เข้า</label>
                                                                                            <input type="text"
                                                                                                class="form-control timepicker"
                                                                                                name="detailtime" autocomplete="off"
                                                                                                placeholder="กรุณากรอกช่วงเวลาที่เข้าได้"
                                                                                                required />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-6">
                                                                                        <div class="form-group"
                                                                                            style="width: 80%;padding-top:20px;">
                                                                                            <label>ติดต่อ (เบอร์โทรศัพท์
                                                                                                หรือ สถานที่)</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                name="detailphone"
                                                                                                value="{{ $ward->ward_phone }}"
                                                                                                required />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                                    <input type="hidden" name="ward_created"
                                                                        value="{{ $lreserve->ward_created }}">
                                                                    <div class="modal-footer justify-content-between">
                                                                        <button type="button" class="btn btn-danger"
                                                                            data-dismiss="modal">ปิด</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">บันทึก</button>
                                                                    </div>
                                                                    </form>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- /.MODAL SHOW BED -->

                                                        <div class="modal fade" id="canReserve{{ $lreserve->id }}"
                                                            role="dialog">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <form action="{{ route('reserve.destroy',$lreserve->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
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
                                                                                ยกเลิกรายการจอง
                                                                                {{ $lreserve->hn }}</p>


                                                                            <input type="hidden" name="cancel"
                                                                                value="cancel">
                                                                            <input type="hidden" name="id"
                                                                                value="{{ $lreserve->id }}">
                                                                        </div>
                                                                        <div class="card-block">
                                                                            <div class="row">
                                                                                <div class="col-lg-6 col-md-12">
                                                                                    <div class="form-group">
                                                                                        <button type="button"
                                                                                            class="btn waves-effect waves-light btn-primary btn-block"
                                                                                            data-dismiss="modal">ปิด</button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-12">
                                                                                    <div class="form-group">
                                                                                        <button type="submit"
                                                                                            class="btn waves-effect waves-light btn-danger btn-square btn-block">ตกลง</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>



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
    </div>
    </div>

    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/jquery.min.js') }}"></script>
    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/jquery-ui.min.js') }}"></script>
    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/popper.min.js') }}"></script>
    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('admindek/js/waves.min.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript"></script>

    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/jquery.slimscroll.js') }}">
    </script>

    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/modernizr.js') }}"></script>
    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/css-scrollbars.js') }}"></script>

    {{-- ///////////////////////////// --}}
    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/select2.full.min.js') }}">
    </script>

    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/bootstrap-multiselect.js') }}">
    </script>
    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/jquery.multi-select.js') }}">
    </script>
    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/jquery.quicksearch.js') }}">
    </script>

    <script src="{{ asset('admindek/js/underscore-min.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
    <script src="{{ asset('admindek/js/moment.min.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/validate.js') }}"></script>

    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/moment-with-locales.min.js') }}">
    </script>
    <script type="d28fd8086f5eb18f81d8672a-text/javascript"
        src="{{ asset('admindek/js/bootstrap-datepicker.min.js') }}"></script>
    <script type="d28fd8086f5eb18f81d8672a-text/javascript"
        src="{{ asset('admindek/js/bootstrap-datetimepicker.min.js') }}"></script>

    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/daterangepicker.js') }}">
    </script>

    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/datedropper.min.js') }}">
    </script>

    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/spectrum.js') }}"></script>
    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/jscolor.js') }}"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> --}}

    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/custom-picker.js') }}"></script>
    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/form-validation.js') }}">
    </script>
    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/select2-custom.js') }}"></script>

    <script src="http://code.jquery.com/jquery-latest.js"></script>

    {{-- ////////////////////////////////////////////////////////////////////////// --}}
    <script src="{{ asset('js/clock.js') }}"></script>
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
        type="d28fd8086f5eb18f81d8672a-text/javascript">
    </script>
    <script src="{{ asset('admindek/js/datatables.responsive.min.js') }}"
        type="d28fd8086f5eb18f81d8672a-text/javascript">
    </script>
    <script src="{{ asset('admindek/js/responsive.bootstrap4.min.js') }}"
        type="d28fd8086f5eb18f81d8672a-text/javascript">
    </script>


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
        defer="">
    </script>


    <script>
        function checkForm(form)
            {
                var errors=[];
                var errorsName=[];
             /////////////hn/////////////////
              if(form.hn.value == "") {
                errors.push("กรุณาระบุ ");
                errorsName.push("HN!");
              }
              var re = /[A-Z]{2}[0-9]{4}/;
              if(!re.test(form.hn.value)) {
               errors.push("");
               errorsName.push("HN ระบุให้ตรงตามรูปแบบ!");
              }
              ////////////////
              if(form.fname.value == "") {
                errors.push("กรุณาระบุ ");
                errorsName.push("ชื่อจริง!");
              }
              ////////////////
              if(form.lname.value == "") {
                errors.push("กรุณาระบุ ");
                errorsName.push("นามสกุล!");
              }
              ////////////////
              if(form.pa_age.value == "") {
                errors.push("กรุณาระบุ ");
                errorsName.push("อายุผู้ป่วย!");
              }
              ////////////////
              if(form.pa_sex.value == "") {
                errors.push("กรุณาระบุ ");
                errorsName.push("เพศผู้ป่วย!");
              }
              ////////////////
              if(form.pa_phone.value == "") {
                errors.push("กรุณาระบุ ");
                errorsName.push("เบอร์โทรศัพท์ผู้ป่วย!");
              }
              ////////////////
              if(form.pay.value == "") {
                errors.push("กรุณาเลือก ");
                errorsName.push("สิทธิ์การรักษา!");
              }
              ////////////////
              if(form.disease.value == "") {
                errors.push("กรุณาระบุ ");
                errorsName.push("อาการของโรค!");
              }
              ////////////////
              if(form.doctor_id.value == "") {
                errors.push("กรุณาเลือก ");
                errorsName.push("อาจารย์แพทย์!");
              }
              ////////////////
              if(form.reserve_booking.value == "") {
                errors.push("กรุณาเลือก");
                errorsName.push("วันที่จอง!");
              }
              ////////////////
              if(form.booking_name.value == "") {
                errors.push("กรุณาระบุ ");
                errorsName.push("ชื่อผู้ทำการจอง!");
              }
              ////////////////
              if(form.booking_phone.value == "") {
                errors.push("กรุณาระบุ ");
                errorsName.push("เบอร์โทรศัพท์ผู้จอง!");
              }
              ////////////////

              if(errors.length > 0){
                  var msg = "";
                  for (var i=0 ; i<errors.length ; i++){
                      msg = msg + errors[i] + errorsName[i] + "<br>";
                  }
                  swal.fire({
                        icon : 'error',
                        title : msg ,
                    })
                  return false;
              }

            }
                // return true;

function executeExample() {
        swal.fire({
            icon: "warning",
            title: "คุณแน่ใจว่าจะยกเลิก ?",
            showCancelButton: true,
            confirmButtonText: 'ใช่',
            cancelButtonText: "ยกเลิก",
            //  text: "wrong user or password",
            type: "warning",
            // timer: 2000,
        }).then((result) => {
            // Redirect the user
            if (result.isConfirmed) {
                window.location.href = "/index-chief";
            }
        });
    }


        function chkNumber(ele) {
            var vchar = String.fromCharCode(event.keyCode);
            if ((vchar < '0' || vchar > '9') && (vchar != ',')) return false;
            ele.onKeyPress = vchar;
        }

        function chkNumberAge(ele) {
            var vchar = String.fromCharCode(event.keyCode);
            if (vchar < '0' || vchar > '9') return false;
            ele.onKeyPress = vchar;
        }
    </script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type="text/javascript">
        $(document).ready(function() {
      $('.timepicker').timepicker({
             timeFormat: 'HH:mm',
             interval: 60,
            //  defaultTime: '10',
           });
    });
    </script>
</body>

</html>