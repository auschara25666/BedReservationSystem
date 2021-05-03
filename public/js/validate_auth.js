$(document).ready(function () {

    $('#regisform').validate({
        rules: {
            prefix: {
                required: true
            },
            fname: {
                required: true
            },
            lname: {
                required: true
            },
            phone: {
                required: true
            },
            email: {
                required: true
            },
            password: {
                required: true
            },
            role: {
                required: true
            },
            ward: {
                required: true
            }
        },
        messages: {
            prefix: {
                required: "กรุณาเลือกคำนำหน้า"
            },
            fname: {
                required: "กรุณากรอกชื่อจริง"
            },
            lname: {
                required: "กรุณากรอกนามสกุล"
            },
            phone: {
                required: "กรุณากรอกเบอร์โทรศัพท์"
            },
            email: {
                required: "กรุณากรอกอีเมล"
            },
            password: {
                required: "กรุณากรอกรหัสผ่าน"
            },
            role: {
                required: "กรุณาเลือกสถานะ"
            },
            ward: {
                required: "กรุณาเลือกสังกัด"
            }
        }
        ,
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});