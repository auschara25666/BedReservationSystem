
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var urlplus = '"{{ $opt->id }}"' + "/autocomplete";
        // keyup function looks at the keys typed on the search box
        $('#hn').on('keyup',function() {
            // the text typed in the input field is assigned to a variable 
            var query = $(this).val();
            // call to an ajax function
            $.ajax({
                // assign a controller function to perform search action - route name is search
                url: urlplus,
                // since we are getting data methos is assigned as GET
                type:"GET",
                // data are sent the server
                data:{'hn':query},
                // if search is succcessfully done, this callback function is called
                success:function (data) {
                    // print the search results in the div called country_list(id)
                    $('#hn_list').html(data);
                }
            })
            // end of ajax call
        });

        // initiate a click function on each search result
        $(document).on('click', 'li', function(){
            // declare the value in the input field to a variable
            var value = $(this).text();
            // assign the value to the search box
            $('#hn').val(value);
            // after click is done, search results segment is made empty
            $('#hn_list').html("");
        });
});