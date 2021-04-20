$(document).ready(function () {

    $(document).on('keydown', '.hn', function () {

        var id = this.id;

        // Initialize jQuery UI autocomplete
        $('#' + id).autocomplete({
            source: function (request, response) {
                $.ajax({
                    url: "getDetails.php",
                    type: 'post',
                    dataType: "json",
                    data: {
                        search: request.term, request: 1
                    },
                    success: function (data) {
                        response(data);
                    }
                });
            },
            select: function (event, ui) {
                $(this).val(ui.item.label); // display the selected text
                var userid = ui.item.value; // selected value

                // AJAX
                $.ajax({
                    url: 'getDetails.php',
                    type: 'post',
                    data: { userid: userid, request: 2 },
                    dataType: 'json',
                    success: function (response) {

                        var len = response.length;

                        if (len > 0) {
                            var id = response[0]['id'];
                            var name = response[0]['name'];
                            var email = response[0]['email'];
                            var age = response[0]['age'];
                            var salary = response[0]['salary'];

                            // Set value to textboxes
                            document.getElementById('name').value = name;
                            document.getElementById('age').value = age;
                            document.getElementById('email').value = email;
                            document.getElementById('salary').value = salary;
                        }

                    }
                });

                return false;
            }
        });
    });
});
