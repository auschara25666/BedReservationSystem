<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('image/Emblem.png') }}" sizes="32x32" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300&display=swap" rel="stylesheet" />

    <title>เข้าสู่ระบบ</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/floating-labels/">
    <!-- Bootstrap core CSS -->
    {{-- <link href=""{{ asset('AdminLTE/dist/css/bootstrap.min.css') }} rel="stylesheet"> --}}

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.9.1/sweetalert2.css">

    <style>
        :root {
            --input-padding-x: .75rem;
            --input-padding-y: .75rem;
        }

        * {
            font-family: "Sarabun", sans-serif;
        }

        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-align: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-image: url("/image/eu.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        body::before{
            content: "";
            display: block;
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(255,255,255,0.6);
        }

        .form-signin {
            width: 100%;
            max-width: 360px;
            padding: 20px;
            margin: 0 auto;
            margin-top: 50px;
            /* border: 1px solid; */
            background-color: #ffffff;
            /* color: white; */
            border-radius: 2%;
            box-shadow:  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
  ;
        }
        .form-signin .form-control {
                    position: relative;
                    box-sizing: border-box;
                    height: auto;
                    padding: 10px;
                    font-size: 16px;
                    background: #f0ebeb;
                }
        .form-signup {
            width: 100%;
            max-width: 500px;
            padding: 20px;
            margin: 0 auto;
            margin-top: 50px;
            /* border: 1px solid; */
            background-color: #ffffff;
            /* color: white; */
            border-radius: 2%;
            box-shadow:  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
  ;
        }
        .form-signup .form-control {
            /* position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px; */
            background: #f0ebeb;
        }
        

        .form-control-feedback{
            position: absolute;
    top: 0;
    right: 0;
    z-index: 2;
    display: block;
    width: 34px;
    height: 34px;
    line-height: 45px;
    text-align: center;
    pointer-events: none;
    color: #495057;
        }

        .form-label-group {
            position: relative;
            margin-bottom: 1rem;
        }

        .form-label-group>input,
        .form-label-group>label {
            padding: var(--input-padding-y) var(--input-padding-x);
        }

        .form-label-group>label {
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            width: 100%;
            margin-bottom: 0;
            /* Override default `<label>` margin */
            line-height: 1.5;
            color: #495057;
            border: 1px solid transparent;
            border-radius: .25rem;
            transition: all .1s ease-in-out;
        }

        .form-label-group input::-webkit-input-placeholder {
            color: transparent;
        }

        .form-label-group input:-ms-input-placeholder {
            color: transparent;
        }

        .form-label-group input::-ms-input-placeholder {
            color: transparent;
        }

        .form-label-group input::-moz-placeholder {
            color: transparent;
        }

        .form-label-group input::placeholder {
            color: transparent;
        }

        .form-label-group input:not(:placeholder-shown) {
            padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
            padding-bottom: calc(var(--input-padding-y) / 3);
        }

        .form-label-group input:not(:placeholder-shown)~label {
            padding-top: calc(var(--input-padding-y) / 3);
            padding-bottom: calc(var(--input-padding-y) / 3);
            font-size: 12px;
            color: #777;
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

{{-- <body class="hold-transition login-page"> --}}
{{-- <body class="text-center"> --}}

<body>
    @yield('content')


<!-- jQuery -->
<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>
<!-- jquery-validation -->
<script src="{{ asset('AdminLTE/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/jquery-validation/additional-methods.min.js') }}"></script>

<script src="{{ asset('js/validate_auth.js') }}"></script>

{{-- <script type="461d1add94eeb239155d648f-text/javascript" src="{{ asset('admindek/js/seehide.js') }}"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.9.1/dist/sweetalert2.all.min.js"></script>

<script>
    //  function success() {
    //     Swal.fire({
    //         title: 'สมัครสมาชิก สำเร็จ!',
    //         text: 'โปรดรอการอนุมัติบัญชีจากผู้ดูแลระบบ คุณสามารถเช็คสถานะการอนุมัติบัญชีได้ใน E-mail ที่ลงทะเบียน',
    //         icon: 'success',
            
    //             showCloseButton: true,
    //             timer: 50000,
    //         });
    //     }
// Run on page load


        $(document).on('click', '#btn-submit', function(e) {

    e.preventDefault();
    Swal.fire({
        title: 'ยืนยันการสมัครสมาชิก',
        input: 'checkbox',
        icon: 'warning',
        inputValue: 0,
        inputPlaceholder: ' ยืนยันว่าข้อมูลนี้เป็นจริง',
        confirmButtonText: 'Continue',
        inputValidator: function (result) {
            return new Promise(function (resolve, reject) {
                if (result) {
                    resolve();
                } else {
                    
                    Swal.fire({
                        title: 'กรุณาติ๊กเครื่องหมายถูกเพื่อยืนยันข้อมูล!',
                        text: '',
                        icon: 'warning',
                        
                            showCloseButton: true,
                            timer: 50000,
                        });
                }
            })
        }
    }).then(function (result) {
        $('#regisform').submit();
    });
});



        $('.toggle-password').on('click', function () {
    $(this).toggleClass('fa-eye fa-eye-slash');
    let input = $($(this).attr('toggle'));
    if (input.attr('type') == 'password') {
        input.attr('type', 'text');
    }
    else {
        input.attr('type', 'password');
    }
});
    </script>
</body>

</html>