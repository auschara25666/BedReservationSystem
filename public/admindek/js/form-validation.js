// "use strict";
// $(document).ready(function () {
 


// });

// store form HTML markup in a JS variable
var formTemplate = $("#form-template > form").clone()[0];
$("#form-template").remove();

// prepare SweetAlert configuration
var swalConfig = {
  title: "Demo Form",
  content: formTemplate,
  button: {
    text: "Submit",
    closeModal: false
  }
};

// handle clicks on the "Click me" button
$("#submitbtn").click(function () {
  swal(swalConfig);
});

// handle clicks on the "Submit" button of the modal form
$("body").on("click", ".swal-button--confirm", function () {
  simulateAjaxRequest();
});

// mock AJAX requests for this demo
var isFakeAjaxRequestSuccessfull = false;

function simulateAjaxRequest() {
  // "send" the fake AJAX request
  var fakeAjaxRequest = new Promise(function (resolve, reject) {
    setTimeout(function () {
      isFakeAjaxRequestSuccessfull ? resolve() : reject();
      isFakeAjaxRequestSuccessfull = !isFakeAjaxRequestSuccessfull;
      swal.stopLoading();
    }, 200);
  });

  // attach success and error handlers to the fake AJAX request
  fakeAjaxRequest
    .then(function () {
      // do this if the AJAX request is successfull:
      $("input.invalid").removeClass("invalid");
      $(".invalid-feedback").remove();
    })
    .catch(function () {
      // do this if the AJAX request fails:
      var errors = {
        hn: "Username is invalid",
      };
      $.each(errors, function (key, value) {
        $('input[name="' + key + '"]')
          .addClass("invalid")
          .after('<div class="invalid-feedback">' + value + "</div>");
      });
    });
}




// "use strict";
// $(document).ready(function () {
//   validate.extend(validate.validators.datetime, {
//     parse: function (value, options) {
//       return +moment.utc(value);
//     },
//     format: function (value, options) {
//       var format = options.dateOnly ? "DD/MM/YYYY" : "DD/MM/YYYY";
//       return moment.utc(value).format(format);
//     },
//   });

// $(function(){
//   $("#main").validate({
//   rules: {
//       'hn': {
//           required: true,
//       },
     
//   },
//   messages: {
//       'hn': {
//           required: 'お名前を入力してください。',
//       },
    
//    },
//    submitHandler: function(form) {
//       Swal.fire({
//           title: '送信しますか？',
//           type: 'question',
//           showCancelButton: true,
//           confirmButtonColor: '#3085d6',
//           cancelButtonColor: '#d33',
//           confirmButtonText: '送信'
//       }).then((result) => {
//           if (result.value) {
//               form.submit();
//           }else {
//               return false;
//           }
//       })
//   }
// });

// });

// });
