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
        @keyframes check {
            0% {
                height: 0;
                width: 0;
            }

            25% {
                height: 0;
                width: 10px;
            }

            50% {
                height: 20px;
                width: 10px;
            }
        }

        .checkbox {
            background-color: #fff;
            display: inline-block;
            height: 28px;
            margin: 0 .25em;
            width: 28px;
            border-radius: 4px;
            border: 1px solid #ccc;
            float: right
        }

        .checkbox span {
            display: block;
            height: 28px;
            position: relative;
            width: 28px;
            padding: 0
        }

        .checkbox span:after {
            -moz-transform: scaleX(-1) rotate(135deg);
            -ms-transform: scaleX(-1) rotate(135deg);
            -webkit-transform: scaleX(-1) rotate(135deg);
            transform: scaleX(-1) rotate(135deg);
            -moz-transform-origin: left top;
            -ms-transform-origin: left top;
            -webkit-transform-origin: left top;
            transform-origin: left top;
            border-right: 4px solid #fff;
            border-top: 4px solid #fff;
            content: '';
            display: block;
            height: 20px;
            left: 3px;
            position: absolute;
            top: 15px;
            width: 10px
        }

        .checkbox span:hover:after {
            border-color: #999
        }

        .checkbox input {
            display: none
        }

        .checkbox input:checked+span:after {
            -webkit-animation: check .8s;
            -moz-animation: check .8s;
            -o-animation: check .8s;
            animation: check .8s;
            border-color: #555
        }

        .checkbox input:checked+.default:after {
            border-color: #444
        }

        .checkbox input:checked+.primary:after {
            border-color: #2196F3
        }

        .checkbox input:checked+.success:after {
            border-color: #8bc34a
        }

        .checkbox input:checked+.info:after {
            border-color: #3de0f5
        }

        .checkbox input:checked+.warning:after {
            border-color: #FFC107
        }

        .checkbox input:checked+.danger:after {
            border-color: #f44336
        }



        .dtr-title {
            padding-left: 150px;
        }

        .table.dataTable>tbody>tr.child ul.dtr-details>li {
            border-bottom: none;
        }

        .child {
            background: #FFFFCC;
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
                                        <span>{{ Auth::user()->prefix }}{{ Auth::user()->fname }} {{ Auth::user()->lname }}</span>
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
                                            <li class="">
                                                <a href="/reserve-user" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">รายการจอง</span>
                                                </a>
                                            </li>
                                            <li class="active">
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
                                            <h5>รายการจองที่อนุมัติแล้ว</h5>
                                            <span>แสดงรายการอนุมัติ</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">รายการจองที่อนุมัติแล้ว</a> </li>
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

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-xl-6">
                                                            <div class="input-group" style="margin-left: 20px;">
                                                                <div class="input-group-prepend">
                                                                    <span
                                                                        class="input-group-text text-bold">ค้นรายการของวันที่</span>
                                                                </div>
                                                                <input type="text" id="dropper-user" name="min"
                                                                    class="employee-search-input-approve datepicker form-control"
                                                                    style="max-width: 200px"
                                                                    placeholder="เลือกวันที่..."
                                                                    data-date-format="dd/mm/yyyy" title="เลือกวันที่">
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="scr-vtr-dynamic-approve"
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
                                                                        <th>เตียง</th>
                                                                        <th>รายละเอียด</th>
                                                                        <th>ผู้จอง</th>
                                                                        <th style="width: 10%;">ตัวเลือก</th>
                                                                    </tr>
                                                                </thead>
                                                                @if(is_null($reserveapply))

                                                                @else
                                                                <tbody>

                                                                    @php $number = 1; @endphp

                                                                    @foreach ($reserveapply as $lreserveapply)

                                                                    <tr class="text-center">
                                                                        {{-- <th>{{ $lreserveapply->id }}</th> --}}
                                                                        <td>{{ $number }}</td>
                                                                        <td>{{ $lreserveapply->patient->hn ?? 'ไม่มี HN' }}</td>
                                                                        <td>{{ $lreserveapply->patient->prefix }}{{ $lreserveapply->patient->fname }} {{ $lreserveapply->patient->lname }}</td>
                                                                        <td>{{ $lreserveapply->operative->opt_name ?? 'ไม่มี หัตถการ' }}
                                                                        </td>
                                                                        <td>{{ $lreserveapply->name ?? 'ไม่มีสิทธิ์การรักษา'}}</td>
                                                                        <td>{{ Auth::user()->ward->ward_name ?? ' ' }}
                                                                        </td>
                                                                        <td>{{
                                                                            \Carbon\Carbon::parse($lreserveapply->reserve_booking)->format('d/m/Y')
                                                                            }}
                                                                        </td>
                                                                        <td class="text-center">
                                                                        @if ($lreserveapply->reserve_status =='อนุมัติเตียง')
                                                                            <small class="badge badge-success"
                                                                                style="font-size:15px;">{{ $lreserveapply->reserve_status }}</small>
                                                                            @endif
                                                                            @if ($lreserveapply->reserve_status =='เข้าเตียง')
                                                                            <small class="badge badge-success"
                                                                                style="font-size:15px;">{{ $lreserveapply->reserve_status }}</small>
                                                                            @endif
                                                                            @if ($lreserveapply->reserve_status =='เตรียมออก')
                                                                            <small class="badge badge-warning"
                                                                                style="font-size:15px;color: back;">{{ $lreserveapply->reserve_status }}</small>
                                                                            @endif
                                                                        </td>
                                                                        <td>{{ $lreserveapply->bed_id }}</td>
                                                                        <td>{{ $lreserveapply->reserve_detail }}</td>
                                                                        <td>{{ $lreserveapply->user->prefix }}{{ $lreserveapply->user->fname }} {{ $lreserveapply->user->lname }}</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <button type="button"
                                                                                    class="btn btn-primary dropdown-toggle"
                                                                                    data-toggle="dropdown">
                                                                                    เมนู
                                                                                </button>
                                                                                {{-- @if ($lreserveapply->created_user_id == Auth::user()->id) --}}
                                                                                <div class="dropdown-menu">
                                                                                    <a class="dropdown-item"
                                                                                        data-toggle="modal"
                                                                                        href="#check{{ $lreserveapply->id }}">รายการตรวจ</a>
                                                                                        <a class="dropdown-item"
                                                                                        data-toggle="modal"
                                                                                        href="#canReserve{{ $lreserveapply->id }}">ยกเลิกรายการจอง</a>
                                                                                </div>
                                                                                 {{-- @endif  --}}
                                                                            </div>
                                                                        </td>
                                                                        {{-- <td>
                                                                            <div class="btn-group text-center">
                                                                                @if ($lreserveapply->created_user_id == Auth::user()->id)
                                                                                <span data-toggle="modal"
                                                                                    data-target="#check{{ $lreserveapply->id }}">
                                                                                    <button
                                                                                        class="btn btn-sm btn-primary"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top"
                                                                                        title="รายการตรวจ">
                                                                                        <i class="far fa-list-alt"></i>
                                                                                    </button>
                                                                                </span>
                                                                                @endif

                                                                                <span data-toggle="modal"
                                                                                    data-target="#canReserve{{ $lreserveapply->id }}">
                                                                                    <button
                                                                                        class="btn btn-sm btn-danger"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top"
                                                                                        title="ยกเลิกรายการจอง">
                                                                                        <i
                                                                                            class="far fa-window-close"></i>
                                                                                    </button>
                                                                                </span>


                                                                            </div>

                                                                        </td> --}}
                                                                    </tr>
                                                                    @php $number = $number + 1; @endphp

                                                                    
                                                        <div class="modal fade" id="canReserve{{ $lreserveapply->id }}"
                                                            role="dialog">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <form action="/cancelreserve" method="POST">
                                                                        @csrf

                                                                        <div class="modal-body">
                                                                            {{-- <div
                                                                                        style="display: flex;justify-content: center;align-items: center;padding-top:20px;">
                                                                                        <img src="admindek/png/warning.png"
                                                                                            style="width:40%;height:auto;" />
                                                                                    </div> --}}
                                                                            <h3
                                                                                style="text-align:center;padding-top:15px;font-weight:bold;">
                                                                                คุณต้องการยกเลิกรายการจองหรือไม่</h3>
                                                                            <p
                                                                                style="text-align:center;padding-top:15px;font-size: 20px">
                                                                                ยกเลิกรายการจอง
                                                                                <span style="color: red">{{ $lreserveapply->patient->hn }}</span></p>
                                                                            <div class="ml-5" style="margin-top: 20px;">
                                                                                <hr>
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input type="radio"
                                                                                            class="form-check-input"
                                                                                            name="detail_can"
                                                                                            value="คนไข้ปฏิเสธการรักษา"
                                                                                            required>คนไข้ปฏิเสธการรักษา
                                                                                    </label>
                                                                                </div>
                                                                                <hr>
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input type="radio"
                                                                                            class="form-check-input"
                                                                                            name="detail_can"
                                                                                            value="คนไข้เลื่อนนัด"
                                                                                            required>คนไข้เลื่อนนัด
                                                                                    </label>
                                                                                </div>
                                                                                <hr>
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input type="radio"
                                                                                            class="form-check-input"
                                                                                            name="detail_can"
                                                                                            value="มีเคสเร่งด่วนกว่า"
                                                                                            required>มีเคสเร่งด่วนกว่า
                                                                                    </label>
                                                                                </div>
                                                                                <hr>
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input type="radio"
                                                                                            class="form-check-input"
                                                                                            name="detail_can"
                                                                                            value="คนไข้ได้รับการรักษาจากวอร์ดอื่น"
                                                                                            required>คนไข้ได้รับการรักษาจากวอร์ดอื่น
                                                                                    </label>
                                                                                </div>
                                                                                <hr>
                                                                                {{-- <input type="text" class="form-control" name="detail_can" placeholder="อื่นๆ....." > --}}
                                                                            </div>




                                                                            <input type="hidden" name="cancel"
                                                                                value="cancel">
                                                                            <input type="hidden" name="reserve_id"
                                                                                value="{{ $lreserveapply->id }}">
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
                                                                                            class="btn waves-effect waves-light btn-danger btn-square btn-block">ยกเลิกการจอง</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>




                                                        <!-- /modal cancel reserve -->



                                                        {{-- check --}}
                                                        <div class="modal fade" id="check{{ $lreserveapply->id }}">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">

                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title"><i
                                                                                class="fa fa-edit"></i>
                                                                            รายการตรวจ
                                                                        </h4>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">&times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body mb-1">
                                                                        <div class="text-center mb-1">

                                                                            <p class="card-text"
                                                                                style="font-size: 18px;">
                                                                                <strong>HN :</strong>
                                                                                {{ $lreserveapply->patient->hn }}
                                                                            </p>
                                                                            <p class="card-text"
                                                                                style="font-size: 18px;">
                                                                                <strong>ชื่อผู้ป่วย
                                                                                    :</strong>
                                                                                    {{ $lreserveapply->patient->prefix }}{{ $lreserveapply->patient->fname }} {{ $lreserveapply->patient->lname }}
                                                                                
                                                                            </p>
                                                                        </div>

                                                                        
                                                                    </div>

                                                                    @php $pre_arr = explode(",", $lreserveapply->preopt_id);
                                                                    @endphp
                                                                    @php $checknum[] = '' @endphp
                                                                    @php $run = 0 @endphp

                                                                    @foreach($pre_arr as $lpre_arr)
                                                                    {{-- {{ $lpre_arr }} --}}

                                                                    @if ($lpre_arr != '')
                                                                    @php $checknum[$run] = $lpre_arr @endphp
                                                                    {{-- @php echo $checknum[$run] @endphp
                                                                                --}}
                                                                    @php $run = $run+1 @endphp
                                                                    @else
                                                                    @php $checknum[$run] = ''; @endphp
                                                                    @endif

                                                                    @endforeach

                                                                    <form class="form-horizontal"
                                                                        action="{{ route('reserve.update',$lreserveapply->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        {{ method_field('patch') }}

                                                                        <div class="modal-body mt-0">

                                                                            <input type="hidden" name="saveopt"
                                                                                value="1">

                                                                            <div class="card mt-0"
                                                                                style="margin:10px 0;background-color:rgba(0,0,0,.03);">
                                                                                <div class="card-header">
                                                                                    <strong>รายการตรวจ</strong>
                                                                                </div>

                                                                                <ul class="list-group list-group-flush">
                                                                                    @if (is_null($pre))

                                                                                    @else

                                                                                    @php $n = 0; @endphp

                                                                                    @foreach ($pre as $lpre)

                                                                                    @if(!empty($checknum[$n]))
                                                                                    @if ($checknum[$n] != $lpre->id)

                                                                                    {{-- <div
                                                                                                    class="form-check ml-5">
                                                                                                    <label
                                                                                                        class="form-check-label">
                                                                                                        <input
                                                                                                            type="checkbox"
                                                                                                            class="form-check-input"
                                                                                                            name="preopt[]"
                                                                                                            value="{{ $lpre->id }}">{{
                                                                                                        $lpre->pre_opt
                                                                                                        }}
                                                                                    </label>
                                                                            </div> --}}

                                                                            <li class="list-group-item">
                                                                                {{ $lpre->pre_opt }}
                                                                                <label class="checkbox">
                                                                                    <input type="checkbox"
                                                                                        name="preopt[]"
                                                                                        value="{{ $lpre->id }}" />
                                                                                    <span class="success"></span>
                                                                                </label>
                                                                            </li>

                                                                            @else

                                                                            @php
                                                                            $arropt =
                                                                            \App\Preoperative::find($checknum[$n]);
                                                                            @endphp
                                                                            @php $n++; @endphp
                                                                            {{-- <div
                                                                                                    class="form-check ml-5">
                                                                                                    <label
                                                                                                        class="form-check-label">
                                                                                                        <input
                                                                                                            type="checkbox"
                                                                                                            class="form-check-input"
                                                                                                            name="preopt[]"
                                                                                                            value="{{ $arropt->id }}"
                                                                            checked>{{
                                                                                                        $arropt->pre_opt
                                                                                                        }}
                                                                            </label>
                                                                        </div> --}}

                                                                        <li class="list-group-item">
                                                                            {{ $arropt->pre_opt
                                                                                                    }}
                                                                            <label class="checkbox">
                                                                                <input type="checkbox" name="preopt[]"
                                                                                    value="{{ $arropt->id }}" checked />
                                                                                <span class="success"></span>
                                                                            </label>
                                                                        </li>



                                                                        @endif
                                                                        @else
                                                                        {{-- <div
                                                                                                    class="form-check ml-5">
                                                                                                    <label
                                                                                                        class="form-check-label">
                                                                                                        <input
                                                                                                            type="checkbox"
                                                                                                            class="form-check-input"
                                                                                                            name="preopt[]"
                                                                                                            value="{{ $lpre->id }}">{{
                                                                                                        $lpre->pre_opt
                                                                                                        }}
                                                                        </label>
                                                                </div> --}}
                                                                <li class="list-group-item">
                                                                    {{ $lpre->pre_opt }}
                                                                    <label class="checkbox">
                                                                        <input type="checkbox" name="preopt[]"
                                                                            value="{{ $lpre->id }}" />
                                                                        <span class="success"></span>
                                                                    </label>
                                                                </li>
                                                                @endif


                                                                @endforeach
                                                                @endif


                                                                </ul>
                                                            </div>

                                                        </div>

                                                        {{-- <input type="hidden" name="ward"
                                                                                            value="{{ $ward->id }}">
                                                        --}}

                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary"
                                                                autocomplete="off"> <i
                                                                    class="glyphicon glyphicon-ok-sign"></i>บันทึก</button>
                                                            <button type="button" class="btn btn-warning"
                                                                data-dismiss="modal">
                                                                <i class="glyphicon glyphicon-remove-sign"></i>
                                                                ปิด</button>
                                                        </div> <!-- /modal-footer -->
                                                        </form> <!-- /.form -->
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- /check --}}
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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


<!-- Mirrored from colorlib.com/polygon/admindek/default/dt-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:09:26 GMT -->

</html>