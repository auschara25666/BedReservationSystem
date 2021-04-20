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


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admindek/css/waves.min.css') }}" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/feather.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/themify-icons.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/icofont.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/font-awesome-n.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/fullcalendar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/fullcalendar.print.css') }}" media='print'>

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

    .closeon {
        color: black;
        position: absolute;
        top: 0px;
        right: 0px;
        width: 15px;
        height: 15px;
        text-align: center;
        border-radius: 50%;
        font-size: 10px;
        cursor: pointer;
        background-color: #FFF;
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
                        <a href="/index-superadmin">
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

                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-settings"></i></span>
                                            <span class="pcoded-mtext">จัดสรร Wards</span>
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
                                                    <span class="pcoded-mtext">สิทธิการรักษา</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="/userwards" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">สมาชิก(ผู้ใช้งานของ Ward)</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="/manageuserwards" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">สมาชิก <span style="color: red">(รออนุมัติสิทธิ์)</span></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="active">
                                        <a href="/schedule" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-calendar"></i></i></span>
                                            <span class="pcoded-mtext">ตารางเวร</span>
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
                                        <i class="feather icon-calendar bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>ตารางเวร</h5>
                                            <span>เพิ่ม / ลบ</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="/index-admin" title="หน้าหลัก"><i
                                                        class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">ตารางเวร</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pcoded-inner-content full-calender">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>ปฎิทิน</h5>
                                            </div>
                                            <div class="card-block">
                                                <div class="row">
                                                    <div class="col-xl-2 col-md-12">
                                                        <div id="external-events">
                                                            <h6 class="m-b-30 m-t-20">Events</h6>
                                                            <div class="fc-event ui-draggable ui-draggable-handle">My
                                                                Event 1</div>
                                                            <div class="fc-event ui-draggable ui-draggable-handle">My
                                                                Event 2</div>
                                                            <div class="fc-event ui-draggable ui-draggable-handle">My
                                                                Event 3</div>
                                                            <div class="fc-event ui-draggable ui-draggable-handle">My
                                                                Event 4</div>
                                                            <div class="fc-event ui-draggable ui-draggable-handle">My
                                                                Event 5</div>
                                                            <div class="checkbox-fade fade-in-primary m-t-10">
                                                                <label>
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                        <i
                                                                            class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                    </span>
                                                                    <span>Remove After Drop</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-10 col-md-12">
                                                        <div id='calendar'></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-error">
                                <div class="card text-center">
                                    <div class="card-block">
                                        <div class="m-t-10">
                                            <i class="icofont icofont-warning text-white bg-c-yellow"></i>
                                            <h4 class="f-w-600 m-t-25">Not supported</h4>
                                            <p class="text-muted m-b-0">Full Calendar not supported in this device</p>
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


    <script type="5abfe82e91da83887fe68972-text/javascript" src="{{ asset('admindek/js/jquery.min.js') }}"></script>
    <script type="5abfe82e91da83887fe68972-text/javascript" src="{{ asset('admindek/js/jquery-ui.min.js') }}"></script>
    <script type="5abfe82e91da83887fe68972-text/javascript" src="{{ asset('admindek/js/popper.min.js') }}"></script>
    <script type="5abfe82e91da83887fe68972-text/javascript" src="{{ asset('admindek/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('admindek/js/waves.min.js') }}" type="5abfe82e91da83887fe68972-text/javascript"></script>

    <script type="5abfe82e91da83887fe68972-text/javascript" src="{{ asset('admindek/js/jquery.slimscroll.js') }}"></script>

    <script type="5abfe82e91da83887fe68972-text/javascript" src="{{ asset('admindek/js/modernizr.js') }}"></script>
    <script type="5abfe82e91da83887fe68972-text/javascript" src="{{ asset('admindek/js/css-scrollbars.js') }}"></script>

    <script type="5abfe82e91da83887fe68972-text/javascript" src="{{ asset('admindek/js/classie.js') }}"></script>

    <script type="5abfe82e91da83887fe68972-text/javascript" src="{{ asset('admindek/js/moment.min-2.js') }}"></script>
    <script type="5abfe82e91da83887fe68972-text/javascript" src="{{ asset('admindek/js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('js/clock.js') }}"></script>
    <script type="5abfe82e91da83887fe68972-text/javascript" src="{{ asset('admindek/js/calendar.js') }}"></script>
    <script src="{{ asset('admindek/js/pcoded.min.js') }}" type="5abfe82e91da83887fe68972-text/javascript"></script>
    <script src="{{ asset('admindek/js/vertical-layout.min.js') }}" type="5abfe82e91da83887fe68972-text/javascript"></script>
    <script src="{{ asset('admindek/js/jquery.mcustomscrollbar.concat.min.js') }}" type="5abfe82e91da83887fe68972-text/javascript">
    </script>
    <script type="5abfe82e91da83887fe68972-text/javascript" src="{{ asset('admindek/js/script.js') }}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
        type="5abfe82e91da83887fe68972-text/javascript"></script>
    <script type="5abfe82e91da83887fe68972-text/javascript">
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script src="{{ asset('admindek/js/rocket-loader.min.js') }}" data-cf-settings="5abfe82e91da83887fe68972-|49" defer=""></script>
</body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/event-full-calender.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:10:06 GMT -->

</html>
