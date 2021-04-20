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

    <link rel="stylesheet" href="{{ asset('admindek/css/waves.min.css" type="text/css') }}" media="all">

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
                                <div class="dropdown-primary dropdown">
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
                                </div>
                            </li>

                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{ asset('admindek/jpg/avatar-4.jpg') }}" class="img-radius"
                                            alt="User-Profile-Image">
                                        <span>{{ Auth::user()->name }}</span>
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
                                            <span class="pcoded-mtext">จัดสรรเตียง</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="/bedstatus-nurse" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">สถานะเตียง</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="/normalreserv-nurse" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">รายการจอง</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="/approvedreserv-nurse" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">รายการอนุมัติแล้ว</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="active">
                                        <a href="/operativenurse" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-calendar"></i></i></span>
                                            <span class="pcoded-mtext">จองเตียง</span>
                                        </a>
                                    </li>

                                    {{-- <li class="">
                                        <a href="/ward-statistic" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-calendar"></i></i></span>
                                            <span class="pcoded-mtext">สถิติ</span>
                                        </a>
                                    </li> --}}

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

                                                <div class="mt-5" align="center">

                                                    <p style="font-size: 24px"><b>กรุณาเลือกหัตถการ</b></p>

                                                    <p style="font-size: 16px;color :red;padding-top: 2px">**ก่อนทำการจอง**</p>

                                                    <select class="js-example-basic-single col-sm-12" name="opt" id="opt" style="width: 50%"
                                                        onchange="window.location.href='formreserv-nurse/'+this.value">

                                                        <option value="" display="none" disabled selected>..กรุณาเลือกหัตถการ..</option>

                                                        @forelse ($opt as $lopt)

                                                        <option value="{{ $lopt->id }}">{{ $lopt->opt_name }}</option>

                                                        @empty



                                                        @endforelse

                                                    </select>

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
        </div>
    </div>

    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/jquery.min.js') }}"></script>
    <script type="d8424a08d31b5b8b406fded2-text/javascript" src="{{ asset('admindek/js/jquery-ui.min.js') }}"></script>
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
</body>
<!-- Mirrored from colorlib.com/polygon/admindek/default/sample-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:10:10 GMT -->
<script>
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

</html>
