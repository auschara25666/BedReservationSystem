<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.5" maximum-scale=1, user-scalable=no, shrink-to-fit=no”>
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
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet"
        href="{{ asset('AdminLTE/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">


    <link href={{ asset('css/dashboard.css') }} rel="stylesheet" />

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> --}}

    {{-- image picker --}}
    {{-- <link rel="stylesheet" href="{{ asset('image-picker/image-picker.css') }}"> --}}

    <title>@yield('title')</title>
    <style>
        *{
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
            /* width: 8px;
  height: 8px;
  border: 2px solid #5ae4dd; */
            border-radius: 100px;
            display: inline-block;
            cursor: pointer;
            margin: 0 4px;
            -webkit-transition: .3s;
            transition: .3s;
            text-align: center;
        }

        .pagination__dot--active {
            background: #5ae4dd;
        }

        .pagination__dot:hover {
            -webkit-transition: .3s;
            transition: .3s;
            border-color: white;
            background: white;
        }

        .pagination__dot:hover:before {
            top: -48px;
            opacity: 1;
        }

        .pagination__dot:hover:after {
            top: -18px;
            opacity: 1;
        }

        .pagination__dot:before {
            position: absolute;
            top: -40px;
            left: -36px;
            background: white;
            width: 250px;
            font-size: 14px;
            padding: 4px;
            margin-top: -22px;
            border-radius: 3px;
            content: attr(data-tooltip);
            opacity: 0;
            -webkit-transition: .3s;
            transition: .3s;
        }

        .pagination__dot:after {
            position: absolute;
            width: 0;
            height: 0;
            top: -5px;
            left: -2px;
            border-top: 10px solid white;
            border-right: 10px solid transparent;
            border-bottom: 10px solid transparent;
            border-left: 10px solid transparent;
            content: "";
            opacity: 0;
            -webkit-transition: .3s;
            transition: .3s;
        }
        .autocomplete-content {
            max-height: 100px;
            overflow-y: auto;
            /* prevent horizontal scrollbar */
            overflow-x: hidden;
            /* add padding to account for vertical scrollbar */
            z-index:1000 !important;
        } 
        .table-responsive{
            overflow-x: unset;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Header -->
        @include('layouts.header')

        <!-- Sidebar -->
        @include('layouts.sidebar')

        @yield('content')

        @include('layouts.footer')
        
    </div>
    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('AdminLTE/plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="{{ asset('AdminLTE/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
    <!-- InputMask -->
    <script src="{{ asset('AdminLTE/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- bootstrap color picker -->
    <script src="{{ asset('AdminLTE/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
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
    <script src={{ asset('js/sub-select.js') }}></script>
    <script src={{ asset('js/validate.js') }}></script>
    <script src={{ asset('js/select2.js') }}></script>
    <script src={{ asset('js/autocomplete.js') }}></script>

    <!-- autocomplete -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <script>
        $(".btn").click(function () {
      $(this).find("i").toggleClass("fas fa-minus fas fa-plus");
    });
  
    $("#collapseOne").collapse({
      toggle: true,
    });

    </script>

    <script>
        $("div#image_container img").click(function () {
      // $("div#image_container img").attr("border","0");
      // $(this).attr("border","4");
      $('#image_container img').removeClass("img_border")
      $("input#bed_id").val($(this).attr("id"));
      $("input#bed_number").val($(this).attr("col"));
      $(this).addClass("img_border")
  }); 
    </script>
</body>

</html>