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
        /* float: right */
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
                        <a href="/index-nurse">
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
                                <span class="font-weight-bold" style="color: blue;">{{ $ward->ward_name ?? '' }}</span>

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
                                            <a href="/manageprofile-chief">
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

                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-settings"></i></span>
                                            <span class="pcoded-mtext">จัดสรรเตียง
                                                @if ($reserve->isNotEmpty())
                                                <img src='http://oxygen.readyplanet.com/images/column_1303576852/icon0002.gif'
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
                                            <li class="">
                                                <a href="/normalreserv-nurse" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">รายการจอง
                                                        @if ($reserve->isNotEmpty())
                                                        <span class="badge badge-danger">New
                                                            {{ $reserve->count() }}</span>
                                                        @endif
                                                </a>
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

                                    <li class="active">
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
                                            <h5>ผู้ป่วย</h5>
                                            <span>แสดงรายผู้ป่วย</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">ผู้ป่วย</a> </li>
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
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="scr-vtr-dynamic-normal"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width: 15px;">รหัส HN ผู้ป่วย</th>
                                                                        <th>ชื่อผู้ป่วย</th>
                                                                        <th>สิทธิ์การรักษา</th>
                                                                        <th>อายุ</th>
                                                                        <th>เบอร์</th>
                                                                        <th style="width: 10%;">ตัวเลือก</th>
                                                                    </tr>
                                                                </thead>
                                                                @if(is_null($pa))

                                                                @else
                                                                <tbody>


                                                                    @foreach ($pa as $lpa)
                                                                    <tr>

                                                                        <td>{{ $lpa->hn ?? 'ไม่มี HN' }}</td>
                                                                        <td>{{ $lpa->prefix }}{{ $lpa->fname }} {{ $lpa->lname }}</td>
                                                                        <td>{{ $lpa->pay->name ?? ''}}</td>
                                                                        <td>{{ $lpa->age ?? '0' }} ปี</td>
                                                                        <td>{{ $lpa->phone ?? 'ไม่มีเบอร์'}}</td>
                                                                        <td>

                                                                            <span data-toggle="modal"
                                                                                data-target="#editPa{{ $lpa->id }}">
                                                                                <button class="btn btn-primary"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    title="แก้ไขข้อมูลผู้ป่วย">
                                                                                    <i class="far fa-edit"></i>
                                                                                </button>
                                                                            </span>
                                                                        </td>
                                                                    </tr>


                                                                    <!-- edit patient -->
                                                                    <div class="modal fade" id="editPa{{ $lpa->id }}">
                                                                        <div
                                                                            class="modal-dialog modal-lg modal-dialog-centered">
                                                                            <div class="modal-content">

                                                                                <!-- Modal Header -->
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title">
                                                                                        แก้ไขข้อมูลผู้ป่วย</h4>
                                                                                    <button type="button" class="close"
                                                                                        data-dismiss="modal">&times;</button>
                                                                                </div>

                                                                                <form class="form-horizontal"
                                                                                    action="{{ route('patient.update',$lpa->id) }}"
                                                                                    method="POST">
                                                                                    @csrf
                                                                                    {{ method_field('patch') }}
                                                                                    <!-- Modal body -->
                                                                                    <div class="modal-body">
                                                                                        <div class="input-group mb-3">
                                                                                            <div
                                                                                                class="input-group-prepend">
                                                                                                <span
                                                                                                    class="input-group-text">HN</span>
                                                                                            </div>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                name="hn"
                                                                                                value="{{ $lpa->hn }}"
                                                                                                placeholder="hn"
                                                                                                required
                                                                                                onkeyup="this.value = this.value.toUpperCase();"
                                                                                                maxlength="6"
                                                                                                minlength="6">
                                                                                        </div>
                                                                                        

                                                                                        <div class="input-group mb-3">
                                                                                            <div
                                                                                                class="input-group-prepend">
                                                                                                <span
                                                                                                    class="input-group-text">ชื่อผู้ป่วย</span>
                                                                                            </div>
                                                                                            <select class="form-control prefix" required
                                                                                                            name="prefix"
                                                                                                            {{-- id="prefix" --}}
                                                                                                            required>
        
                                                                                                            <option value=""
                                                                                                                style="display: none"
                                                                                                                selected>
                                                                                                                ..เลือกคำนำหน้า..
                                                                                                            </option>
                                                                                                            @forelse ($prefix as $lprefix)
                                                                                                <option value="{{ $lprefix->prefix }}" {{ $lpa->prefix == $lprefix->prefix ? 'selected' : '' }}>
                                                                                                    {{ $lprefix->prefix }}
                                                                                                </option>
                                                                                                @empty

                                                                                                @endforelse
                                                                                                        </select>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                name="fname"
                                                                                                value="{{ $lpa->fname }}"
                                                                                                placeholder="ชื่อจริง"
                                                                                                required>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                name="lname"
                                                                                                value="{{ $lpa->lname }}"
                                                                                                placeholder="นามสกุล"
                                                                                                required>
                                                                                        </div>

                                                                                        <div class="input-group mb-3">
                                                                                            <div
                                                                                                class="input-group-prepend">
                                                                                                <span
                                                                                                    class="input-group-text">อายุผู้ป่วย</span>
                                                                                            </div>
                                                                                            <input type="text" name="pa_age" class="form-control" value="{{ $lpa->age }}" required>
                                                                                        </div>

                                                                                        <div class="input-group mb-3">
                                                                                            <div
                                                                                                class="input-group-prepend">
                                                                                                <span
                                                                                                    class="input-group-text">เบอร์</span>
                                                                                            </div>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                name="pa_phone"
                                                                                                value="{{ $lpa->phone }}"
                                                                                                placeholder="เบอร์"
                                                                                                maxlength="55"
                                                                                                minlength="10"
                                                                                                required
                                                                                                OnKeyPress="return chkNumber(this)">
                                                                                        </div>

                                                                                        <div class="input-group mb-3">
                                                                                            <div
                                                                                                class="input-group-prepend">
                                                                                                <span
                                                                                                    class="input-group-text">เพศผู้ป่วย</span>
                                                                                            </div>
                                                                                            <select class="form-control"
                                                                                                name="pa_sex"
                                                                                                id="pa_sex">
                                                                                                <option value="" style="display: none;">เลือกเพศ</option>
                                                                                                <option value="ชาย"
                                                                                                    {{ $lpa->sex == 'ชาย'? 'selected' : '' }}>
                                                                                                    ชาย</option>
                                                                                                <option value="หญิง"
                                                                                                    {{ $lpa->sex == 'หญิง'? 'selected' : '' }}>
                                                                                                    หญิง</option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="input-group mb-3">
                                                                                            <div
                                                                                                class="input-group-prepend">
                                                                                                <span
                                                                                                    class="input-group-text">สิทธิ์การรักษา</span>
                                                                                            </div>
                                                                                            <select class="form-control"
                                                                                                name="pay_id"
                                                                                                id="pay_id">
                                                                                                <option value="" selected disabled>..เลือกสืทธิ์การรักษา..</option>
                                                                                                @forelse ($pay as $lpay)
                                                                                                    <option value="{{ $lpay->id }}" {{ $lpa->pay_id == $lpay->id ? 'selected' : '' }}>{{ $lpay->name }}</option>
                                                                                                @empty
                                                                                                    
                                                                                                @endforelse
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Modal footer -->
                                                                                    <div class="modal-footer">
                                                                                        <button type="submit"
                                                                                            class="btn btn-success">บันทึก</button>
                                                                                        <button type="button"
                                                                                            class="btn btn-danger"
                                                                                            data-dismiss="modal">ปิด</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /edit patient -->

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