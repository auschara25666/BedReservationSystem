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

                    if (dataCust2[reqdata]['prefix'] != null){
                    var prefix = "<input type='text' class='form-control prefix' name='prefix' value='" + dataCust2[reqdata]['prefix'] + "' readonly>";
                    $('.prefix').select('destroy');
                    $('.prefix').remove();
                    $('.pa_prefix_div').append(prefix);
                    }
                    if (dataCust2[reqdata]['fname'] != null){
                    var fname = "<input type='text' class='form-control fname'  name='fname' value='" + dataCust2[reqdata]['fname'] + "' readonly>";
                    $('.fname').remove();
                    $('.pa_fname_div').append(fname);
                    }
                    if (dataCust2[reqdata]['lname'] != null){
                    var lname = "<input type='text' class='form-control lname'  name='lname' value='" + dataCust2[reqdata]['lname'] + "' readonly>";
                    $('.lname').remove();
                    $('.pa_lname_div').append(lname);
                    }
                }
            });

        }
    })

});