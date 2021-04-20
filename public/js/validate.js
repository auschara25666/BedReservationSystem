$(document).ready(function () {

    $('#quickForm').validate({
        rules: {
            ward: {
                required: true
            },
            opt_id: {
                required: true
            },
            reserve_booking: {
                required: true
            },
            doctor_id: {
                required: true
            },
            medical: {
                required: true
            },
            booking_name: {
                required: true
            },
            hn: {
                required: true,
                // minlength: 10
            },
            pa_name: {
                required: true
            },
            pa_age: {
                required: true
            },
            pa_sex: {
                required: true
            },
            pa_phone: {
                required: true
            },
            pay: {
                required: true
            },
            disease: {
                required: true
            },
            booking_name: {
                required: true
            },
            booking_phone: {
                required: true
            }

        },
        messages: {
            ward: {
                required: "กรุณาเลือกวอร์ด"
            },
            opt_id: {
                required: "กรุณาเลือกหัตถการ"
            },
            reserve_booking: {
                required: "กรุณาเลือกวันที่จองเตียง"
            },
            doctor_id: {
                required: "กรุณาเลือกอาจารย์แพทย์"
            },
            medical: {
                required: "กรุณาเลือกแพทย์เจ้าของผู้ป่วย"
            },
            booking_name: {
                required: "กรุณากรอกชื่อผู้จอง"
            },
            booking_phone: {
                required: "กรุณากรอกเบอร์ติดต่อผู้จอง"
            },
            hn: {
                required: "กรุณากรอกรหัส HN ผู้ป่วย",
                minlength: "รหัส HN ต้อง 10 หลัก"
            },
            pa_name: {
                required: "กรุณากรอกชื่อผู้ป่วย"
            },
            pa_age: {
                required: "กรุณากรอกอายุผู้ป่วย"
            },
            pa_sex: {
                required: "กรุณาเลือกเพศ"
            },
            pa_phone: {
                required: "กรุณากรอกเบอร์ผู้ป่วย"
            },
            pay: {
                required: "กรุณาเลือกสิทธิ์การรักษา"
            },
            disease: {
                required: "กรุณากรอกโรค"
            },
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