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


        input[type=text].form-control.valid+label:after,
        input[type=text].form-control:focus.valid+label:after,
        input[type=text].form-control.invalid+label:after,
        input[type=text].form-control:focus.invalid+label:after,
        input[type=password].form-control.valid+label:after,
        input[type=password].form-control:focus.valid+label:after,
        input[type=password].form-control.invalid+label:after,
        input[type=password].form-control:focus.invalid+label:after {
            top: 3.75rem !important;
        }

        span.field-icon {
            position: absolute;
            display: inline-block;
            cursor: pointer;
            right: 0.5rem;
            top: 0.7rem;
            color: black;
            z-index: 2;
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

                                    <li class="active">
                                        <a href="/index-user" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                            </span>
                                            <span class="pcoded-mtext">หน้าหลัก</span>
                                        </a>
                                    </li>

                                    <li class="pcoded-hasmenu">
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
                    <!-- ///////////////////////////////////////////////////////////////////////// -->

                    <div class="pcoded-content">

                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="feather icon-book bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>ข้อมูลส่วนตัว</h5>
                                            <span>กรุณากรอกข้อมูลที่จำเป็น (*) ให้ครบถ้วน</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="/index-user"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">ข้อมูลส่วนตัว</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="pcoded-inner-content">
                            <div class="main-body">
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
                                <div class="page-wrapper">
                                    <div class="page-body" style="display: flex;
                                    justify-content: center;
                                    align-items: center;">

                                        <div class="card" style="width: 70%;">
                                            <div class="card-header">
                                                <h5>ข้อมูลส่วนตัว</h5>
                                            </div>
                                            <div class="card-block">
                                                <form action="/manageprofile" method="POST">
                                                    @csrf

                                                    <input type="hidden" name="manage" value="profile">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label" style="float: right;">คำนำหน้า
                                                                (Prefix)&nbsp;<label
                                                                    style="color:red;float:right;">*</label></label>
                                                        </div>
                                                        <div class="col-sm-6 col-lg-5">
                                                            <div class="input-group">
                                                                <span class="input-group-prepend">
                                                                    <label class="input-group-text"><i
                                                                            class="icofont icofont-user"></i></label>
                                                                </span>
                                                                <select class="form-control" name="prefix" id="prefix"
                                                                    required>

                                                                    <option value="" style="display: none" selected>
                                                                        ..เลือกคำนำหน้า..</option>
                                                                    @forelse ($prefix as $lprefix)
                                                                    <option value="{{ $lprefix->prefix }}"
                                                                        {{ Auth::user()->prefix == $lprefix->prefix ? 'selected' : '' }}>
                                                                        {{ $lprefix->prefix }}</option>
                                                                    @empty

                                                                    @endforelse
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label" style="float: right;">ชื่อจริง
                                                                (Firstname)&nbsp;<label
                                                                    style="color:red;float:right;">*</label></label>
                                                        </div>
                                                        <div class="col-sm-6 col-lg-5">
                                                            <div class="input-group">
                                                                <span class="input-group-prepend">
                                                                    <label class="input-group-text"><i
                                                                            class="icofont icofont-user"></i></label>
                                                                </span>
                                                                <input type="text" class="form-control" name="fname"
                                                                    placeholder="ระบุชื่อจริง"
                                                                    value="{{ Auth::user()->fname }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label" style="float: right;">นามสกุล
                                                                (Lastname)&nbsp;<label
                                                                    style="color:red;float:right;">*</label></label>
                                                        </div>
                                                        <div class="col-sm-6 col-lg-5">
                                                            <div class="input-group">
                                                                <span class="input-group-prepend">
                                                                    <label class="input-group-text"><i
                                                                            class="icofont icofont-user"></i></label>
                                                                </span>
                                                                <input type="text" class="form-control" name="lname"
                                                                    placeholder="ระบุนามสกุล"
                                                                    value="{{ Auth::user()->lname }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label"
                                                                style="float: right;">เบอร์โทรศัพท์
                                                                (Phone)&nbsp;<label
                                                                    style="color:red;float:right;">*</label></label>
                                                        </div>
                                                        <div class="col-sm-6 col-lg-5">
                                                            <div class="input-group">
                                                                <span class="input-group-prepend">
                                                                    <label class="input-group-text"><i
                                                                            class="icofont icofont-phone"></i></label>
                                                                </span>
                                                                <input type="text" class="form-control" name="phone" required
                                                                    placeholder="ระบุเบอร์โทรศัพท์"
                                                                    OnKeyPress="return chkNumber(this)"
                                                                    value="{{ Auth::user()->phone }}">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label"
                                                                style="float: right;">สังกัด&nbsp;<label
                                                                    style="color:red;float:right;">*</label></label>
                                                        </div>
                                                        <div class="col-sm-6 col-lg-5">
                                                            <div class="input-group">
                                                                <span class="input-group-prepend">
                                                                    <label class="input-group-text"><i
                                                                            class="icofont icofont-ui-home"></i></label>
                                                                </span>
                                                                <select name="ward" id="ward" class="form-control" required>
                                                                    <option style="display: none" value="">...เลือกสังกัด...</option>
                                                                    @forelse ($wardall as $lward)
                                                                    <option value="{{ $lward->id }}" {{ Auth::user()->ward_id == $lward->id ? 'selected' : '' }}>{{ $lward->ward_name }}</option>
                                                                    @empty

                                                                    @endforelse
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col"></div>
                                                        <div class="col-md-2">
                                                            <button type="submit" style="width:100%;" id="submitbtn"
                                                                class="btn btn-mat waves-effect waves-light btn-success">บันทึก</button>
                                                        </div>
                                                        <div class="col"></div>
                                                    </div>
                                                </form>
                                                <form action="/manageprofile" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="manage" value="password">

                                                    <div class="card-header">
                                                        <h5>Email & New Password</h5>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label" style="float: right;">อีเมล
                                                                (Email)&nbsp;<label
                                                                    style="color:red;float:right;">*</label></label>
                                                        </div>
                                                        <div class="col-sm-6 col-lg-5">
                                                            <div class="input-group">
                                                                <span class="input-group-prepend">
                                                                    <label class="input-group-text"><i
                                                                            class="icofont icofont-email"></i></label>
                                                                </span>
                                                                <input type="text" class="form-control" name="email" required
                                                                    placeholder="ระบุอีเมล"
                                                                    value="{{ Auth::user()->email }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label" style="float: right;">รหัสผ่านใหม่
                                                                (New Password)&nbsp;<label
                                                                    style="color:red;float:right;">*</label></label>
                                                        </div>
                                                        <div class="col-sm-6 col-lg-5">
                                                            <div class="input-group mb-0">

                                                                <span class="input-group-prepend">
                                                                    <label class="input-group-text"><i
                                                                            class="icofont icofont-lock"></i></label>
                                                                </span>
                                                                <input type="password" name="password" id="input-pwd"
                                                                    class="form-control validate" required
                                                                    placeholder="ระบุรหัสผ่าน"
                                                                    value="{{ Auth::user()->password }}">
                                                                {{-- <span toggle="#input-pwd"
                                                                class="fa fa-fw fa-eye field-icon toggle-password"></span> --}}
                                                            </div>
                                                            <span style="color: red">**รหัสผ่านอย่างน้อย 8 ตัว**</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col"></div>
                                                        <div class="col-md-2">
                                                            <button type="submit" style="width:100%;" id="submitbtn"
                                                                class="btn btn-mat waves-effect waves-light btn-success">บันทึก</button>
                                                        </div>
                                                        <div class="col"></div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ///////////////////////////////////////////////////////// -->
            <div id="styleSelector">
            </div>
        </div>
    </div>

    <script type="461d1add94eeb239155d648f-text/javascript" src="{{ asset('admindek/js/jquery.min.js') }}"></script>
    <script type="461d1add94eeb239155d648f-text/javascript" src="{{ asset('admindek/js/jquery-ui.min.js') }}"></script>
    <script type="461d1add94eeb239155d648f-text/javascript" src="{{ asset('admindek/js/popper.min.js') }}"></script>
    <script type="461d1add94eeb239155d648f-text/javascript" src="{{ asset('admindek/js/bootstrap.min.js') }}"></script>

    <script type="461d1add94eeb239155d648f-text/javascript" src="{{ asset('admindek/js/jquery.slimscroll.js') }}">
    </script>

    <script src="{{ asset('admindek/js/waves.min.js') }}" type="461d1add94eeb239155d648f-text/javascript"></script>

    <script type="461d1add94eeb239155d648f-text/javascript" src="{{ asset('admindek/js/modernizr.js') }}"></script>
    <script type="461d1add94eeb239155d648f-text/javascript" src="{{ asset('admindek/js/css-scrollbars.js') }}"></script>

    <script src="{{ asset('admindek/js/pcoded.min.js') }}" type="461d1add94eeb239155d648f-text/javascript"></script>
    <script src="{{ asset('admindek/js/vertical-layout.min.js') }}" type="461d1add94eeb239155d648f-text/javascript">
    </script>
    <script src="{{ asset('admindek/js/jquery.mcustomscrollbar.concat.min.js') }}"
        type="461d1add94eeb239155d648f-text/javascript">
    </script>
    <script type="461d1add94eeb239155d648f-text/javascript" src="{{ asset('admindek/js/script.js') }}"></script>
    <script src="{{ asset('js/clock.js') }}"></script>
    <script type="461d1add94eeb239155d648f-text/javascript" src="{{ asset('admindek/js/seehide.js') }}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
        type="461d1add94eeb239155d648f-text/javascript"></script>
    <script type="461d1add94eeb239155d648f-text/javascript">
        window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script src="{{ asset('admindek/js/rocket-loader.min.js') }}" data-cf-settings="461d1add94eeb239155d648f-|49"
        defer=""></script>
</body>
<!-- Mirrored from colorlib.com/polygon/admindek/default/sample-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:10:10 GMT -->
<script>
    function chkNumber(ele) {
    var vchar = String.fromCharCode(event.keyCode);
    if ((vchar < '0' || vchar > '9') && (vchar != ',')) return false;
    ele.onKeyPress = vchar;
}
</script>

</html>
