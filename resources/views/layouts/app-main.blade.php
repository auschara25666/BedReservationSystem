<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.5" maximum-scale=1, user-scalable=no,
        shrink-to-fit=no”>
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300&display=swap" rel="stylesheet" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('image/Emblem.png') }}" sizes="32x32" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- date picker -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('AdminLTE/plugins/datepicker-master/docs/css/datepicker.css') }}">

    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">


    <link href={{ asset('css/dashboard.css') }} rel="stylesheet" />
    <link href={{ asset('css/autocomplete.min.css') }} rel="stylesheet" />

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script> --}}


    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

    <title>@yield('title')</title>
    <style>
        * {
            font-family: "Sarabun", sans-serif;
        }

        .box {
            width: 100%;
            max-width: 600px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 16px;
            margin: 0 auto;
        }

        input.parsley-success,
        select.parsley-success,
        textarea.parsley-success {
            color: #468847;
            background-color: #DFF0D8;
            border: 1px solid #D6E9C6;
        }

        input.parsley-error,
        select.parsley-error,
        textarea.parsley-error {
            color: #B94A48;
            background-color: #F2DEDE;
            border: 1px solid #EED3D7;
        }

        .parsley-errors-list {
            margin: 2px 0 3px;
            padding: 0;
            list-style-type: none;
            font-size: 0.9em;
            line-height: 0.9em;
            opacity: 0;

            transition: all .3s ease-in;
            -o-transition: all .3s ease-in;
            -moz-transition: all .3s ease-in;
            -webkit-transition: all .3s ease-in;
        }

        .parsley-errors-list.filled {
            opacity: 1;
        }

        .parsley-type,
        .parsley-required,
        .parsley-equalto {
            color: #ff0000;
        }

        .section-search i {
            display: block;
        }

        .section-search input.autocomplete {
            color: #000;
        }

        .input-field .prefix.active {
            color: #000 !important;
        }

        .dropdown-content {
            background-color: rgba(212, 211, 211, 0.774);
        }

        .dropdown-content li>a,
        .dropdown-content li>span {
            color: #000 !important;
        }

        .autocomplete-content li .highlight {
            color: red !important;
        }

        .img_border {
            border: 2px solid red;
            background-color: red;
        }

        img:hover {
            cursor: pointer;
        }

        .pagination {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 15px;
            margin: auto;
            text-align: center;
        }

        .pagination__dot {
            position: relative;
            overflow-x: hidden;
            z-index: 1000 !important;
        }

        .table-responsive {
            overflow-x: unset;
        }

        /* datepicker css */

        .ui-datepicker-div {
            display: none;
            background-color: #fff;
            box-shadow: 0 0.125rem 0.5rem rgba(0, 0, 0, 0.1);
            margin-top: 0.25rem;
            border-radius: 0.5rem;
            padding: 0.5rem;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .ui-datepicker-calendar thead th {
            padding: 0.25rem 0;
            text-align: center;
            font-size: 0.75rem;
            font-weight: 400;
            color: #78909C;
        }

        .ui-datepicker-calendar tbody td {
            width: 2.5rem;
            text-align: center;
            padding: 0;
        }

        .ui-datepicker-calendar tbody td a {
            display: block;
            border-radius: 0.25rem;
            line-height: 2rem;
            transition: 0.3s all;
            color: #546E7A;
            font-size: 0.875rem;
            text-decoration: none;
        }

        .ui-datepicker-calendar tbody td a:hover {
            background-color: #E0F2F1;
        }

        .ui-datepicker-calendar tbody td a.ui-state-active {
            background-color: #009688;
            color: white;
        }

        .ui-datepicker-header a.ui-corner-all {
            cursor: pointer;
            position: absolute;
            top: 0;
            width: 2rem;
            height: 2rem;
            margin: 0.5rem;
            border-radius: 0.25rem;
            transition: 0.3s all;
        }

        .ui-datepicker-header a.ui-corner-all:hover {
            background-color: #ECEFF1;
        }

        .ui-datepicker-header a.ui-datepicker-prev {
            left: 0;
            background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==");
            background-repeat: no-repeat;
            background-size: 0.5rem;
            background-position: 50%;
            transform: rotate(180deg);
        }

        .ui-datepicker-header a.ui-datepicker-next {
            right: 0;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMyIgdmlld0JveD0iMCAwIDEzIDEzIj48cGF0aCBmaWxsPSIjNDI0NzcwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjI4OCA2LjI5NkwzLjIwMiAyLjIxYS43MS43MSAwIDAgMSAuMDA3LS45OTljLjI4LS4yOC43MjUtLjI4Ljk5OS0uMDA3TDguODAzIDUuOGEuNjk1LjY5NSAwIDAgMSAuMjAyLjQ5Ni42OTUuNjk1IDAgMCAxLS4yMDIuNDk3bC00LjU5NSA0LjU5NWEuNzA0LjcwNCAwIDAgMS0xLS4wMDcuNzEuNzEgMCAwIDEtLjAwNi0uOTk5bDQuMDg2LTQuMDg2eiIvPjwvc3ZnPg==');
            background-repeat: no-repeat;
            background-size: 10px;
            background-position: 50%;
        }

        .ui-datepicker-header a>span {
            display: none;
        }

        .ui-datepicker-title {
            text-align: center;
            line-height: 2rem;
            margin-bottom: 0.25rem;
            font-size: 0.875rem;
            font-weight: 500;
            padding-bottom: 0.25rem;
        }

        .ui-datepicker-week-col {
            color: #78909C;
            font-weight: 400;
            font-size: 0.75rem;
        }

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
    </style>

</head>

{{-- <body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed" onload="startTime()"> --}}

<body class="hold-transition sidebar-mini layout-fixed" onload="startTime()">
    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Header -->
        @include('adminward.layouts.header')

        <!-- Sidebar -->
        @include('adminward.layouts.sidebar')

        @yield('content')

        @include('adminward.layouts.footer')

    </div>
    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="{{ asset('AdminLTE/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
    <!-- InputMask -->
    <script src="{{ asset('AdminLTE/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
    <!-- date-picker -->
    <script type="text/javascript" src="{{ asset('AdminLTE/plugins/datepicker-master/docs/js/datepicker.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('AdminLTE/plugins/datepicker-master/docs/js/datepicker.th-TH.js') }}">
    </script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
    </script>
    <!-- Bootstrap Switch -->
    <script src="{{ asset('AdminLTE/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('AdminLTE/dist/js/demo.js') }}"></script>
    <!-- jquery-validation -->
    <script src="{{ asset('AdminLTE/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/jquery-validation/additional-methods.min.js') }}"></script>

    <!-- DataTables -->
    <script src="{{ asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    <script src={{ asset('js/table.js') }}></script>
    <script src={{ asset('js/clock.js') }}></script>
    <script src={{ asset('js/validate.js') }}></script>
    {{-- <script src={{ asset('js/autocomplete.min.js') }}></script> --}}
    <script src={{ asset('js/autocomplete.js') }}></script>
    <script src={{ asset('js/materialize.js') }}></script>

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>  --}}

    <script>
        $("div#image_container img").click(function () {
      $('#image_container img').removeClass("img_border")
      $("input#bed_id").val($(this).attr("id"));
      $("input#bed_number").val($(this).attr("col"));
      $(this).addClass("img_border")
  });
    </script>
    <script>
        $(document).ready(function () {

            $('[data-toggle="reserve_booking"]').datepicker({
                timepicker:false,
                autoHide: true,
                format: 'DD/MM/YYYY',
                language:'th-TH',
                startDate: new Date()
                });
            $('[data-toggle="datepicker"]').datepicker({
                autoHide: true,
                
                timepicker:false,
                format: 'DD/MM/YYYY',
                language:'th-TH',
                zIndex: 2048,
                startDate: new Date()
      });
        });

        
    </script>

    {{-- <script>
        $(document).on("click", "#btnsavepre", function(e) {

e.preventDefault(); // Prevent Default form Submission

$.ajax({
    type:"POST",
    url: '/savepre',
    data: $("#savepre").serialize(),
    success:function(store) {
        location.href = store;
    },
    error:function() {
    }
});

});
    </script> --}}

</body>

</html>