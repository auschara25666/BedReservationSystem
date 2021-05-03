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
                        <a href="/index-user">
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

                            </li>

                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">

                                        <span>{{ Auth::user()->prefix }}{{ Auth::user()->fname }}
                                            {{ Auth::user()->lname }}</span>

                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                                        <li>
                                            <a href="/manageprofile-user">
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
                                        <a href="/index-user" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                            </span>
                                            <span class="pcoded-mtext">หน้าหลัก</span>
                                        </a>
                                    </li>

                                    <li class="pcoded-hasmenu active pcoded-trigger">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                                            <span class="pcoded-mtext">รายการจองเตียง</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="active">
                                                <a href="/reserve-user" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">รายการจอง</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="/approvedreserv-user" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">รายการอนุมัติแล้ว</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="">
                                        <a href="/formreserv-user" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-calendar"></i></i></span>
                                            <span class="pcoded-mtext">จองเตียง</span>
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
                                            <span>แก้ไข / ยกเลิก</span>
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
                                                                <input type="text" id="dropper-user" name="min"
                                                                    class="employee-search-input-normal datepicker form-control"
                                                                    style="max-width: 200px"
                                                                    placeholder="เลือกวันที่..."
                                                                    data-date-format="dd/mm/yyyy" title="เลือกวันที่">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card-block">
                                                        <div style="display: flex;
                                                        justify-content: center;
                                                        align-items: center;">
                                                        <span class="badge badge-warning" style="font-size: 18px;color: black;">หากต้องการแก้ไขข้อมูลการจอง ให้ทำการยกเลิกรายการเก่าของท่าน แล้วทำการจองเข้ามาใหม่</span>
                                                        </div>
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
                                                                        <th>ผู้จอง</th>
                                                                        <th style="width: 10%;">ตัวเลือก</th>

                                                                    </tr>
                                                                </thead>
                                                                @if(is_null($reserve))

                                                                @else
                                                                <tbody>

                                                                    @php $number = 1; @endphp

                                                                    @foreach ($reserve as $lreserve)

                                                                    <tr class="text-center">

                                                                        <td>{{ $number }}</td>
                                                                        <td>{{ $lreserve->patient->hn }}</td>
                                                                        <td>{{ $lreserve->patient->prefix }}{{ $lreserve->patient->fname }}
                                                                            {{ $lreserve->patient->lname }}</td>
                                                                        <td>{{ $lreserve->operative->opt_name }}</td>
                                                                        <td>{{ $lreserve->name }}</td>
                                                                        <td>{{ $lreserve->ward->ward_name }}</td>
                                                                        <td>{{
                                                                            \Carbon\Carbon::parse($lreserve->reserve_booking)->format('d/m/Y')
                                                                            }}
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <small class="badge badge-warning"
                                                                                style="font-size:15px;">{{
                                                                                $lreserve->reserve_status }}</small>
                                                                        </td>
                                                                        <td>{{ $lreserve->user->prefix }}{{ $lreserve->user->fname }} {{ $lreserve->user->lname }}</td>
                                                                        <td>
                                                                            <div class="btn-group text-center">
                                                                                
                                                                                
                                                                                <!-- <span data-toggle="modal"
                                                                                    data-target="#">
                                                                                    <button class="btn btn-warning"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top"
                                                                                        title="กำลังแก้ไขส่วนนี้ ยังใช้งานไม่ได้">
                                                                                        แก้ไข
                                                                                    </button>
                                                                                </span> -->

                                                                                <span data-toggle="modal"
                                                                                    data-target="#canReserve{{ $lreserve->id }}">
                                                                                    <button class="btn btn-danger"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top"
                                                                                        title="ยกเลิกรายการจอง">
                                                                                        <i class="feather icon-x"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </div>

                                                                        </td>
                                                                    </tr>

                                                                    @php $number = $number + 1; @endphp



                                                                    <div class="modal fade"
                                                                        id="canReserve{{ $lreserve->id }}"
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


                                                                                        <input type="hidden"
                                                                                            name="cancel"
                                                                                            value="cancel">
                                                                                        <input type="hidden" name="id"
                                                                                            value="{{ $lreserve->id }}">
                                                                                    </div>
                                                                                    <div class="card-block">
                                                                                        <div class="row">
                                                                                            <div
                                                                                                class="col-lg-6 col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn waves-effect waves-light btn-primary btn-block"
                                                                                                        data-dismiss="modal">ปิด</button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-lg-6 col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <button
                                                                                                        type="submit"
                                                                                                        class="btn waves-effect waves-light btn-danger btn-square btn-block">ตกลง</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    {{-- editReserve --}}
                                                                    <div class="modal fade"
                                                                        id="editReserve{{ $lreserve->id }}"
                                                                        role="dialog">
                                                                        <div class="modal-dialog modal-lg"
                                                                            role="document" style="max-width: 1000px;">
                                                                            <div class="modal-content">


                                                                                <form role="form" class="main" id="main"
                                                                                    action="{{ route('reserve.update',$lreserve->id) }}"
                                                                                    method="post">
                                                                                    @csrf
                                                                                    {{ method_field('patch') }}
                                                                                    <div class="modal-header">
                                                                                        <h4 class="modal-title"><i
                                                                                                class="fa fa-edit"></i>
                                                                                            แก้ไขรายการจอง
                                                                                        </h4>
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close"><span
                                                                                                aria-hidden="true">&times;</span></button>
                                                                                    </div>

                                                                                    <div class="card-body">

                                                                                        <h4 class="sub-title"
                                                                                            style="font-size:16px;font-weight:bold;">
                                                                                            ข้อมูลผู้ป่วย</h4>

                                                                                        <div class="row">
                                                                                            
                                                                                            <div
                                                                                                class="col-sm-12 col-xl-12">
                                                                                                <div
                                                                                                    class="form-group row">
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <label
                                                                                                            class="block"><i
                                                                                                                class="fa fa-qrcode"></i>&nbsp;เลขบัตรประจำตัว
                                                                                                            (HN)
                                                                                                            *</label>&nbsp;<label
                                                                                                            style="color:red;">ตัวอย่าง
                                                                                                            : HN1234 (6
                                                                                                            ตัว)</label>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control" readonly
                                                                                                            name="hn"
                                                                                                            id="hn"
                                                                                                            placeholder="ระบุ HN"
                                                                                                            maxlength="6"
                                                                                                            value="{{ $lreserve->patient->hn }}">
                                                                                                        <span
                                                                                                            id="messages"></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--  -->

                                                                                            <div
                                                                                                class="col-sm-12 col-xl-12">
                                                                                                <div
                                                                                                    class="form-group row">
                                                                                                    
                                                                                                    <div
                                                                                                        class="col-sm-6 col-xl-4">
                                                                                                        <div
                                                                                                            class="col-sm-14">
                                                                                                            <label
                                                                                                                class="block"><i
                                                                                                                    class="fa fa-user"></i>&nbsp;คำนำหน้า
                                                                                                                (Prefix)
                                                                                                                *</label>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-sm-14">
                                                                                                            <select name="prefix" id="prefix" class="form-control" disabled>
                                                                                                                <option value="" selected disabled>..เลือกคำนำหน้า..</option>
                                                                                                                @forelse ($prefix as $lprefix)
                                                                                                                    <option value="{{ $lprefix->prefix }}" {{ $lprefix->prefix == $lreserve->patient->prefix ? 'selected' : '' }}>{{ $lprefix->prefix }}</option>
                                                                                                                @empty
                                                                                                                    
                                                                                                                @endforelse
                                                                                                            </select>
                                                                                                            <span
                                                                                                                id="messages"></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-sm-6 col-xl-4">
                                                                                                        <div
                                                                                                            class="col-sm-14">
                                                                                                            <label
                                                                                                                class="block"><i
                                                                                                                    class="fa fa-user"></i>&nbsp;ชื่อผู้ป่วย
                                                                                                                (Firstname)
                                                                                                                *</label>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-sm-14">
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                class="form-control" readonly
                                                                                                                name="fname"
                                                                                                                id="fname"
                                                                                                                placeholder="ระบุชื่อผู้ป่วย"
                                                                                                                value="{{ $lreserve->patient->fname }}">
                                                                                                            <span
                                                                                                                id="messages"></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-sm-6 col-xl-4">
                                                                                                        <div
                                                                                                            class="col-sm-14">
                                                                                                            <label
                                                                                                                class="block"><i
                                                                                                                    class="fa fa-user"></i>&nbsp;นามสกุลผู้ป่วย
                                                                                                                (Lastname)
                                                                                                                *</label>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-sm-14">
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                class="form-control" readonly
                                                                                                                name="lname"
                                                                                                                id="lname"
                                                                                                                placeholder="ระบุนามสกุลผู้ป่วย"
                                                                                                                value="{{ $lreserve->patient->lname }}">
                                                                                                            <span
                                                                                                                id="messages"></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- </div> -->
                                                                                            <!--  -->
                                                                                            {{-- <div class="row"> --}}
                                                                                            <div
                                                                                                class="col-sm-12 col-xl-3">
                                                                                                <div
                                                                                                    class="form-group row">
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <label
                                                                                                            class="block"><i
                                                                                                                class="fa fa-user"></i>&nbsp;วันเกิดผู้ป่วย
                                                                                                            (Date of birth)
                                                                                                            *</label>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <input
                                                                                                            id="dropper-age"
                                                                                                            class="form-control required"
                                                                                                            type="text"
                                                                                                            placeholder="เลือกวันเกิดผู้ป่วย"
                                                                                                            readonly
                                                                                                            name="pa_age"
                                                                                                            value="{{ \Carbon\Carbon::parse($lreserve->patient->birthday)->format('d/m/Y') }}"
                                                                                                            data-date-format="dd/mm/yyyy"
                                                                                                            autocomplete="off" onchange="getDateAge(this.value)"/>
                                                                                                        <span
                                                                                                            id="messages"></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-12 col-xl-3">
                                                                                                <div class="form-group row">
                                                                                                    <div class="col-sm-12">
                                                                                                        <label class="block"><i
                                                                                                                class="fa fa-user"></i>&nbsp;อายุ (ปี)
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-sm-4 age_div">
        
                                                                                                        <input 
                                                                                                            class="form-control"
                                                                                                            type="text" id="age"
                                                                                                            readonly
                                                                                                            autocomplete="off" />
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-sm-12 col-xl-6">
                                                                                                <div
                                                                                                    class="form-group row">
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <label
                                                                                                            class="block"><i
                                                                                                                class="fa fa-phone"></i>&nbsp;เบอร์โทรศัพท์ผู้ป่วย
                                                                                                            (Phone)
                                                                                                            *</label>&nbsp;<label
                                                                                                            style="color:red;">(หากต้องการระบุหลายเบอร์ให้ใช้
                                                                                                            ,
                                                                                                            คั่น)</label>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            name="pa_phone"
                                                                                                            id="pa_phone"
                                                                                                            placeholder="ระบุเบอร์โทรศัพท์ผู้ป่วย"
                                                                                                            OnKeyPress="return chkNumber(this)"
                                                                                                            value="{{ $lreserve->patient->phone }}">
                                                                                                        <span
                                                                                                            id="messages"></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            {{-- </div> --}}

                                                                                            <!--  -->
                                                                                            <div
                                                                                                class="col-sm-12 col-xl-6">
                                                                                                <div
                                                                                                    class="form-group row">
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <label
                                                                                                            class="block"><i
                                                                                                                class="fa fa-transgender-alt "></i>&nbsp;เพศผู้ป่วย
                                                                                                            (Sex)
                                                                                                            *</label>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <select
                                                                                                            class="form-control col-sm-12"
                                                                                                            disabled
                                                                                                            name="pa_sex"
                                                                                                            id="pa_sex">
                                                                                                            <option value="" style="display: none"> เลือกเพศ </option>
                                                                                                            <option
                                                                                                                value="ชาย" {{ $lreserve->patient->sex == 'ชาย' ? 'selected' : '' }}>
                                                                                                                ชาย
                                                                                                            </option>
                                                                                                            <option value="หญิง" {{ $lreserve->patient->sex == 'หญิง' ? 'selected' : '' }}>
                                                                                                                หญิง
                                                                                                            </option>
                                                                                                        </select>
                                                                                                        <span
                                                                                                            id="messages"></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            
                                                                                            <!--  -->
                                                                                            <div
                                                                                                class="col-sm-12 col-xl-6">
                                                                                                <div
                                                                                                    class="form-group row">
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <label
                                                                                                            class="block"><i
                                                                                                                class="fa fa-plus-square"></i>&nbsp;สิทธิ์การรักษา
                                                                                                            *</label>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <select
                                                                                                            class="form-control col-sm-12"
                                                                                                            name="pay"
                                                                                                            id="pay">

                                                                                                            @if (is_null($pay))
                                                                                                            @else
                                                                                                            @foreach ($pay as $lpay)
                                                                                                            <option
                                                                                                                value="{{ $lpay->id }}"
                                                                                                                {{ $lpay->name == $lreserve->name ? 'selected' : '' }}>
                                                                                                                {{ $lpay->name }}
                                                                                                            </option>
                                                                                                            @endforeach
                                                                                                            @endif
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--  -->
                                                                                            <div
                                                                                                class="col-sm-12 col-xl-6">
                                                                                                <div
                                                                                                    class="form-group row">
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <label
                                                                                                            class="block"><i
                                                                                                                class="fa fa-bed"></i>&nbsp;วินิจฉัยโรค
                                                                                                            *</label>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            name="disease"
                                                                                                            id="disease"
                                                                                                            placeholder="ระบุโรค"
                                                                                                            value="{{ $lreserve->disease }}">

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--  -->
                                                                                            <div
                                                                                                class="col-sm-12 col-xl-6">
                                                                                                <div
                                                                                                    class="form-group row">
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <label
                                                                                                            class="block"><i
                                                                                                                class="fa fa-user-md"></i>&nbsp;อาจารย์แพทย์เจ้าของไข้
                                                                                                            *</label>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <select
                                                                                                            class="js-example-basic-single col-sm-12"
                                                                                                            style="color: black;width: 100%;"
                                                                                                            name="doctor_id"
                                                                                                            id="doctor_id">
                                                                                                            @if(is_null($doc))
                                                                                                            @else
                                                                                                            @foreach ($doc as $ldoc)
                                                                                                            <option
                                                                                                                value="{{ $ldoc->id }}"
                                                                                                                {{ $ldoc-> id == $lreserve->doctor->id ? 'selected' : '' }}>
                                                                                                                {{ $ldoc->prefix }}{{ $ldoc->fname }} {{ $ldoc->lname }}

                                                                                                            </option>
                                                                                                            {{-- <option
                                                                                                                value="{{ $ldoc->id }}">
                                                                                                            {{
                                                                                                                $ldoc->name
                                                                                                                }}
                                                                                                            </option>
                                                                                                            --}}
                                                                                                            @endforeach
                                                                                                            @endif
                                                                                                        </select>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--  -->
                                                                                        </div> <!-- row -->

                                                                                        <h4 class="sub-title"
                                                                                            style="font-size:16px;font-weight:bold;">
                                                                                            ข้อมูลผู้จอง/ผู้รับผิดชอบผู้ป่วย
                                                                                            ที่สามารถติดต่อได้</h4>
                                                                                        <div class="row">
                                                                                            <!--  -->
                                                                                            <div
                                                                                                class="col-sm-12 col-xl-6">
                                                                                                <div
                                                                                                    class="form-group row">
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <label
                                                                                                            class="block"><i
                                                                                                                class="fa fa-calendar"></i>&nbsp;วันที่ต้องการจองเตียง
                                                                                                            *&nbsp;</label><label
                                                                                                            style="color:red;">(สามารถจองล่วงหน้าได้ไม่เกิน
                                                                                                            6 เดือน
                                                                                                            ถ้าพบปัญหากรุณาติดต่อเจ้าหน้าที่)</label>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <input
                                                                                                            id="dropper-default"
                                                                                                            class="form-control"
                                                                                                            type="text"
                                                                                                            placeholder="Select your date"
                                                                                                            name="reserve_booking"
                                                                                                            data-date-format="dd/mm/yyyy"
                                                                                                            value="{{ \Carbon\Carbon::parse($lreserve->reserve_booking)->format('d/m/Y') }}"
                                                                                                            autocomplete="off">

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--  -->
                                                                                            <div
                                                                                                class="col-sm-12 col-xl-6">
                                                                                                <div
                                                                                                    class="form-group row">
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <label
                                                                                                            class="block"><i
                                                                                                                class="fa fa-user-plus"></i>&nbsp;ชื่อผู้รับผิดชอบที่สามารถติดต่อกลับได้
                                                                                                            *</label>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            name="booking_name"
                                                                                                            readonly
                                                                                                            id="booking_name"
                                                                                                            placeholder="ระบุชื่อผู้รับผิดชอบที่สามารถติดต่อกลับได้"
                                                                                                            value="{{ $lreserve->user->prefix }}{{ $lreserve->user->fname }} {{ $lreserve->user->lname }}">

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--  -->
                                                                                            <div
                                                                                                class="col-sm-12 col-xl-6">
                                                                                                <div
                                                                                                    class="form-group row">
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <label
                                                                                                            class="block"><i
                                                                                                                class="fa fa-phone"></i>&nbsp;เบอร์โทรติดต่อ
                                                                                                            *</label>&nbsp;<label
                                                                                                            style="color:red;">(หากต้องการระบุหลายเบอร์ให้ใช้
                                                                                                            ,
                                                                                                            คั่น)</label>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            readonly
                                                                                                            name="booking_phone"
                                                                                                            id="booking_phone"
                                                                                                            placeholder="ระบุเบอร์โทรติดต่อ"
                                                                                                            value="{{ $lreserve->user->ward->phone }}"
                                                                                                            OnKeyPress="return chkNumber(this)">

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--  -->
                                                                                            <!--  -->
                                                                                            <div
                                                                                                class="col-sm-12 col-xl-6">
                                                                                                <div
                                                                                                    class="form-group row">
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <label
                                                                                                            class="block"><i
                                                                                                                class="fa fa-transgender-alt "></i>&nbsp;วอร์ด
                                                                                                            (Ward)
                                                                                                            *</label>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <select class="js-example-basic-single col-sm-12 required wardid" name="wardid" style="width: 100%">
                                                                                                            <option value="" style="align-items: center;display: none" disabled selected>..เลือก Ward..</option>
                                                                                                            @if (is_null($ward))
                                                                
                                                                                                            @else
                                                                                                            @foreach ($ward as $lward)
                                                                                                            <option value="{{ $lward->id }}" {{ $lreserve->ward_id == $lward->id ? 'selected' : '' }}>{{ $lward->ward_name }}
                                                                                                            </option>
                                                                                                            @endforeach
                                                                                                            @endif
                                                
                                                                                                            </select>
                                                                                                        <span
                                                                                                            id="messages"></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--  -->
                                                                                            <div
                                                                                                class="col-sm-12 col-xl-6">
                                                                                                <div
                                                                                                    class="form-group row">
                                                                                                    <div
                                                                                                        class="col-sm-12">
                                                                                                        <label
                                                                                                            class="block"><i
                                                                                                                class="fa fa-transgender-alt "></i>&nbsp;หัตถการ
                                                                                                            (Operative)
                                                                                                            *</label>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-sm-12 opt_div">
                                                                                                        {{-- <input type="text"
                                                                                                    class="form-control required opt_id"
                                                                                                    name="opt" value="{{ $lreserve->operative->name }}"> --}}
                                                                                                        <select
                                                                                                            class="js-example-basic-single col-sm-12 opt_id"
                                                                                                            style="color: black;width: 100%;"
                                                                                                            name="opt_id">
                                                                                                            <option value="{{ $lreserve->opt_id }}">{{ $lreserve->operative->opt_name }}</option>
                                                                                                        </select>
                                                                                                        <span
                                                                                                            id="messages"></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div> <!-- row -->

                                                                                        <input type="hidden"
                                                                                            name="ward_in"
                                                                                            value="{{ $lreserve->ward_id }}">
                                                                                        <input type="hidden" name="ward"
                                                                                            value="{{ $lreserve->ward_id }}">
                                                                                        <div class="row">
                                                                                            <div class="col-md-4"></div>
                                                                                            <div class="col-md-2">
                                                                                                <button type="submit"
                                                                                                    style="width:100%;"
                                                                                                    id="submitbtn"
                                                                                                    class="btn btn-mat waves-effect waves-light btn-success">บันทึก</button>
                                                                                            </div>
                                                                                            <div class="col-md-2">
                                                                                                <button type="button"
                                                                                                    style="width:100%;"
                                                                                                    class="btn btn-mat waves-effect waves-light btn-danger "
                                                                                                    data-dismiss="modal">ยกเลิก</button>
                                                                                            </div>
                                                                                            <div class="col-md-4"></div>
                                                                                        </div>
                                                                                </form> <!-- /.form -->
                                                                            </div> <!-- /modal-content -->
                                                                        </div> <!-- /modal-dailog -->
                                                                    </div>
                                                                    {{-- /editReserve --}}


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

<script type='text/javascript'>

    function calculate_age(dob) { 
         var diff_ms = Date.now() - dob.getTime();
         var age_dt = new Date(diff_ms); 

         return Math.abs(age_dt.getUTCFullYear() - 1970);
         }

     function getDateAge(text) {
     var TextDate = text.split("/");
     console.log(calculate_age(new Date(TextDate[2],TextDate[1],TextDate[0])));
     document.getElementById("age").value = calculate_age(new Date(TextDate[2],TextDate[1],TextDate[0]));
     }

     </script>

    <script>

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

</body>

</html>