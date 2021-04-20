$(document).ready(function () {

    $.ajax({
        type: 'get',
        url: 'findPatient',
        success: function (response) {

            var custArray = response;
            var dataCust = {};
            var dataCust2 = {};
            for (var i = 0; i < custArray.length; i++) {
                dataCust[custArray[i].hn] = null;
                dataCust2[custArray[i].hn] = custArray[i];
            }

            $('.hn').autocomplete({
                data: dataCust,
                minLength: 1,
                onAutocomplete: function (reqdata) {

                    getIDopt(dataCust2[reqdata]['ward_id']);

                    setTimeout(getTextopt(dataCust2[reqdata]['opt_id']), 10);

                    $('.pa_name').val(dataCust2[reqdata]['name']);
                    $('.pa_age').val(dataCust2[reqdata]['age']);
                    $('.pa_sex').val(dataCust2[reqdata]['sex']);
                    $('.pa_phone').val(dataCust2[reqdata]['phone']);
                    $('.pay').val(dataCust2[reqdata]['pay_id']);
                    $('.disease').val(dataCust2[reqdata]['disease']);
                    $('.ward').val(dataCust2[reqdata]['ward_id']);
                    $('.opt_id').val(dataCust2[reqdata]['opt_id']);
                    $('.doctor_id').val(dataCust2[reqdata]['doctor_id']);
                }
            });

        }
    })



    function getTextopt(id) {
        $.ajax({
            type: 'GET',
            url: 'getValueOpt/' + id,
            success: function (response) {
                document.getElementById('opt_id').value = id;
            }
        });
    }

});