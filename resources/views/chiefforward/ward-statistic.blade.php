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

    <link rel="stylesheet" href="{{ asset('admindek/css/select2.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/bootstrap-multiselect.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/multi-select.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/bootstrap-datetimepicker.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/daterangepicker.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('admindek/css/datedropper.min.css') }}" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>





    <style>
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
                        <a href="/index-chief">
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
                                        <a href="/index-chief" class="waves-effect waves-dark">
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
                                                <a href="/bedstatus" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">สถานะเตียง</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="/normalreserv" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">รายการจอง
                                                        @if ($reserve->isNotEmpty())
                                                        <span class="badge badge-danger">New
                                                            {{ $reserve->count() }}</span>
                                                        @endif
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="/approvedreserv" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">รายการอนุมัติแล้ว</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="">
                                        <a href="/formreserv" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-calendar"></i></i></span>
                                            <span class="pcoded-mtext">จองเตียง</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a href="/managepatient" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-user"></i></i></span>
                                            <span class="pcoded-mtext">ผู้ป่วย</span>
                                        </a>
                                    </li>

                                    <li class="active">
                                        <a href="/ward-statistic" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-calendar"></i></i></span>
                                            <span class="pcoded-mtext">สถิติ</span>
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
                                            <h5>สถิติ</h5>
                                            <span>แสดงรายการจำหน่ายผู้ป่วย</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.php"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">สถิติ</a> </li>
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
                                                    </div>
                                                    <div
                                                        style="display: flex;justify-content: center;align-items: center;">

                                                        <div class="input-group"
                                                            style="display: flex;justify-content: center;align-items: center;">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text text-bold">เลือกวันที่ <i
                                                                        class="fa fa-calendar"></i></span>
                                                            </div>
                                                            <input type="text" id="search" name="search"
                                                                class="form-control" style="max-width: 250px"
                                                                placeholder="เลือกวันที่..." 
                                                                title="เลือกวันที่">
                                                        </div>
                                                        <div class="input-group"
                                                            style="display: flex;justify-content: center;align-items: center;">
                                                            <div class="input-group-prepend">
                                                                <span
                                                                    class="input-group-text text-bold">เลือกประเภทรายงาน
                                                                    <i class="fa fa-calendar"></i></span>
                                                            </div>
                                                            <select name="choiceReport" id="choiceReport"
                                                                style="max-width: 250px" title="เลือกประเภทรายงาน"
                                                                class="form-control" required>
                                                                <option value="0" disabled selected>เลือก...</option>
                                                                <option value="1">วินิจฉัยโรค</option>
                                                                <option value="2">หัตถการ</option>
                                                            </select>

                                                            <select name="opt" id="opt" style="display:none;"
                                                                title="เลือกหัตถการ" class="form-control">
                                                                <option value="0" selected>หัตถการทั้งหมด</option>
                                                                @forelse ($opt as $lopt)
                                                                <option value="{{ $lopt->id }}">{{ $lopt->opt_name }}</option>
                                                                @empty
                                                                @endforelse

                                                            </select>

                                                            
                                                        </div>
  

                                                    </div>
                                                    <div
                                                        style="display: flex;justify-content: center;align-items: center;">
                                                        <div style="width: 200px;">
                                                            <button type='button'
                                                                class="btn waves-effect waves-light btn-info btn-round btn-block"
                                                                id='but_search'><i
                                                                    class="fa fa-search"></i>ค้นหา</button>
                                                            <br />
                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5>แผนภูมิแสดงการจัดสรรเตียง</h5>
                                                            <span></span>
                                                        </div>
                                                        <div class="card-block">
                                                            <div id="chart_Combo" style="width: 100%; height: 400px;">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card-block">
                                                        <div
                                                            style="display: flex;justify-content: center;align-items: center;">
                                                            <button class="btn btn-primary"
                                                                style="margin: 10px;" id="btnExport">EXPORT
                                                                EXCEL</button>
                                                        </div>
                                                        <div class="table-responsive">

                                                            <table class="table table-striped table-bordered nowrap"
                                                                id='empTable'>
                                                                <thead>

                                                                </thead>
                                                                <tbody>

                                                                </tbody>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    {{-- <script type="d8424a08d31b5b8b406fded2-text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}
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



    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/loader.js') }}"></script>

    {{-- <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/custom-google-chart.js') }}">
    </script> --}}

    {{-- ////////////////////////////////////////////////////////////////////////// --}}
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
        type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
    <script src="{{ asset('admindek/js/datatables.responsive.min.js') }}"
        type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
    <script src="{{ asset('admindek/js/responsive.bootstrap4.min.js') }}"
        type="d28fd8086f5eb18f81d8672a-text/javascript"></script>

    <script src="{{ asset('admindek/js/data-table-custom.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript">
    </script>
    <script src="{{ asset('admindek/js/classie.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/modaleffects.js') }}"></script>
    {{-- /////////////////////////////////////////////////////////////////////////////// --}}
    <script src="{{ asset('js/clock.js') }}" ></script>
    <script src="{{ asset('admindek/js/pcoded.min.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript"></script>
    <script src="{{ asset('admindek/js/vertical-layout.min.js') }}" type="d28fd8086f5eb18f81d8672a-text/javascript">
    </script>
    <script src="{{ asset('admindek/js/jquery.mcustomscrollbar.concat.min.js') }}"
        type="d28fd8086f5eb18f81d8672a-text/javascript">
    </script>
    <script type="d28fd8086f5eb18f81d8672a-text/javascript" src="{{ asset('admindek/js/script.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>



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
        $("#choiceReport").change(function () {
            if ($(this).val() == 2) {
                $("#opt").show();
            } else {
                $("#opt").hide();
            }

        });
    </script>

    <script type='text/javascript'>
        $(document).ready(function () {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            window.onload = function () {
                $.ajax({
                    url: '/ward-statistic/getEvent',
                    type: 'get',
                    dataType: 'json',
                    success: function (response) {

                        createRows(response);
                        drawVisualization(response);
                    }
                });

                startTime();
            }

            $('#but_search').click(function () {

                var date = $('#search').val();
                var datesplit = date.split(' - ');
                var dateFrom = datesplit[0];
                var dateTo = datesplit[1];
                if (dateFrom != '' && dateTo != '') {
                    // AJAX POST request
                    $.ajax({
                        url: '/ward-statistic/getEventbyDate',
                        type: 'post',
                        data: {
                            _token: CSRF_TOKEN,
                            dateFrom: dateFrom,
                            dateTo: dateTo
                        },
                        dataType: 'json',
                        success: function (response) {

                            createRows(response);
                            drawVisualization(response);
                        }
                    });
                }
            });
        });

        // Create table rows
        function createRows(response) {
            var getChoice = document.getElementById("choiceReport");
            var valueChoice = getChoice.options[getChoice.selectedIndex].value;
            //  console.log(valueChoice);

            var getChoiceOPT = document.getElementById("opt");
            var valueChoiceOPT = getChoiceOPT.options[getChoiceOPT.selectedIndex].value;
            // console.log(valueChoiceOPT);


            var len = 0;
            var countApprove = 0;
            var countDis = 0;
            var countCel = 0;
            $('#empTable thead').empty();
            $('#empTable tbody').empty(); // Empty <tbody>
            if (response['data'] != null) {
                len = response['data'].length;
            }

            if(valueChoice == 2){
                if (len > 0) {

                    var tr_thead = "<tr>" +
                        "<th style='item-align:center;'>ลำดับ</th>" +
                        "<th style='item-align:center;'>HN</th>" +
                        "<th style='item-align:center;'>ชื่อ-นามสกุล</th>" +
                        "<th style='item-align:center;'>อายุ</th>" +
                        "<th style='item-align:center;'>หัตถการ</th>" +
                        "<th style='item-align:center;'>ภาวะแทรกซ้อน</th>" +
                        "<th style='item-align:center;'>ค่าใช้จ่าย</th>" +
                        "</tr>";
                    $("#empTable thead").append(tr_thead);
                    var n = 0;
                    for (var i = 0; i < len; i++) {


                            var event_status = response['data'][i].event_status;
                            var opt_id = response['data'][i].id;


                            if(event_status == "3" && valueChoiceOPT == opt_id){
                            var date = response['data'][i].date;
                            var hn = response['data'][i].hn;
                            var prefix = response['data'][i].prefix;
                            var pa_fname = response['data'][i].fname;
                            var pa_lname = response['data'][i].lname;
                            var pa_birthday = response['data'][i].birthday;
                            
                            var opt_name = response['data'][i].opt_name;
                            var complication = response['data'][i].complication;
                            if (complication == null){ complication = "-";}
                            var total = response['data'][i].total;
                            
                            ////cut BD
                            var cutBD = pa_birthday.split('-');
                                function calculate_age(dob) {
                                var diff_ms = Date.now() - dob.getTime();
                                var age_dt = new Date(diff_ms); 
                                return Math.abs(age_dt.getUTCFullYear() - 1970);
                                }
                                var age_pa = calculate_age(new Date(cutBD[0],cutBD[1],cutBD[2]));
                            ////

                            var tr_str = "<tr>" +
                                "<td align='center'>" + (n + 1) + "</td>" +
                                "<td align='center'>" + hn + "</td>" +
                                "<td align='center'>" + prefix + pa_fname + "&nbsp;" + pa_lname + "</td>" +
                                "<td align='center'>" + age_pa + "</td>" +
                                "<td align='center'>" + opt_name + "</td>" +
                                "<td align='center'>" + complication + "</td>" +
                                "<td align='center'>" + total + "</td>" +
                                "</tr>";

                            $("#empTable tbody").append(tr_str);

                            n++;

                        }
                        if (event_status == "3" && valueChoiceOPT == "0"){
                            var date = response['data'][i].date;
                            var hn = response['data'][i].hn;
                            var prefix = response['data'][i].prefix;
                            var pa_fname = response['data'][i].fname;
                            var pa_lname = response['data'][i].lname;
                            var pa_birthday = response['data'][i].birthday;
                            
                            var opt_name = response['data'][i].opt_name;
                            var complication = response['data'][i].complication;
                            if (complication == null){ complication = "-";}
                            var total = response['data'][i].total;
                            
                            ////cut BD
                            var cutBD = pa_birthday.split('-');
                                function calculate_age(dob) {
                                var diff_ms = Date.now() - dob.getTime();
                                var age_dt = new Date(diff_ms); 
                                return Math.abs(age_dt.getUTCFullYear() - 1970);
                                }
                                var age_pa = calculate_age(new Date(cutBD[0],cutBD[1],cutBD[2]));
                            ////

                            var tr_str = "<tr>" +
                                "<td align='center'>" + (n + 1) + "</td>" +
                                "<td align='center'>" + hn + "</td>" +
                                "<td align='center'>" + prefix + pa_fname + "&nbsp;" + pa_lname + "</td>" +
                                "<td align='center'>" + age_pa + "</td>" +
                                "<td align='center'>" + opt_name + "</td>" +
                                "<td align='center'>" + complication + "</td>" +
                                "<td align='center'>" + total + "</td>" +
                                "</tr>";

                                $("#empTable tbody").append(tr_str);
                            n++;
                        }
                
            

                        
                    }

                } else {

                    var tr_thead = "<tr>" +
                        "<th style='item-align:center;'>ลำดับ</th>" +
                        "<th style='item-align:center;'>HN</th>" +
                        "<th style='item-align:center;'>ชื่อ-นามสกุล</th>" +
                        "<th style='item-align:center;'>อายุ</th>" +
                        "<th style='item-align:center;'>หัตถการ</th>" +
                        "<th style='item-align:center;'>ภาวะแทรกซ้อน</th>" +
                        "<th style='item-align:center;'>ค่าใช้จ่าย</th>" +
                        "</tr>";

                    var tr_str = "<tr>" +
                        "<td align='center' colspan='7'>ไม่พบข้อมูล.</td>" +
                        "<td style='display: none'></td>" +
                        "<td style='display: none'></td>" +
                        "<td style='display: none'></td>" +
                        "<td style='display: none'></td>" +
                        "<td style='display: none'></td>" +
                        "<td style='display: none'></td>" +
                        "</tr>";

                    $("#empTable thead").append(tr_thead);
                    $("#empTable tbody").append(tr_str);
                }
            } else if(valueChoice == 1){

                if (len > 0) {

                    var tr_thead = "<tr>" +
                        "<th style='item-align:center;'>ลำดับ</th>" +
                        "<th style='item-align:center;'>HN</th>" +
                        "<th style='item-align:center;'>ชื่อ-นามสกุล</th>" +
                        "<th style='item-align:center;'>อายุ</th>" +
                        "<th style='item-align:center;'>วินิจฉัยโรค</th>" +
                        "<th style='item-align:center;'>ภาวะแทรกซ้อน</th>" +
                        "<th style='item-align:center;'>ค่าใช้จ่าย</th>" +
                        "</tr>";
                    $("#empTable thead").append(tr_thead);
                    var n = 0;
                    for (var i = 0; i < len; i++) {

                            var event_status = response['data'][i].event_status;

                            if(event_status == "3"){
                                
                            var date = response['data'][i].date;
                            var hn = response['data'][i].hn;
                            var prefix = response['data'][i].prefix;
                            var pa_fname = response['data'][i].fname;
                            var pa_lname = response['data'][i].lname;
                            var pa_birthday = response['data'][i].birthday;
                            var disease = response['data'][i].disease;
                            if (disease == null){ disease = "-";}
                            var complication = response['data'][i].complication;
                            if (complication == null){ complication = "-";}
                            var total = response['data'][i].total;
                            
                            ////cut BD
                            var cutBD = pa_birthday.split('-');
                                function calculate_age(dob) {
                                var diff_ms = Date.now() - dob.getTime();
                                var age_dt = new Date(diff_ms); 
                                return Math.abs(age_dt.getUTCFullYear() - 1970);
                                }
                                var age_pa = calculate_age(new Date(cutBD[0],cutBD[1],cutBD[2]));
                            ////

                            var tr_str = "<tr>" +
                                "<td align='center'>" + (n + 1) + "</td>" +
                                "<td align='center'>" + hn + "</td>" +
                                "<td align='center'>" + prefix + pa_fname + "&nbsp;" + pa_lname + "</td>" +
                                "<td align='center'>" + age_pa + "</td>" +
                                "<td align='center'>" + disease + "</td>" +
                                "<td align='center'>" + complication + "</td>" +
                                "<td align='center'>" + total + "</td>" +
                                "</tr>";

                            $("#empTable tbody").append(tr_str);

                            n++;
                        }
                    }

                    } else {
                    var tr_thead = "<tr>" +
                        "<th style='item-align:center;'>ลำดับ</th>" +
                        "<th style='item-align:center;'>HN</th>" +
                        "<th style='item-align:center;'>ชื่อ-นามสกุล</th>" +
                        "<th style='item-align:center;'>อายุ</th>" +
                        "<th style='item-align:center;'>วินิจฉัยโรค</th>" +
                        "<th style='item-align:center;'>ภาวะแทรกซ้อน</th>" +
                        "<th style='item-align:center;'>ค่าใช้จ่าย</th>" +
                        "</tr>";

                    var tr_str = "<tr>" +
                        "<td align='center' colspan='7'>ไม่พบข้อมูล.</td>" +
                        "<td style='display: none'></td>" +
                        "<td style='display: none'></td>" +
                        "<td style='display: none'></td>" +
                        "<td style='display: none'></td>" +
                        "<td style='display: none'></td>" +
                        "<td style='display: none'></td>" +
                        "</tr>";

                    $("#empTable thead").append(tr_thead);
                    $("#empTable tbody").append(tr_str);
                }
            }else{
                
                var tr_thead = "<tr>" +
                        "<th style='item-align:center;'>ลำดับ</th>" +
                        "<th style='item-align:center;'>HN</th>" +
                        "<th style='item-align:center;'>ชื่อ-นามสกุล</th>" +
                        "<th style='item-align:center;'>อายุ</th>" +
                        "<th style='item-align:center;'>วินิจฉัยโรค</th>" +
                        "<th style='item-align:center;'>ภาวะแทรกซ้อน</th>" +
                        "<th style='item-align:center;'>ค่าใช้จ่าย</th>" +
                        "</tr>";

                    var tr_str = "<tr>" +
                        "<td align='center' colspan='7'>รอการค้นหา...</td>" +
                        "<td style='display: none'></td>" +
                        "<td style='display: none'></td>" +
                        "<td style='display: none'></td>" +
                        "<td style='display: none'></td>" +
                        "<td style='display: none'></td>" +
                        "<td style='display: none'></td>" +
                        "</tr>";

                    $("#empTable thead").append(tr_thead);
                    $("#empTable tbody").append(tr_str);
            }

                        
        }
        google.charts.load("current", {
                            packages: ["corechart"]
                        });
                        google.charts.setOnLoadCallback(drawVisualization);
                        function drawVisualization(response) {
                            var getChoice = document.getElementById("choiceReport");
                            var valueChoice = getChoice.options[getChoice.selectedIndex].value;

                            var getChoiceOPT = document.getElementById("opt");
                            var valueChoiceOPT = getChoiceOPT.options[getChoiceOPT.selectedIndex].value;

                            var len = 0;
                            var countApprove = 0;
                            var countDis = 0;
                            var countCel = 0;

                            if (response['data'] != null) {
                                len = response['data'].length;
                            }
                            if(valueChoice == 2){
                            if (len > 0) {
                                for (var i = 0; i < len; i++) {
                                    var event_status = response['data'][i].event_status;
                                    var opt_id = response['data'][i].id;
                                    if(event_status == "3" && valueChoiceOPT == opt_id){
                                        var getdate = document.getElementById('search').value;
                                        var split = getdate.split(' - ');
                                        var datF = "วันที่ " + split[0];
                                        var datT = " ถึงวันที่ " + split[1];
                                        var TitleGraph = datF + datT;
                                        countDis += 1;
                                    }
                                    if (event_status == "3" && valueChoiceOPT == "0"){
                                        var getdate = document.getElementById('search').value;
                                        var split = getdate.split(' - ');
                                        var datF = "วันที่ " + split[0];
                                        var datT = " ถึงวันที่ " + split[1];
                                        var TitleGraph = datF + datT;
                                        countDis += 1;
                                    }
                                }
                            }else{
                                countDis = 0;
                                var getdate = document.getElementById('search').value;
                                var split = getdate.split(' - ');
                                var datF = "วันที่ " + split[0];
                                        var datT = " ถึงวันที่ " + split[1];
                                        var TitleGraph = datF + datT;
                            }
                            } else if(valueChoice == 1){
                                if (len > 0) {
                                for (var i = 0; i < len; i++) {
                                        var event_status = response['data'][i].event_status;

                                    if(event_status == "3"){
                                        var getdate = document.getElementById('search').value;
                                        var split = getdate.split(' - ');
                                        var datF = "วันที่ " + split[0];
                                        var datT = " ถึงวันที่ " + split[1];
                                        var TitleGraph = datF + datT;
                                        countDis += 1;
                                    }
                                }
                            } else {
                                countDis = 0;
                                var getdate = document.getElementById('search').value;
                                var split = getdate.split(' - ');
                                var datF = "วันที่ " + split[0];
                                var datT = " ถึงวันที่ " + split[1];
                                var TitleGraph = datF + datT;
                                
                            }
                            } else {
                                countDis = 0;
                                var TitleGraph = "วันที่ - ถึงวันที่ -";
                            }

                            var data = google.visualization.arrayToDataTable([
                                [
                                    "id",
                                    // "อนุมัติ",
                                    "จำหน่าย"
                                    // "ยกเลิก"
                                ],
                                [TitleGraph, 
                                // countApprove, 
                                countDis
                                // countCel
                                ],
                            ]);
                            var options = {
                                title: "",

                                vAxis: {
                                    title: "จำนวนการจำหน่าย"
                                },
                                hAxis: {
                                    title: "ช่วงวันที่"
                                },
                                seriesType: "bars",
                                colors: [
                                    // "#d4e6c4",
                                    "#f4c464",
                                    // "#f9957f",
                                ],
                            };
                            var chart = new google.visualization.ComboChart(
                                document.getElementById("chart_Combo")
                            );
                            chart.draw(data, options);
                        }

    </script>

    <script>
        $(document).ready(function () {

            let button = document.querySelector("#btnExport");
            button.addEventListener("click", (e) => {
                var getdate = document.getElementById('search').value;
                var split = getdate.split(' - ');
                var texttitle = 'รายงานสถิติ วันที่ ' + split[0] + ' ถึงวันที่ ' + split[1] +'.xlsx'; 

                let table = document.querySelector("#empTable");
                TableToExcel.convert(table,{
                    name: texttitle
                });
            });
        });
    </script>


</body>

</html>