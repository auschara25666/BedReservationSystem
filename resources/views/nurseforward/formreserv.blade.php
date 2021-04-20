<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:07:52 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>ระบบจองเตียงผู้ป่วยออนไลน์ โรงพยาบาลศรีนครินทร์</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="{{ asset('image/Emblem.png') }}" sizes="32x32" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admindek/css/waves.min.css') }}"type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/feather.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/themify-icons.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/icofont.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/font-awesome-n.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admindek/css/select2.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/bootstrap-multiselect.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/multi-select.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/bootstrap-datetimepicker.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/daterangepicker.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/datedropper.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/spectrum.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/jquery.steps.css') }}">


    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/pages.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>

    {{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> --}}
    {{-- <link href="{{ asset('css/autocomplete.min.css') }}" rel="stylesheet" /> --}}


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


        .datepicker td, .datepicker th {
        width: 2.5rem;
        height: 2.5rem;
        font-size: 0.85rem;
        }

        .datepicker {
            margin-bottom: 3rem;
        }


        /* .section-search i {
            display: block;
        }

        .section-search input.autocomplete {
            color: #000;
        }

        .input-field .prefix.active {
            color: #000 !important;
        } */
        .ui-autocomplete {
		max-height: 350px;
		overflow-y: auto;
		/* prevent horizontal scrollbar */
		overflow-x: hidden;
		/* add padding to account for vertical scrollbar */
		padding-right: 20px;
	}

    .dropdown-content {
            background-color: rgba(212, 211, 211, 0.774);
          max-height: 100px;
        overflow-y: scroll;
        }

        .dropdown-content li>a,
        .dropdown-content li>span {
            color: #000 !important;
        }

        .autocomplete-content li .highlight {
            color: red !important;
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

                                    <li class="pcoded-hasmenu">
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
                                            <li class="">
                                                <a href="/normalreserv-nurse" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">รายการจอง 
                                                        @if ($reserve->isNotEmpty())
                                                        <span class="badge badge-danger">New  {{ $reserve->count() }}</span>
                                            @endif
                                        </span>                                                        </a>
                                            </li>
                                            <li class="">
                                                <a href="/approvedreserv-nurse" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">รายการอนุมัติแล้ว</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>


                                    <li class="active">
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

                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- ///////////////////////////////////////////////////////////////////////// -->

                    <div class="pcoded-content">

                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="feather icon-book bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>แบบฟอร์มจองเตียง</h5>
                                            <span>กรุณากรอกข้อมูลที่จำเป็น (*) ให้ครบถ้วน</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="/index-chief"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">แบบฟอร์มจองเตียง</a> </li>
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


                                                <div class="card">
                                                    <div class="card-header">
                                                        {{-- @if($errors->any())
                                                        {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                                                    @endif --}}
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
                                                        @if (session()->has('alerterror'))
                                                        <div class="alert alert-danger background-danger">
                                                            {{ session()->get('alerterror') }}
                                                        </div><br />
                                                        @endif
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div id="wizard">
                                                                    <section>
                                                                        <form role="form" class="wizard-form"
                                                                            name="myform"
                                                                            action="{{ route('reserve.store') }}"
                                                                            id="example-advanced-form" method="POST"
                                                                            onsubmit="return checkForm(this);">
                                                                            @csrf

                                                                            <h3> หัตถการ </h3>
                                                                            <fieldset>
                                                                                <h3
                                                                                    style="display: flex;justify-content: center;align-items: center;">
                                                                                    เลือกหัตถการ </h3>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-2"></div>
                                                                                    <div class="col-md-8">
                                                                                        <select
                                                                                            class="js-example-basic-single col-sm-12 required"
                                                                                            name="opt_id" id="opt_id"
                                                                                            pe>
                                                                                            <option value="" disabled
                                                                                                selected
                                                                                                style="align-items: center;">
                                                                                                ..กรุณาเลือกหัตถการ..
                                                                                            </option>

                                                                                            @forelse ($opt as $lopt)
                                                                                            <option
                                                                                                value="{{ $lopt->id }}"
                                                                                                {{ $lopt->id == old('opt_id') ? 'selected' : '' }}>
                                                                                                {{ $lopt->opt_name }}
                                                                                            </option>
                                                                                            @empty
                                                                                            @endforelse
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-2"></div>
                                                                                </div>




                                                                            </fieldset>


                                                                            <h3> ข้อมูลผู้ป่วย </h3>
                                                                            <fieldset>

                                                                                <h4 class="sub-title"
                                                                                    style="font-size:16px;font-weight:bold;">
                                                                                    ข้อมูลผู้ป่วย</h4>

                                                                                <div class="row">
                                                                                    <div class="col-sm-12 col-xl-6">
                                                                                        <!-- <div class="form-group row">
                                                                        <div class="col-sm-12">
                                                                            <label class="block"><i
                                                                                    class="fa fa-qrcode"></i>&nbsp;เลขบัตรประจำตัว
                                                                                (HN) *</label>&nbsp;<label
                                                                                style="color:red;">ตัวอย่าง : HN1234 (6
                                                                                ตัว)</label>
                                                                        </div>


                                                                        <div class="col-sm-12">
                                                                            <input type="text" class="form-control hn"
                                                                                name="hn" id="hn" placeholder="ระบุ HN"
                                                                                maxlength="6" onkeyup="this.value = this.value.toUpperCase();" autocomplete="off">
                                                                                <div id="hn_list"></div>

                                                                        </div>


                                                                    </div> -->


                                                                                        <label class="block" for="hn"><i
                                                                                                class="fa fa-qrcode"></i>&nbsp;เลขบัตรประจำตัวรพ.ศรีนครินทร์(HN)
                                                                                        </label>
                                                                                        &nbsp;<label
                                                                                            style="color:red;">*
                                                                                            ตัวอย่าง : HN1234 (6
                                                                                            ตัวเท่านั้น)</label>&nbsp;<label
                                                                                            style="color:white;font-size:16px;"
                                                                                            class="label label-danger">หากผู้ป่วยมีข้อมูลในระบบแล้วระบบจะแสดงรหัส
                                                                                            HN ขึ้นมาให้เลือก
                                                                                            และจะกรอกข้อมูลให้อัตโนมัติ</label>
                                                                                        <div
                                                                                            class="form-group section-search">

                                                                                            <div class="input-field">
                                                                                                <input type="text"
                                                                                                    name="hn"
                                                                                                    class="form-control hn required"
                                                                                                    placeholder="ระบุ HN"
                                                                                                    autocomplete="off"
                                                                                                    onkeyup="this.value = this.value.toUpperCase();"
                                                                                                    maxlength="6"
                                                                                                    minlength="6">
                                                                                            </div>

                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                                <!--  -->
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 col-xl-2">
                                                                                        <div class="form-group row">
                                                                                            <div class="col-sm-12">
                                                                                                <label class="block"><i
                                                                                                        class="fa fa-user"></i>&nbsp;คำนำหน้า
                                                                                                    (Prefix)
                                                                                                </label>&nbsp;<label
                                                                                                    style="color:red;">*</label>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-sm-12 pa_prefix_div">
                                                                                                <select class="form-control" required
                                                                                                    name="prefix"
                                                                                                    id="prefix"
                                                                                                    required>

                                                                                                    <option value=""
                                                                                                        style="display: none"
                                                                                                        selected>
                                                                                                        ..เลือกคำนำหน้า..
                                                                                                    </option>
                                                                                                    @forelse ($prefix as $lprefix)
                                                                                                    <option
                                                                                                        value="{{ $lprefix->prefix }}">
                                                                                                        {{ $lprefix->prefix }}
                                                                                                    </option>
                                                                                                    @empty

                                                                                                    @endforelse
                                                                                                </select>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-12 col-xl-4">
                                                                                        <div class="form-group row">
                                                                                            <div class="col-sm-12">
                                                                                                <label class="block"><i
                                                                                                        class="fa fa-user"></i>&nbsp;ชื่อผู้ป่วย
                                                                                                    (Firstname)
                                                                                                </label>&nbsp;<label
                                                                                                    style="color:red;">*</label>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-sm-12 pa_fname_div">
                                                                                                <input type="text"
                                                                                                    class="form-control required"
                                                                                                    name="fname"
                                                                                                    id="fname"
                                                                                                    placeholder="ระบุชื่อผู้ป่วย">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-12 col-xl-4">
                                                                                        <div class="form-group row">
                                                                                            <div class="col-sm-12">
                                                                                                <label class="block"><i
                                                                                                        class="fa fa-user"></i>&nbsp;นามสกุลผู้ป่วย
                                                                                                    (Lastname)
                                                                                                </label>&nbsp;<label
                                                                                                    style="color:red;">*</label>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-sm-12 pa_lname_div">
                                                                                                <input type="text"
                                                                                                    class="form-control required"
                                                                                                    name="lname"
                                                                                                    id="lname"
                                                                                                    placeholder="ระบุนามสกุลผู้ป่วย">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <!--  -->
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 col-xl-3">
                                                                                        <div class="form-group row">
                                                                                            <div class="col-sm-12">
                                                                                                <label class="block"><i
                                                                                                        class="fa fa-user"></i>&nbsp;วันเกิดผู้ป่วย
                                                                                                    (Date of birth)
                                                                                                </label>&nbsp;<label
                                                                                                    style="color:red;">*</label>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-sm-12 pa_age_div">

                                                                                                <input id="dropper-age"
                                                                                                    class="form-control required"
                                                                                                    type="text"
                                                                                                    placeholder="เลือกวันเกิดผู้ป่วย"
                                                                                                    name="pa_age" 
                                                                                                    data-date-format="dd/mm/yyyy"
                                                                                                    autocomplete="off" 
                                                                                                    onchange="getDateAge(this.value)"
                                                                                                    />
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

                                                                                    <div class="col-sm-12 col-xl-6">
                                                                                        <div class="form-group row">
                                                                                            <div class="col-sm-12">
                                                                                                <label class="block"><i
                                                                                                        class="fa fa-phone"></i>&nbsp;เบอร์โทรศัพท์ผู้ป่วย
                                                                                                    (Phone)
                                                                                                </label>&nbsp;<label
                                                                                                    style="color:red;">*
                                                                                                    (หากต้องการระบุหลายเบอร์ให้ใช้
                                                                                                    , คั่น)</label>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-sm-12 pa_phone_div">
                                                                                                <input type="text"
                                                                                                    class="form-control required"
                                                                                                    name="pa_phone"
                                                                                                    id="pa_phone"
                                                                                                    placeholder="ระบุเบอร์โทรศัพท์ผู้ป่วย"
                                                                                                    OnKeyPress="return chkNumber(this)">

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!--  -->
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 col-xl-6">
                                                                                        <div class="form-group row">
                                                                                            <div class="col-sm-12">
                                                                                                <label class="block"><i
                                                                                                        class="fa fa-transgender-alt "></i>&nbsp;เพศผู้ป่วย
                                                                                                    (Sex)
                                                                                                </label>&nbsp;<label
                                                                                                    style="color:red;">*</label>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-sm-12 pa_sex_div">
                                                                                                <select
                                                                                                    class="js-example-basic-single required"
                                                                                                    name="pa_sex"
                                                                                                    id="pa_sex"
                                                                                                    style="width: 700px;">
                                                                                                    <option value=""
                                                                                                        disabled
                                                                                                        selected>
                                                                                                        เลือกเพศ
                                                                                                    </option>
                                                                                                    <option value="ชาย">
                                                                                                        ชาย</option>
                                                                                                    <option
                                                                                                        value="หญิง">
                                                                                                        หญิง</option>
                                                                                                </select>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-sm-12 col-xl-6">
                                                                                        <div class="form-group row">
                                                                                            <div class="col-sm-12">
                                                                                                <label class="block"><i
                                                                                                        class="fa fa-plus-square"></i>&nbsp;สิทธิ์การรักษา
                                                                                                </label>&nbsp;<label
                                                                                                    style="color:red;">*</label>
                                                                                            </div>
                                                                                            <div class="col-sm-12">
                                                                                                <select
                                                                                                    class="js-example-basic-single required"
                                                                                                    name="pay" id="pay"
                                                                                                    style="width: 700px;">
                                                                                                    <option value=""
                                                                                                        disabled
                                                                                                        selected>
                                                                                                        เลือกสิทธิ์การรักษา
                                                                                                    </option>
                                                                                                    @if (is_null($pay))
                                                                                                    @else
                                                                                                    @foreach ($pay as
                                                                                                    $lpay)
                                                                                                    <option
                                                                                                        value="{{ $lpay->id }}">
                                                                                                        {{ $lpay->name }}
                                                                                                    </option>
                                                                                                    @endforeach
                                                                                                    @endif
                                                                                                </select>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                {{--  --}}
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 col-xl-6">
                                                                                        <div class="form-group row">
                                                                                            <div class="col-sm-12">
                                                                                                <label class="block"><i
                                                                                                        class="fa fa-bed"></i>&nbsp;วินิจฉัยโรค
                                                                                                </label>&nbsp;<label
                                                                                                    style="color:red;">*</label>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-sm-12 pa_disease_div">
                                                                                                <input type="text"
                                                                                                    class="form-control required"
                                                                                                    name="disease"
                                                                                                    id="disease"
                                                                                                    placeholder="ระบุโรค">

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-12 col-xl-6">
                                                                                        <div class="form-group row">
                                                                                            <div class="col-sm-12">
                                                                                                <label class="block"><i
                                                                                                        class="fa fa-user-md"></i>&nbsp;อาจารย์แพทย์เจ้าของไข้
                                                                                                </label>&nbsp;<label
                                                                                                    style="color:red;">*</label>
                                                                                            </div>
                                                                                            <div class="col-sm-12">
                                                                                                <select
                                                                                                    class="js-example-basic-single required"
                                                                                                    name="doctor_id"
                                                                                                    id="doctor_id"
                                                                                                    style="width: 700px;">
                                                                                                    <option value=""
                                                                                                        disabled
                                                                                                        selected>
                                                                                                        เลือกอาจารย์แพทย์
                                                                                                    </option>
                                                                                                    @if (is_null($doc))
                                                                                                    @else
                                                                                                    @foreach ($doc as
                                                                                                    $ldoc)
                                                                                                    <option
                                                                                                        value="{{ $ldoc->id }}">
                                                                                                        {{ $ldoc->prefix }}{{ $ldoc->fname }} {{ $ldoc->lname }}
                                                                                                    </option>
                                                                                                    @endforeach
                                                                                                    @endif
                                                                                                </select>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!--  -->




                                                                            </fieldset>

                                                                            <h3> ข้อมูลผู้จอง/ผู้รับผิดชอบผู้ป่วย </h3>
                                                                            <fieldset>
                                                                                <h3 class="sub-title"
                                                                                    style="font-size:16px;font-weight:bold;">
                                                                                    ข้อมูลผู้จอง/ผู้รับผิดชอบผู้ป่วย
                                                                                    ที่สามารถติดต่อได้</h3>
                                                                                <div class="row" style="display: flex;
                                                        justify-content: center;
                                                        align-items: center;">
                                                                                    <!--  -->
                                                                                    <div class="col-sm-12 col-xl-10">
                                                                                        <div class="form-group row">
                                                                                            <div class="col-sm-12">
                                                                                                <label class="block"><i
                                                                                                        class="fa fa-calendar"></i>&nbsp;วันที่ต้องการจองเตียง
                                                                                                    &nbsp;</label><label
                                                                                                    style="color:red;">*</label>
                                                                                            </div>
                                                                                            <div class="col-sm-12">
                                                                                                <input
                                                                                                    id="dropper-default"
                                                                                                    class="form-control required"
                                                                                                    type="text"
                                                                                                    placeholder="กรุณาเลือกวันที่"
                                                                                                    name="reserve_booking"
                                                                                                    data-date-format="dd/mm/yyyy"
                                                                                                    autocomplete="off" />

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!--  -->
                                                                                <div class="row" style="display: flex;
                                                            justify-content: center;
                                                            align-items: center;">
                                                                                    <div class="col-sm-12 col-xl-10">
                                                                                        <div class="form-group row">
                                                                                            <div class="col-sm-12">
                                                                                                <label class="block"><i
                                                                                                        class="fa fa-user-plus"></i>&nbsp;ชื่อผู้กรอกแบบฟอร์มจอง&nbsp;
                                                                                                </label><label
                                                                                                    style="color:red;">*</label>
                                                                                            </div>
                                                                                            <div class="col-sm-12">
                                                                                                <input type="text"
                                                                                                    class="form-control required"
                                                                                                    id="booking_name"
                                                                                                    placeholder="ระบุชื่อผู้รับผิดชอบที่สามารถติดต่อกลับได้"
                                                                                                    value='{{ Auth::user()->prefix }}{{ Auth::user()->fname }} {{ Auth::user()->lname }}'
                                                                                                    readonly>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!--  -->
                                                                                <div class="row" style="display: flex;
                                                            justify-content: center;
                                                            align-items: center;">
                                                                                    <div class="col-sm-12 col-xl-10">
                                                                                        <div class="form-group row">
                                                                                            <div class="col-sm-12">
                                                                                                <label class="block"><i
                                                                                                        class="fa fa-phone"></i>&nbsp;เบอร์โทรผู้กรอกแบบฟอร์มจอง&nbsp;
                                                                                                </label><label
                                                                                                    style="color:red;">*</label>
                                                                                            </div>
                                                                                            <div class="col-sm-12">
                                                                                                <input type="text"
                                                                                                    class="form-control required"
                                                                                                    name="booking_phone"
                                                                                                    id="booking_phone"
                                                                                                    placeholder="ระบุเบอร์โทรติดต่อ"
                                                                                                    value="{{ Auth::user()->phone }}"
                                                                                                    OnKeyPress="return chkNumber(this)"
                                                                                                    readonly>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!--  -->
                                                                                <div class="row" style="display: flex;
                                                            justify-content: center;
                                                            align-items: center;">
                                                                                    <div class="col-sm-12 col-xl-10">
                                                                                        <div class="form-group row">
                                                                                            <div class="col-sm-12">
                                                                                                <label class="block"><i
                                                                                                        class="fa fa-phone"></i>&nbsp;เบอร์โทรหน่วยงาน/สังกัด
                                                                                                    ที่จองเข้ามา&nbsp;
                                                                                                </label><label
                                                                                                    style="color:red;">*</label>
                                                                                            </div>
                                                                                            <div class="col-sm-12">
                                                                                                <input type="text"
                                                                                                    class="form-control required"
                                                                                                    name="" id=""
                                                                                                    readonly
                                                                                                    placeholder="ระบุเบอร์โทรติดต่อ"
                                                                                                    value="{{ Auth::user()->ward->ward_phone }}"
                                                                                                    OnKeyPress="return chkNumber(this)">

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--  -->
                                                                                </div> <!-- row -->



                                                                            </fieldset>
                                                                            <input type="hidden" name="ward_in"
                                                                                value="{{ Auth::user()->ward_id }}">
                                                                            {{-- <input type="hidden" name="ward_create" value="{{ Auth::user()->ward_id }}">
                                                                            --}}

                                                                        </form>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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


    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>

<script type="d8424a08d31b5b8b406fded2-text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.2.27/jquery.autocomplete.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('js/materialize.js') }}"></script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('js/autocomplete.js') }}"></script>

    <!-- <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/jquery.min.js') }}"></script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/jquery-ui.min.js') }}"></script> -->
    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/popper.min.js') }}"></script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('admindek/js/waves.min.js') }}" type="d8424a08d31b5b8b406fded2-text/javascript"></script>

    <script type="d8424a08d31b5b8b406fded2-text/javascript"
        src="{{ asset('admindek/js/jquery.slimscroll.js') }}"></script>

    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/modernizr.js') }}"></script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/css-scrollbars.js') }}"></script>

    <script type="d8424a08d31b5b8b406fded2-text/javascript"
        src="{{ asset('admindek/js/select2.full.min.js') }}"></script>

    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/bootstrap-multiselect.js') }}">
    </script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript"
        src="{{ asset('admindek/js/jquery.multi-select.js') }}"></script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript"
        src="{{ asset('admindek/js/jquery.quicksearch.js') }}"></script>

    <script src="{{ asset('admindek/js/underscore-min.js') }}" type="d8424a08d31b5b8b406fded2-text/javascript"></script>
    <script src="{{ asset('admindek/js/moment.min.js') }}" type="d8424a08d31b5b8b406fded2-text/javascript"></script>
    {{-- <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/validate.js') }}" ></script> --}}

    <script type="d8424a08d31b5b8b406fded2-text/javascript"
        src="{{ asset('admindek/js/moment-with-locales.min.js') }}"></script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript"
        src="{{ asset('admindek/js/bootstrap-datepicker.min.js') }}"></script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript"
        src="{{ asset('admindek/js/bootstrap-datetimepicker.min.js') }}"></script>

    <script type="d8424a08d31b5b8b406fded2-text/javascript"
        src="{{ asset('admindek/js/daterangepicker.js') }}"></script>

    <script type="d8424a08d31b5b8b406fded2-text/javascript"
        src="{{ asset('admindek/js/datedropper.min.js') }}"></script>

    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/spectrum.js') }}"></script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/jscolor.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <script src="{{ asset('js/clock.js') }}"></script>

    <script src="{{ asset('admindek/js/jquery.cookie.js') }}" type="d8424a08d31b5b8b406fded2-text/javascript"></script>
<script src="{{ asset('admindek/js/jquery.steps.js') }}" type="d8424a08d31b5b8b406fded2-text/javascript"></script>
<script src="{{ asset('admindek/js/jquery.validate.js') }}" type="d8424a08d31b5b8b406fded2-text/javascript"></script>
<script src="{{ asset('admindek/js/form-wizard.js') }}" type="d8424a08d31b5b8b406fded2-text/javascript"></script>

    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/custom-picker.js') }}"></script>

    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/select2-custom.js') }}"></script>
    <script src="{{ asset('admindek/js/pcoded.min.js') }}" type="d8424a08d31b5b8b406fded2-text/javascript"></script>
    <script src="{{ asset('admindek/js/vertical-layout.min.js') }}"
        type="d8424a08d31b5b8b406fded2-text/javascript"></script>
    <script src="{{ asset('admindek/js/jquery.mcustomscrollbar.concat.min.js') }}"
        type="d8424a08d31b5b8b406fded2-text/javascript">
    </script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/script.js') }}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
        type="d8424a08d31b5b8b406fded2-text/javascript"></script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript">
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script src="{{ asset('admindek/js/rocket-loader.min.js') }}" data-cf-settings="d8424a08d31b5b8b406fded2-|49"
        defer=""></script>


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

    function minmax(value, min, max)
{
    if(parseInt(value) < min || isNaN(parseInt(value)))
        return min;
    else if(parseInt(value) > max)
        return max;
    else return value;
}


</script>

</body>
</html>
