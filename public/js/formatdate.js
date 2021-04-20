$(document).ready(function(){

//Date range picker

$('#reserve_booking').datetimepicker({

timepicker:false,

format: 'DD/MM/YYYY',

yearOffset:543,

lang:'th',

minDate: new Date()

});

$('#reserve').datetimepicker({

    timepicker:false,
    
    format: 'DD/MM/YYYY',
    
    yearOffset:543,
    
    lang:'th',
    
    minDate: new Date()
    
    });


$("input[data-bootstrap-switch]").each(function(){

$(this).bootstrapSwitch('state', $(this).prop('checked'));

});

});
