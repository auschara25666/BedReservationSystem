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

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('image/Emblem.png') }}" sizes="32x32" />


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/waves.min.css') }}" media="all">

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

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/pages.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script>
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
                                            <span>{{ Auth::user()->prefix }}{{ Auth::user()->fname }}
                                                {{ Auth::user()->lname }}</span>
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
                                            <li class="active">
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
                                        </span>                                                
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

                    <div class="pcoded-content">

                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="feather icon-home bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>สถานะเตียง</h5>
                                            <span>ดูสถานะเตียง และ ดูข้อมูลเตียง</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="/index-chief"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">สถานะเตียง</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <h5 style="font-size: 25px;">จำนวนเตียงทั้งหมด<label style="color:red;">&nbsp;&nbsp;{{ $bed->count()
                                    }}&nbsp;&nbsp;</label>เตียง</h5>
                        </div>
                        <div style="display: flex;justify-content: center;align-items: center;">
                            <div class="col-md-2 waves-effect waves-light p-b-10">
                                <div class=" p-10" style="text-align:center;font-size:18px;background-color: #acd9c7;">ว่าง
                                    {{ $bedavailable->count() }} เตียง
                                </div>
                            </div>
                            <div class="col-md-2 waves-effect waves-light p-b-10">
                                <div class="p-10" style="text-align:center;font-size:18px;background-color: #84cee8;">รอเข้า
                                    {{ $bedwait->count() }} เตียง
                                </div>
                            </div>
                            <div class="col-md-2 waves-effect waves-light p-b-10">
                                <div class=" p-10 " style="text-align:center;font-size:18px;background-color: #fc8476;">ไม่ว่าง
                                    {{ $bedocc->count() }} เตียง
                                </div>
                            </div>
                            <div class="col-md-2 waves-effect waves-light p-b-10">
                                <div class=" p-10 " style="text-align:center;font-size:18px;background-color: #ffd574;">เตรียมออก
                                    {{ $outbed->count() }} เตียง
                                </div>
                            </div>

                            <div class="col-md-2 waves-effect waves-light p-b-10">
                                <div class="bg-inverse  p-10" style="text-align:center;font-size:18px;">งดใช้
                                    {{ $bedout->count() }} เตียง
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
                                                        <!-- <h5>จำนวนเตียงทั้งหมด</h5>
                                                        <h5 style="color:red;">{{ $bed->count() }}</h5>
                                                        <h5>เตียง</h5> -->
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li class="first-opt"><i
                                                                        class="feather icon-chevron-left open-card-option"></i>
                                                                </li>
                                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                                <li><i class="feather icon-minus minimize-card"></i>
                                                                </li>
                                                                <li><i class="feather icon-refresh-cw reload-card"></i>
                                                                </li>
                                                                <li><i class="feather icon-trash close-card"></i></li>
                                                                <li><i
                                                                        class="feather icon-chevron-left open-card-option"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">

                                                        <div class="shortcuts ml-5"
                                                            style="height: 700px;overflow-y: scroll;">
                                                            @if(is_null($bed))

                                                            @else
                                                            @foreach ($bed as $list)

                                                            @if ($list->bed_status == 'ว่าง')
                                                            <a href="javascript:;" class="shortcut text-center"
                                                                data-toggle="modal"
                                                                data-target="#createPatient-{{ $list->id }}"
                                                                style="font-size: 16px"><img
                                                                    src="{{ asset('image/bedAvailable.png') }}"
                                                                    style="max-width:90%;"><span
                                                                    class="shortcut-label">เตียง
                                                                    {{ $list->bed_number }}</span>
                                                            </a>
                                                            {{-- create Patient --}}
                                                            <div class="modal fade" aria-labelledby="myModalLabel"
                                                                id="createPatient-{{ $list->id }}" aria-hidden="true"
                                                                role="dialog">
                                                                <div class="modal-dialog modal-lg modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <form class="form-horizontal"
                                                                            action="{{ route('patient.store') }}"
                                                                            method="post"
                                                                            >
                                                                            @csrf

                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title"><i
                                                                                        class="fa fa-user"></i>
                                                                                    เพิ่มผู้ป่วย (เตียงที่ {{ $list->bed_number }})</h4>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close"><span
                                                                                        aria-hidden="true">&times;</span></button>
                                                                            </div>
                                                                            <div class="modal-body">

                                                                                <div class="card bg-light mb-3">
                                                                                    <div class="card-body">
                                                                                        

                                                                                        <div class="row">
                                                                                            <div class="col-sm-12 col-xl-12">
                                                                                                
        
        
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
                                                                                                            class="form-control hn" required
                                                                                                            placeholder="ระบุ HN"
                                                                                                            autocomplete="off"
                                                                                                            onkeyup="this.value = this.value.toUpperCase();"
                                                                                                            maxlength="6"
                                                                                                            minlength="6">
                                                                                                    </div>
        
                                                                                                </div>
        
                                                                                            </div>
                                                                                        </div>

                                                                                            

                                                                                        <div class="row">
                                                                                            <div class="col-sm-12 col-xl-4">
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
                                                                                                        <select class="form-control prefix"
                                                                                                            name="prefix"
                                                                                                            {{-- id="prefix" --}}
                                                                                                            required>
        
                                                                                                            <option value=""
                                                                                                                style="display: none"
                                                                                                                selected>
                                                                                                                ..เลือกคำนำหน้า..
                                                                                                            </option>
                                                                                                            @forelse ($prefix as
                                                                                                $lprefix)
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
                                                                                                            class="form-control fname" required
                                                                                                            name="fname"
                                                                                                            {{-- id="fname" --}}
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
                                                                                                            class="form-control lname" required
                                                                                                            name="lname"
                                                                                                            {{-- id="lname" --}}
                                                                                                            placeholder="ระบุนามสกุลผู้ป่วย">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group row">
                                                                                            <div class="col-sm-12">
                                                                                                <label class="block"><i
                                                                                                        class="fa fa-credit-card"></i>&nbsp;สิทธิ์การรักษา
                                                                                                    </label>&nbsp;<label
                                                                                                    style="color:red;">*</label>
                                                                                            </div>
                                                                                            <div class="col-sm-12">
                                                                                                <select
                                                                                                    class="js-example-basic-single col-sm-12" name="pay" id="pay"
                                                                                                    style="color: black;width: 100%;" required>

                                                                                                    <option value="" disabled selected>
                                                                                                        กรุณาเลือกสิทธิ์การรักษา
                                                                                                    </option>

                                                                                                    @forelse ($pay as $lpay)

                                                                                                    <option value="{{ $lpay->id }}">{{ $lpay->name }}</option>

                                                                                                    @empty
                                                                                                    @endforelse

                                                                                                </select>

                                                                                            </div>
                                                                                        </div>

                                                                                        
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12 col-xl-12">
                                                                                                
        
        
                                                                                                <label class="block" for="hn"><i
                                                                                                        class="fa fa-h-square"></i>&nbsp;วินิจฉัยโรค
                                                                                                </label>&nbsp;<label
                                                                                                style="color:red;">*</label>
                                                                                                <div
                                                                                                    class="form-group section-search">
        
                                                                                                    <div class="input-field">
                                                                                                        <input type="text"
                                                                                                class="form-control" required
                                                                                                name="disease"
                                                                                                id="disease"
                                                                                                placeholder="ระบุโรค">
                                                                                                    </div>
        
                                                                                                </div>
        
                                                                                            </div>
                                                                                        </div>


                                                                                        <div class="form-group row">
                                                                                            <div class="col-sm-12">
                                                                                                <label class="block"><i
                                                                                                        class="fa fa-user-md"></i>&nbsp;อาจารย์แพทย์เจ้าของไข้
                                                                                                    </label>&nbsp;<label
                                                                                                    style="color:red;">*</label>
                                                                                            </div>
                                                                                            <div class="col-sm-12">
                                                                                                <select
                                                                                                    class="js-example-basic-single"
                                                                                                    name="doctor_id" required
                                                                                                    id="doctor_id"
                                                                                                    style="width: 100%">
                                                                                                    {{-- <option value=""
                                                                                                        style="display: none">
                                                                                                        เลือกอาจารย์แพทย์
                                                                                                    </option> --}}
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
                                                                                                        {{ $ldoc->prefix }}{{ $ldoc->fname }}
                                                                                                        {{ $ldoc->lname }}
                                                                                                    </option>
                                                                                                    @endforeach
                                                                                                    @endif
                                                                                                </select>

                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group row">
                                                                                            <div class="col-sm-12">
                                                                                                <label class="block"><i
                                                                                                        class="fa fa-calendar"></i>&nbsp;วันที่ต้องการจองเตียง
                                                                                                    &nbsp;</label><label
                                                                                                    style="color:red;">*</label>
                                                                                            </div>
                                                                                            <div class="col-sm-12">
                                                                                                <input
                                                                                                    {{-- id="dropper-default" --}}
                                                                                                    class="form-control datemodal required"
                                                                                                    type="text"
                                                                                                    placeholder="กรุณาเลือกวันที่" required
                                                                                                    name="reserve_booking"
                                                                                                    data-date-format="dd/mm/yyyy"
                                                                                                    autocomplete="off" />
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group row">
                                                                                            <div class="col-sm-12">
                                                                                                <label class="block"><i
                                                                                                        class="fa fa-user-md"></i>&nbsp;หัตถการ
                                                                                                    </label>
                                                                                            </div>
                                                                                            <div class="col-sm-12">
                                                                                                <select
                                                                                                    class="js-example-basic-single col-sm-12" name="opt_id" id="opt_id"
                                                                                                    style="color: black;width: 100%;">

                                                                                                    <option value="" disabled selected>
                                                                                                        กรุณาเลือกหัตถการ
                                                                                                    </option>

                                                                                                    @forelse ($opt as $lopt)

                                                                                                    <option value="{{ $lopt->id }}">{{ $lopt->opt_name }}</option>

                                                                                                    @empty
                                                                                                    @endforelse

                                                                                                </select>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>

                                                                                <input type="hidden" name="bed_id"
                                                                                    value="{{ $list->id }}">

                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit"
                                                                                    class="btn btn-warning"
                                                                                    autocomplete="off" id="submitbtn"
                                                                                    > <i
                                                                                        class="glyphicon glyphicon-ok-sign"></i>บันทึก</button>
                                                                                <button type="button"
                                                                                    class="btn btn-danger"
                                                                                    data-dismiss="modal"> <i
                                                                                        class="glyphicon glyphicon-remove-sign"></i>
                                                                                    ปิด</button>
                                                                            </div> <!-- /modal-footer -->
                                                                        </form> <!-- /.form -->


                                                                    </div> <!-- /modal-content -->
                                                                </div> <!-- /modal-dailog -->
                                                            </div>
                                                            {{-- end show Patient --}}

                                                            {{-- @endif --}}
                                                            @elseif ($list->bed_status == 'ไม่ว่าง')
                                                            <a href="javascript:;" class="shortcut text-center"
                                                                data-toggle="modal"
                                                                data-target="#showPatient-{{ $list->id }}"
                                                                style="font-size: 16px"><img
                                                                    src="{{ asset('image/bedOccupied.png') }}"
                                                                    style="max-width:90%;"><span
                                                                    class="shortcut-label">เตียง
                                                                    {{ $list->id }}</span> </a>

                                                            {{-- show Patient --}}
                                                            <div class="modal fade" aria-labelledby="myModalLabel"
                                                                id="showPatient-{{ $list->id }}" tabindex="-1"
                                                                role="dialog">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        @php
                                                                        $pati =
                                                                        \App\Reservation::join('patients',
                                                                        'reservations.patient_id', '=', 'patients.id')
                                                                        ->join('payments', 'patients.pay_id', '=',
                                                                        'payments.id')
                                                                        ->where('reservations.rec_status', '=', '1')
                                                                        ->where('reservations.bed_id',$list->id)
                                                                        ->where('reservations.reserve_status','!=','ยกเลิกจอง')
                                                                        ->select('reservations.id','reservations.patient_id','reservations.opt_id','payments.name','reservations.reserve_booking','reservations.reserve_status','reservations.created_user_id','reservations.doctor_id','reservations.disease')->get();
                                                                        @endphp
                                                                        @php
                                                                        $reserve =
                                                                        \App\Reservation::join('preoperatives','reservations.preopt_id',
                                                                        '=','preoperatives.id')
                                                                        ->where('reservations.bed_id',$list->id)
                                                                        ->where('reservations.reserve_status','!=','ยกเลิกจอง')
                                                                        ->where('reservations.rec_status','1')->get();
                                                                        @endphp
                                                                        @foreach ($pati as $lpati)



                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title"><i
                                                                                    class="fa fa-user"></i>
                                                                                ข้อมูลผู้ป่วย</h4>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal"
                                                                                aria-label="Close"><span
                                                                                    aria-hidden="true">&times;</span></button>
                                                                        </div>
                                                                        <div class="modal-body">

                                                                            {{-- @if ($reservations->rec_status !=
                                                                                0) --}}
                                                                            <div class="card bg-light mb-3">
                                                                                <div class="card-body">
                                                                                    <p class="card-text"
                                                                                        style="font-size: 20px;">
                                                                                        <strong>HN :</strong>
                                                                                        {{ $lpati->patient->hn }}
                                                                                    </p>
                                                                                    <p class="card-text"
                                                                                        style="font-size: 20px;">
                                                                                        <strong>ชื่อผู้ป่วย
                                                                                            :</strong>
                                                                                        {{ $lpati->patient->prefix }}{{ $lpati->patient->fname }}
                                                                                        {{ $lpati->patient->lname }}
                                                                                    </p>
                                                                                    <p class="card-text"
                                                                                        style="font-size: 20px;">
                                                                                        <strong>หัตถการ :</strong>
                                                                                        {{
                                                                                            $lpati->operative->opt_name
                                                                                            }}
                                                                                    </p>
                                                                                    <p class="card-text"
                                                                                        style="font-size: 20px;">
                                                                                        <strong>อาจารย์แพทย์เจ้าของไข้
                                                                                            :</strong>
                                                                                        {{ $lpati->doctor->prefix }}{{ $lpati->doctor->fname }}
                                                                                        {{ $lpati->doctor->lname }}
                                                                                    </p>
                                                                                    <p class="card-text"
                                                                                        style="font-size: 20px;">
                                                                                        <strong>วันที่เข้า
                                                                                            :</strong>
                                                                                        {{
                                                                                            \Carbon\Carbon::parse($lpati->reserve_booking)->format('d-m-Y')
                                                                                            }}
                                                                                    </p>
                                                                                    <p class="card-text"
                                                                                        style="font-size: 20px;">
                                                                                        <strong>วินิจฉัยโรค
                                                                                            :</strong>
                                                                                        {{ $lpati->disease }}
                                                                                    </p>

                                                                                </div>

                                                                                @php
                                                                                $expen =
                                                                                \App\Expenses::where('reserve_id',$lpati->id)->first();
                                                                                @endphp

                                                                                <form
                                                                                    action="{{ route('expenses.store') }}"
                                                                                    method="POST">
                                                                                    @csrf
                                                                                    <div class="card-body border-top">
                                                                                        <div class="col text-center">
                                                                                            <label>สรุปค่าใช้จ่าย</label>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>ค่าใช้จ่ายทั้งหมด</label>
                                                                                            <input type="text"
                                                                                                name="total"
                                                                                                value="{{ $expen->total ?? '0' }}"
                                                                                                required
                                                                                                class="form-control"
                                                                                                OnKeyPress="return chkNumber(this)">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>ค่าใช้จ่ายที่เบิกได้</label>
                                                                                            <input type="text"
                                                                                                name="total_re" required
                                                                                                class="form-control"
                                                                                                value="{{ $expen->total_re ?? '0' }}"
                                                                                                OnKeyPress="return chkNumber(this)">
                                                                                        </div>
                                                                                        <input type="hidden"
                                                                                            name="bed_id"
                                                                                            value="{{ $list->id }}">
                                                                                        <input type="hidden"
                                                                                            name="reserve_id"
                                                                                            value="{{ $lpati->id }}">
                                                                                    </div>
                                                                                    <div class="modal-footer">

                                                                                        <button type="submit"
                                                                                            class="btn btn-primary"
                                                                                            autocomplete="off"> <i
                                                                                                class="glyphicon glyphicon-ok-sign"></i>บันทึกค่าใช้จ่าย</button>
                                                                                    </div>
                                                                                </form>

                                                                            </div>

                                                                            <input type="hidden" name="bed_id"
                                                                                value="{{ $list->id }}">
                                                                            <input type="hidden" name="reserve_id"
                                                                                value="{{ $lpati->id }}">

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-primary"
                                                                                data-toggle="modal"
                                                                                data-target="#movebed-{{ $list->id }}">
                                                                                <i
                                                                                    class="glyphicon glyphicon-remove-sign"></i>
                                                                                ย้ายเตียง</button>
                                                                            <button type="button" class="btn btn-danger"
                                                                                data-dismiss="modal"> <i
                                                                                    class="glyphicon glyphicon-remove-sign"></i>
                                                                                ปิด</button>
                                                                        </div> <!-- /modal-footer -->

                                                                        <!-- Modal ย้ายเตียง-->
                                                                        <div class="modal hide fade"
                                                                            id="movebed-{{ $list->id }}">
                                                                            <div class="modal-dialog modal-sm modal-dialog-centered"">
                                                                                <div class=" modal-content">

                                                                                <!-- Modal Header -->
                                                                                <div class="modal-header"
                                                                                    style="background-color: rgba(146, 197, 255, 0.808)">
                                                                                    <h4 class="modal-title">ย้ายเตียง
                                                                                    </h4>
                                                                                    <button type="button" class="close"
                                                                                        data-dismiss="modal">&times;</button>
                                                                                </div>
                                                                                @php
                                                                                $pati =
                                                                                \App\Reservation::join('patients',
                                                                                'reservations.patient_id', '=',
                                                                                'patients.id')
                                                                                ->join('payments', 'patients.pay_id',
                                                                                '=', 'payments.id')
                                                                                ->where('reservations.rec_status', '=',
                                                                                '1')
                                                                                ->where('reservations.bed_id',$list->id)
                                                                                ->where('reservations.reserve_status','!=','ยกเลิกจอง')
                                                                                ->select('reservations.id','reservations.patient_id','reservations.opt_id','payments.name','reservations.reserve_booking','reservations.reserve_status','reservations.created_user_id','reservations.doctor_id','reservations.disease')->get();
                                                                                @endphp

                                                                                <!-- Modal body -->
                                                                                <div class="modal-body"
                                                                                    style="background-color: rgba(146, 197, 255, 0.178)">
                                                                                    <form action="/movebed"
                                                                                        method="POST">
                                                                                        @csrf
                                                                                        <div class="form-group">
                                                                                            <label>เลือกเตียงที่ต้องการย้าย
                                                                                                :
                                                                                            </label>
                                                                                            <select name="bed_new"
                                                                                                class="js-example-basic-single required"
                                                                                                required
                                                                                                style="width: 100%">
                                                                                                <option value=""
                                                                                                    style="display: none"
                                                                                                    selected disabled>
                                                                                                    ...เลือกเตียงที่ต้องการย้าย...
                                                                                                </option>
                                                                                                @forelse ($bedavailable
                                                                                                as $beditem)
                                                                                                <option
                                                                                                    value="{{ $beditem->id }}">
                                                                                                    เตียงที่
                                                                                                    {{ $beditem->bed_number }}
                                                                                                </option>
                                                                                                @empty

                                                                                                @endforelse
                                                                                            </select>
                                                                                        </div>
                                                                                        <input type="hidden"
                                                                                            name="bed_old"
                                                                                            value="{{ $list->id }}">
                                                                                        <input type="hidden"
                                                                                            name="reserve_id"
                                                                                            value="{{ $lpati->id }}">
                                                                                </div>

                                                                                <!-- Modal footer -->
                                                                                <div class="modal-footer"
                                                                                    style="background-color: rgba(146, 197, 255, 0.808)">
                                                                                    <button type="submit"
                                                                                        class="btn btn-sm btn-success">ย้าย</button>
                                                                                    <button type="button"
                                                                                        class="btn btn-sm btn-danger"
                                                                                        data-dismiss="modal">ปิด</button>
                                                                                </div>
                                                                                </form>

                                                                            </div>
                                                                        </div>
                                                                        <!-- / Modal ย้ายเตียง -->
                                                                    </div>
                                                                    @endforeach

                                                                </div> <!-- /modal-content -->
                                                            </div> <!-- /modal-dailog -->
                                                        </div>
                                                        {{-- end show Patient --}}
                                                        {{-- @endif --}}
                                                        @elseif ($list->bed_status == 'เตรียมออก')
                                                        <a href="javascript:;" class="shortcut text-center"
                                                            data-toggle="modal"
                                                            data-target="#showPatient-{{ $list->id }}"
                                                            style="font-size: 16px"><img
                                                                src="{{ asset('image/bedOut.png') }}"
                                                                style="max-width:90%;"><span
                                                                class="shortcut-label">เตียง
                                                                {{ $list->bed_number }}</span> </a>

                                                        {{-- show Patient --}}
                                                        <div class="modal fade" aria-labelledby="myModalLabel"
                                                            id="showPatient-{{ $list->id }}" tabindex="-1"
                                                            role="dialog">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    @php
                                                                    $pati =
                                                                    \App\Reservation::join('patients',
                                                                    'reservations.patient_id', '=', 'patients.id')
                                                                    ->join('payments', 'patients.pay_id', '=',
                                                                    'payments.id')
                                                                    ->where('reservations.rec_status', '=', '1')
                                                                    ->where('reservations.bed_id',$list->id)
                                                                    ->where('reservations.reserve_status','!=','ยกเลิกจอง')
                                                                    ->select('reservations.id','reservations.patient_id','reservations.opt_id','payments.name','reservations.reserve_booking','reservations.reserve_status','reservations.created_user_id','reservations.doctor_id','reservations.disease')->get();
                                                                    @endphp
                                                                    @php
                                                                    $reserve =
                                                                    \App\Reservation::join('preoperatives','reservations.preopt_id',
                                                                    '=','preoperatives.id')
                                                                    ->where('reservations.bed_id',$list->id)
                                                                    ->where('reservations.reserve_status','!=','ยกเลิกจอง')
                                                                    ->where('reservations.rec_status','1')->get();
                                                                    @endphp
                                                                    @foreach ($pati as $lpati)



                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title"><i
                                                                                class="fa fa-user"></i>
                                                                            ข้อมูลผู้ป่วย</h4>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">&times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        {{-- @if ($reservations->rec_status !=
                                                                                0) --}}
                                                                        <div class="card bg-light mb-3">
                                                                            <div class="card-body">
                                                                                <p class="card-text"
                                                                                    style="font-size: 20px;">
                                                                                    <strong>HN :</strong>
                                                                                    {{ $lpati->patient->hn }}
                                                                                </p>
                                                                                <p class="card-text"
                                                                                    style="font-size: 20px;">
                                                                                    <strong>ชื่อผู้ป่วย
                                                                                        :</strong>
                                                                                    {{ $lpati->patient->prefix }}{{ $lpati->patient->fname }}
                                                                                    {{ $lpati->patient->lname }}

                                                                                </p>
                                                                                <p class="card-text"
                                                                                    style="font-size: 20px;">
                                                                                    <strong>หัตถการ :</strong>
                                                                                    {{
                                                                                            $lpati->operative->opt_name
                                                                                            }}
                                                                                </p>
                                                                                <p class="card-text"
                                                                                    style="font-size: 20px;">
                                                                                    <strong>อาจารย์แพทย์เจ้าของไข้
                                                                                        :</strong>
                                                                                    {{ $lpati->doctor->prefix }}{{ $lpati->doctor->fname }}
                                                                                    {{ $lpati->doctor->lname }}
                                                                                </p>
                                                                                <p class="card-text"
                                                                                    style="font-size: 20px;">
                                                                                    <strong>วันที่เข้า
                                                                                        :</strong>
                                                                                    {{
                                                                                            \Carbon\Carbon::parse($lpati->reserve_booking)->format('d-m-Y')
                                                                                            }}
                                                                                </p>
                                                                                <p class="card-text"
                                                                                    style="font-size: 20px;">
                                                                                    <strong>วินิจฉัยโรค
                                                                                        :</strong>
                                                                                    {{ $lpati->disease }}
                                                                                </p>

                                                                            </div>
                                                                            @php
                                                                            $expen =
                                                                            \App\Expenses::where('reserve_id',$lpati->id)->first();
                                                                            @endphp

                                                                            <form
                                                                                action="{{ route('expenses.update',$expen->id) }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                {{ method_field('patch') }}
                                                                                <div class="card-body border-top">
                                                                                    <div class="col text-center">
                                                                                        <label>สรุปค่าใช้จ่าย</label>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>ค่าใช้จ่ายทั้งหมด</label>
                                                                                        <input type="text" name="total"
                                                                                            value="{{ $expen->total }}"
                                                                                            required
                                                                                            class="form-control"
                                                                                            OnKeyPress="return chkNumber(this)">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>ค่าใช้จ่ายที่เบิกได้</label>
                                                                                        <input type="text"
                                                                                            name="total_re" required
                                                                                            class="form-control"
                                                                                            value="{{ $expen->total_re }}"
                                                                                            OnKeyPress="return chkNumber(this)">
                                                                                    </div>

                                                                                </div>
                                                                                <div class="modal-footer">

                                                                                    <button type="submit"
                                                                                        class="btn btn-primary"
                                                                                        autocomplete="off"> <i
                                                                                            class="glyphicon glyphicon-ok-sign"></i>บันทึกค่าใช้จ่าย</button>
                                                                                </div>
                                                                            </form>

                                                                        </div>
                                                                        <form class="form-horizontal"
                                                                            action="{{ route('event.update',$lpati->id) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            {{ method_field('patch') }}

                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                  <span class="input-group-text bg-secondary">ภาวะแทรกซ้อน</span>
                                                                                </div>
                                                                                <input type="text" name="complication" class="form-control">

                                                                              </div>



                                                                    </div>


                                                                    <div class="modal-footer">


                                                                            <input type="hidden" name="bed_id"
                                                                                value="{{ $list->id }}">
                                                                            <input type="hidden" name="reserve_id"
                                                                                value="{{ $lpati->id }}">
                                                                            <input type="hidden" name="expen_id"
                                                                                value="{{ $expen->id }}">

                                                                            <button type="submit"
                                                                                class="btn btn-warning"
                                                                                autocomplete="off"> <i
                                                                                    class="glyphicon glyphicon-ok-sign"></i>จำหน่าย</button>

                                                                            </form> <!-- /.form -->
                                                                            <form class="form-horizontal" action="/stay"
                                                                            method="post">
                                                                            @csrf

                                                                            <input type="hidden" name="bed_id"
                                                                                value="{{ $list->id }}">
                                                                            <input type="hidden" name="reserve_id"
                                                                                value="{{ $lpati->id }}">

                                                                            <button type="submit"
                                                                                class="btn btn-primary"
                                                                                autocomplete="off"> <i
                                                                                    class="glyphicon glyphicon-ok-sign"></i>อยู่ต่อ</button>

                                                                        </form>
                                                                        <button type="button" class="btn btn-danger"
                                                                        data-dismiss="modal"> <i
                                                                            class="glyphicon glyphicon-remove-sign"></i>
                                                                        ปิด</button>
                                                                    </div> <!-- /modal-footer -->
                                                                    @endforeach

                                                                </div> <!-- /modal-content -->
                                                            </div> <!-- /modal-dailog -->
                                                        </div>
                                                        {{-- end show Patient --}}
                                                        {{-- @endif --}}
                                                        @elseif ($list->bed_status == 'รอเข้า')
                                                        <a href="javascript:;" class="shortcut text-center"
                                                            data-toggle="modal" data-target="#enterBed-{{ $list->id }}"
                                                            style="font-size: 16px"><img
                                                                src="{{ asset('image/bedWait.png') }}"
                                                                style="max-width:90%;"><span
                                                                class="shortcut-label">เตียง
                                                                {{ $list->bed_number }}</span> </a>
                                                        <!-- modal เข้าเตียง -->
                                                        <div class="modal fade" aria-labelledby="myModalLabel"
                                                            id="enterBed-{{ $list->id }}" tabindex="-1" role="dialog">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    @php
                                                                    $pati = \App\Reservation::join('patients',
                                                                    'reservations.patient_id', '=', 'patients.id')
                                                                    ->join('payments', 'patients.pay_id',
                                                                    '=','payments.id')
                                                                    ->where('reservations.rec_status', '=', '1')
                                                                    ->where('reservations.bed_id',$list->id)
                                                                    ->where('reservations.reserve_status','!=','ยกเลิกจอง')
                                                                    ->select('reservations.id','reservations.patient_id','reservations.opt_id','payments.name','reservations.reserve_booking','reservations.reserve_status','reservations.created_user_id','reservations.doctor_id','reservations.disease')->get();
                                                                    @endphp
                                                                    @foreach ($pati as $lpati)

                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title"><i
                                                                                class="fa fa-user"></i>
                                                                            ข้อมูลผู้ป่วย</h4>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">&times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        {{-- @if ($reservations->rec_status !=
                                                                                0) --}}
                                                                        <div class="card bg-light mb-3">
                                                                            <div class="card-body">
                                                                                <p class="card-text"
                                                                                    style="font-size: 20px;">
                                                                                    <strong>HN :</strong>
                                                                                    {{ $lpati->patient->hn }}
                                                                                </p>
                                                                                <p class="card-text"
                                                                                    style="font-size: 20px;">
                                                                                    <strong>ชื่อผู้ป่วย
                                                                                        :</strong>
                                                                                    {{ $lpati->patient->prefix }}{{ $lpati->patient->fname }}
                                                                                    {{ $lpati->patient->lname }}

                                                                                </p>
                                                                                @if ($lpati->operative != null)
                                                                                <p class="card-text"
                                                                                style="font-size: 20px;">
                                                                                <strong>หัตถการ :</strong>
                                                                                {{
                                                                                        $lpati->operative->opt_name ?? ''
                                                                                        }}
                                                                            </p>
                                                                                @else
                                                                                    
                                                                                @endif

                                                                                <p class="card-text"
                                                                                    style="font-size: 20px;">
                                                                                    <strong>อาจารย์แพทย์เจ้าของไข้
                                                                                        :</strong>
                                                                                    {{ $lpati->doctor->prefix }}{{ $lpati->doctor->fname }}
                                                                                    {{ $lpati->doctor->lname }}
                                                                                </p>
                                                                                <p class="card-text"
                                                                                    style="font-size: 20px;">
                                                                                    <strong>วันที่เข้า
                                                                                        :</strong>
                                                                                    {{
                                                                                            \Carbon\Carbon::parse($lpati->reserve_booking)->format('d-m-Y')
                                                                                            }}
                                                                                </p>
                                                                                <p class="card-text"
                                                                                    style="font-size: 20px;">
                                                                                    <strong>วินิจฉัยโรค
                                                                                        :</strong>
                                                                                    {{ $lpati->disease }}
                                                                                </p>

                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-warning"
                                                                            data-toggle="modal"
                                                                            data-target="#movebed-{{ $list->id }}">
                                                                            <i
                                                                                class="glyphicon glyphicon-remove-sign"></i>
                                                                            ย้ายเตียง</button>

                                                                        <form class="form-horizontal" action="/enterbed"
                                                                            method="post">
                                                                            @csrf


                                                                            <input type="hidden" name="bed_id"
                                                                                value="{{ $list->id }}">
                                                                            <input type="hidden" name="reserve_id"
                                                                                value="{{ $lpati->id }}">
                                                                            <button type="submit"
                                                                                class="btn btn-primary"
                                                                                autocomplete="off"> <i
                                                                                    class="glyphicon glyphicon-ok-sign"></i>เข้าเตียง</button>
                                                                        </form> <!-- /.form -->

                                                                        <button type="button" class="btn btn-danger"
                                                                            data-dismiss="modal"> <i
                                                                                class="glyphicon glyphicon-remove-sign"></i>
                                                                            ปิด</button>
                                                                    </div> <!-- /modal-footer -->

                                                                    <!-- Modal ย้ายเตียง-->
                                                                    <div class="modal hide fade"
                                                                        id="movebed-{{ $list->id }}">
                                                                        <div
                                                                            class="modal-dialog modal-sm modal-dialog-centered">
                                                                            <div class=" modal-content">

                                                                                <!-- Modal Header -->
                                                                                <div class="modal-header"
                                                                                    style="background-color: rgba(146, 197, 255, 0.808)">
                                                                                    <h4 class="modal-title">ย้ายเตียง
                                                                                    </h4>
                                                                                    <button type="button" class="close"
                                                                                        data-dismiss="modal">&times;</button>
                                                                                </div>
                                                                                @php
                                                                                $pati =
                                                                                \App\Reservation::join('patients',
                                                                                'reservations.patient_id', '=',
                                                                                'patients.id')
                                                                                ->join('payments', 'patients.pay_id',
                                                                                '=',
                                                                                'payments.id')
                                                                                ->where('reservations.rec_status', '=',
                                                                                '1')
                                                                                ->where('reservations.bed_id',$list->id)
                                                                                ->where('reservations.reserve_status','!=','ยกเลิกจอง')
                                                                                ->select('reservations.id','reservations.patient_id','reservations.opt_id','payments.name','reservations.reserve_booking','reservations.reserve_status','reservations.created_user_id','reservations.doctor_id','reservations.disease')->get();
                                                                                @endphp

                                                                                <!-- Modal body -->
                                                                                <div class="modal-body"
                                                                                    style="background-color: rgba(146, 197, 255, 0.178)">
                                                                                    <form action="/movebed"
                                                                                        method="POST">
                                                                                        @csrf
                                                                                        <div class="form-group">
                                                                                            <label>เลือกเตียงที่ต้องการย้าย
                                                                                                :
                                                                                            </label>
                                                                                            <select name="bed_new"
                                                                                                class="js-example-basic-single required"
                                                                                                required
                                                                                                style="width: 100%">
                                                                                                <option value=""
                                                                                                    style="display: none"
                                                                                                    selected disabled>
                                                                                                    ...เลือกเตียงที่ต้องการย้าย...
                                                                                                </option>
                                                                                                @forelse ($bedavailable
                                                                                                as $beditem)
                                                                                                <option
                                                                                                    value="{{ $beditem->id }}">
                                                                                                    เตียงที่
                                                                                                    {{ $beditem->bed_number }}
                                                                                                </option>
                                                                                                @empty

                                                                                                @endforelse
                                                                                            </select>
                                                                                        </div>
                                                                                        <input type="hidden"
                                                                                            name="bed_old"
                                                                                            value="{{ $list->id }}">
                                                                                        <input type="hidden"
                                                                                            name="reserve_id"
                                                                                            value="{{ $lpati->id }}">
                                                                                </div>

                                                                                <!-- Modal footer -->
                                                                                <div class="modal-footer"
                                                                                    style="background-color: rgba(146, 197, 255, 0.808)">
                                                                                    <button type="submit"
                                                                                        class="btn btn-sm btn-success">ย้าย</button>
                                                                                    <button type="button"
                                                                                        class="btn btn-sm btn-danger"
                                                                                        data-dismiss="modal">ปิด</button>
                                                                                </div>
                                                                                </form>

                                                                            </div>
                                                                        </div>
                                                                        <!-- / Modal ย้ายเตียง -->
                                                                    </div>
                                                                    @endforeach

                                                                </div> <!-- /modal-content -->
                                                            </div> <!-- /modal-dailog -->
                                                        </div>
                                                        <!-- /modal เข้าเตียง -->
                                                        {{-- @endif --}}
                                                        @else ($list->bed_status == 'งดใช้')
                                                        <a href="javascript:;" class="shortcut text-center"
                                                            style="font-size: 16px" data-toggle="modal"
                                                            data-target="#editbed{{ $list->id }}"><img
                                                                src="{{ asset('image/bedDamage.png') }}"
                                                                style="max-width:90%;"><span
                                                                class="shortcut-label">เตียง
                                                                {{ $list->bed_number }}</span> </a>

                                                        <!-- แก้ไขเตียงชำรุด -->
                                                        <div class="modal fade" id="editbed{{ $list->id }}">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">

                                                                    <!-- Modal Header -->
                                                                    <div class="modal-header">เปิดใช้งานเตียง</h4>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal">&times;</button>
                                                                    </div>

                                                                    <!-- Modal body -->
                                                                    <div class="modal-body text-center">
                                                                        <span class="font-weight-bold"
                                                                            style="font-size: 20px">เปิดใช้งานเตียง
                                                                            <span
                                                                                style="color: red">{{ $list->bed_number }}</span></span>
                                                                    </div>

                                                                    <!-- Modal footer -->
                                                                    <div class="modal-footer">
                                                                        <form action="/editbed" method="post">
                                                                            @csrf
                                                                            <input type="hidden" name="bed_id"
                                                                                value="{{ $list->id }}">
                                                                            <button type="submit"
                                                                                class="btn btn-block btn-primary">เปิดใช้งานเตียง</button>
                                                                        </form>
                                                                        <button type="button" class="btn btn-danger"
                                                                            data-dismiss="modal">ปิด</button>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /แก้ไขเตียงชำรุด -->

                                                        @endif


                                                        @endforeach
                                                        @endif
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

    <script type="d8424a08d31b5b8b406fded2-text/javascript"
    src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.2.27/jquery.autocomplete.min.js">
    </script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('js/materialize.js') }}"></script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('js/autocompleteModal.js') }}"></script>


    {{-- <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/jquery.min.js') }}"></script> --}}
    {{-- <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/jquery-ui.min.js') }}"></script> --}}
    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/popper.min.js') }}"></script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('admindek/js/waves.min.js') }}" type="d8424a08d31b5b8b406fded2-text/javascript"></script>

    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/jquery.slimscroll.js') }}">
    </script>






    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/modernizr.js') }}"></script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/css-scrollbars.js') }}"></script>

    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/select2.full.min.js') }}">
    </script>

    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/bootstrap-multiselect.js') }}">
    </script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/jquery.multi-select.js') }}">
    </script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/jquery.quicksearch.js') }}">
    </script>

    <script src="{{ asset('admindek/js/underscore-min.js') }}" type="d8424a08d31b5b8b406fded2-text/javascript"></script>
    <script src="{{ asset('admindek/js/moment.min.js') }}" type="d8424a08d31b5b8b406fded2-text/javascript"></script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/validate.js') }}"></script>

    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/moment-with-locales.min.js') }}">
    </script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript"
        src="{{ asset('admindek/js/bootstrap-datepicker.min.js') }}"></script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript"
        src="{{ asset('admindek/js/bootstrap-datetimepicker.min.js') }}"></script>

    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/daterangepicker.js') }}">
    </script>

    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/datedropper.min.js') }}">
    </script>
    <script src="{{ asset('js/clock.js') }}"></script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/spectrum.js') }}"></script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/jscolor.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/custom-picker.js') }}"></script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/form-validation.js') }}">
    </script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/select2-custom.js') }}"></script>
    <script src="{{ asset('admindek/js/pcoded.min.js') }}" type="d8424a08d31b5b8b406fded2-text/javascript"></script>
    <script src="{{ asset('admindek/js/vertical-layout.min.js') }}" type="d8424a08d31b5b8b406fded2-text/javascript">
    </script>
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

    <script>
        

        function chkNumber(ele) {
            var vchar = String.fromCharCode(event.keyCode);
            if ((vchar < '0' || vchar > '9') && (vchar != ',')) return false;
            ele.onKeyPress = vchar;
        }
    </script>

    
</body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/sample-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:10:10 GMT -->

</html>