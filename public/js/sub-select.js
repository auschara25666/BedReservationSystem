
$(document).ready(function () {
    $('#ward').on('click', function () {
        let id = $('#ward').val();
        $('#opt_id').empty();
        $('#opt_id').append(`<option style="display:none">....</option>`);
        console.log(id);
        $.ajax({
            type: 'GET',
            url: 'GetOpt/' + id,
            success: function (response) {
                var response = JSON.parse(response);
                $('#opt_id').empty();
                $('#opt_id').append(`<option value="" style="display: none" selected disabled >กรุณาเลือกหัตถการ</option>`);
                response.forEach(element => {
                    $('#opt_id').append(`<option value="${element['id']}">${element['opt_name']}</option>`);
                });
            }
        });
    });
 });