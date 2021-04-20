
$("#formcancel").on('submit', function (e) {
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: '/cancelreserve',
        method: 'POST',
        data: $(this).serialize(),
        dataType: 'json',
        success: function (data) {
            // console.log(data);
            // location.reload();
            // $("#success").text(data.success);
            alert('Cancel successfull saved');
            // $('canReserve').modal('hide');
            $('.closemodal').click()


        },
        error: function (error) {
            console.log(error)
            alert('Data not saved');
        }
    })
});

$("#formpre").on('submit', function (e) {
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: '/savepre',
        method: 'POST',
        data: $(this).serialize(),
        dataType: 'json',
        success: function (data) {
            // console.log(data.success);
            // alert('Data successfull saved');
            // location.reload();
            // $("div#success").show('success');
            $('.prelist' + data.id).append(
                "<li class='list-group-item'>" +
                data.pre
                + "<label class='checkbox'>" +
                "<input type='checkbox' name='preopt[]' value='" + data.id + "' />" +
                "<span class='success'></span>" +
                "</label>" +
                "</li>");

            // $('#check').modal('hide');

        },
        error: function (error) {
            console.log(error)
            alert('Data not saved');
        }
    })
});
