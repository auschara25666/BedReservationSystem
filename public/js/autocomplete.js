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

                    
                    var prefix = "<input type='text' class='form-control' name='prefix' id='prefix' value='" + dataCust2[reqdata]['prefix'] + "' readonly>";
                    $('#prefix').select('destroy');
                    $('#prefix').remove();
                    $('.pa_prefix_div').append(prefix);

                    var fname = "<input type='text' class='form-control' id='fname' name='fname' value='" + dataCust2[reqdata]['fname'] + "' readonly>";
                    $('#fname').remove();
                    $('.pa_fname_div').append(fname);

                    var lname = "<input type='text' class='form-control' id='lname' name='lname' value='" + dataCust2[reqdata]['lname'] + "' readonly>";
                    $('#lname').remove();
                    $('.pa_lname_div').append(lname);

                    var BD = dataCust2[reqdata]['birthday'];
                    var BD_array = BD.split("-");
                    var day = "<input id='dropper-age' class='form-control required' type='text' name='pa_age' data-date-format='dd/mm/yyyy' autocomplete='off'  readonly value='" + BD_array[2] + "/" + BD_array[1] + "/"+ BD_array[0] +"'/>";
                    $('#dropper-age').remove();
                    $('.pa_age_div').append(day);


                    function calculate_age(dob) { 
                        var diff_ms = Date.now() - dob.getTime();
                        var age_dt = new Date(diff_ms); 
              
                        return Math.abs(age_dt.getUTCFullYear() - 1970);
                        }
                        var age = calculate_age(new Date(BD_array[0],BD_array[1],BD_array[2]));
                    console.log(calculate_age(new Date(BD_array[0],BD_array[1],BD_array[2])));

                    var agenum = "<input class='form-control' type='text' id='age' readonly value='"+ age +"'/>";
                    $('#age').remove();
                    $('.age_div').append(agenum);


                    var phone = "<input type='text' class='form-control' id='pa_phone' name='pa_phone' value='" + dataCust2[reqdata]['phone'] + "' readonly>";
                    $('#pa_phone').remove();
                    $('.pa_phone_div').append(phone);

                    var sex = "<input type='text' class='form-control' name='pa_sex' id='pa_sex' value='" + dataCust2[reqdata]['sex'] + "' readonly>";
                    if ($('#pa_sex').data('select2')) {
                        $('#pa_sex').select2('destroy');
                      }
                    // $('#pa_sex').select2('destroy');
                    $('#pa_sex').remove();
                    $('.pa_sex_div').append(sex);
                    

                    // $('#pa_sex').val(dataCust2[reqdata]['sex']);
                    // $('.pa_phone').val(dataCust2[reqdata]['phone']);
                    // $('.pay').val(dataCust2[reqdata]['pay_id']);
                    // $('.disease').val(dataCust2[reqdata]['disease']);
                    // $('.ward').val(dataCust2[reqdata]['ward_id']);
                    // $('.opt_id').val(dataCust2[reqdata]['opt_id']);
                    // $('.doctor_id').val(dataCust2[reqdata]['doctor_id']);
                }
            });

        }
    })

});