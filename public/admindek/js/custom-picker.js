"use strict";
$(document).ready(function () {
  $('input[name="daterange"]').daterangepicker();
  $('#dropper-default').datepicker({
    clearBtn: true,
    format: "dd/mm/yyyy",
    language:'th-TH',
    startDate: new Date(),
    // endDate: "+5m",
  });
  $('#dropper-age').datepicker({
    clearBtn: true,
    format: "dd/mm/yyyy",
    lang:'th',
    // startDate: new Date(),
    // endDate: "+5m",
  });
  $('.datemodal').datepicker({
    clearBtn: true,
    format: "dd/mm/yyyy",
    startDate: new Date(),
    // startDate: new Date(),
    // endDate: "+5m",
        
  });
  $('.birthdate').datepicker({
    clearBtn: true,
    format: "dd/mm/yyyy",
    // startDate: new Date(),
    // startDate: new Date(),
    // endDate: "+5m",
        
  });
  $('#dropper-static').datepicker({
    clearBtn: true,
    format: "dd/mm/yyyy",
    language:'th-TH',
    endDate: "+1d",
  });
  $('#dropper-user').datepicker({
    clearBtn: true,
    format: "dd/mm/yyyy",
    language:'th-TH',
    endDate: "+5m",
  });
  $(function () {
    $('input[name="birthdate"]').daterangepicker(
      { singleDatePicker: true, showDropdowns: true },
      function (start, end, label) {
        var years = moment().diff(start, "years");
        alert("You are " + years + " years old.");
      }
    );
    $('input[name="datefilter"]').daterangepicker({
      autoUpdateInput: false,
      locale: { cancelLabel: "Clear" },
    });
    $('input[name="datefilter"]').on(
      "apply.daterangepicker",
      function (ev, picker) {
        $(this).val(
          picker.startDate.format("MM/DD/YYYY") +
            " - " +
            picker.endDate.format("MM/DD/YYYY")
        );
      }
    );
    $('input[name="datefilter"]').on(
      "cancel.daterangepicker",
      function (ev, picker) {
        $(this).val("");
      }
    );
    var start = moment().subtract(29, "days");
    var end = moment();
    function cb(start, end) {
      $("#reportrange span").html(
        start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY")
      );
    }
    // $("#search").datepicker({
      
    //   format: 'yyyy-mm-dd'
    // }).datepicker("setDate", new Date());
  
    $("#search").daterangepicker(
      {
        // startDate: new Date(),
        ranges: {
          "วันนี้": [moment(), moment()],
          "เมื่อวาน": [
            moment().subtract(1, "days"),
            moment().subtract(1, "days"),
          ],
          "ผ่านมา 7 วัน": [moment().subtract(6, "days"), moment()],
          "ผ่านมา 30 วัน": [moment().subtract(29, "days"), moment()],
          "เดือนนี้": [  moment().startOf("month"), 
                      moment().endOf("month")],
          // "เดือนก่อน": [
          //             moment().subtract(1, "month").startOf("month"),
          //             moment().subtract(1, "month").endOf("month"),
          // ],
          "ปีผ่านมา": [
            moment().subtract(1, "year").startOf("year"),
            moment().subtract(1, "year").endOf("year"),
],
        },
        locale: {
        "daysOfWeek": [
          "อา",
          "จ",
          "อ",
          "พ",
          "พฤ",
          "ศ",
          "ส"
      ],
        "monthNames": ["มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"],
        
          format: 'YYYY-MM-DD',
        }

      },
      cb
    );
    cb(start, end);
    $(".input-daterange input").each(function () {
      $(this).datepicker();
    });
    $("#sandbox-container .input-daterange").datepicker({
      todayHighlight: true,
    });
    $(".input-group-date-custom").datepicker({
      todayBtn: true,
      clearBtn: true,
      keyboardNavigation: false,
      forceParse: false,
      todayHighlight: true,
      defaultViewDate: { year: "2017", month: "01", day: "01" },
    });
    $(".multiple-select").datepicker({
      todayBtn: true,
      clearBtn: true,
      multidate: true,
      keyboardNavigation: false,
      forceParse: false,
      todayHighlight: true,
      defaultViewDate: { year: "2017", month: "01", day: "01" },
    });
    
  });


    $("#dropper-animation").dateDropper({
      dropWidth: 200,
      init_animation: "bounce",
      dropPrimaryColor: "#1abc9c",
      dropBorder: "1px solid #1abc9c",
    }),
    $("#dropper-format").dateDropper({
      dropWidth: 200,
      format: "F S, Y",
      dropPrimaryColor: "#1abc9c",
      dropBorder: "1px solid #1abc9c",
    }),
    $("#dropper-lang").dateDropper({
      dropWidth: 200,
      format: "F S, Y",
      dropPrimaryColor: "#1abc9c",
      dropBorder: "1px solid #1abc9c",
      lang: "ar",
    }),
    $("#dropper-lock").dateDropper({
      dropWidth: 200,
      format: "F S, Y",
      dropPrimaryColor: "#1abc9c",
      dropBorder: "1px solid #1abc9c",
      lock: "from",
    }),
    $("#dropper-max-year").dateDropper({
      dropWidth: 200,
      dropPrimaryColor: "#1abc9c",
      dropBorder: "1px solid #1abc9c",
      maxYear: "2020",
    }),
    $("#dropper-min-year").dateDropper({
      dropWidth: 200,
      dropPrimaryColor: "#1abc9c",
      dropBorder: "1px solid #1abc9c",
      minYear: "1990",
    }),
    $("#year-range").dateDropper({
      dropWidth: 200,
      dropPrimaryColor: "#1abc9c",
      dropBorder: "1px solid #1abc9c",
      yearsRange: "5",
    }),
    $("#dropper-width").dateDropper({
      dropPrimaryColor: "#1abc9c",
      dropBorder: "1px solid #1abc9c",
      dropWidth: 500,
    }),
    $("#dropper-dangercolor").dateDropper({
      dropWidth: 200,
      dropPrimaryColor: "#e74c3c",
      dropBorder: "1px solid #e74c3c",
    }),
    $("#dropper-backcolor").dateDropper({
      dropWidth: 200,
      dropPrimaryColor: "#1abc9c",
      dropBorder: "1px solid #1abc9c",
      dropBackgroundColor: "#bdc3c7",
    }),
    $("#dropper-txtcolor").dateDropper({
      dropWidth: 200,
      dropPrimaryColor: "#46627f",
      dropBorder: "1px solid #46627f",
      dropTextColor: "#FFF",
      dropBackgroundColor: "#e74c3c",
    }),
    $("#dropper-radius").dateDropper({
      dropWidth: 200,
      dropPrimaryColor: "#1abc9c",
      dropBorder: "1px solid #1abc9c",
      dropBorderRadius: "0",
    }),
    $("#dropper-border").dateDropper({
      dropWidth: 200,
      dropPrimaryColor: "#1abc9c",
      dropBorder: "2px solid #1abc9c",
    }),
    $("#dropper-shadow").dateDropper({
      dropWidth: 200,
      dropPrimaryColor: "#1abc9c",
      dropBorder: "1px solid #1abc9c",
      dropBorderRadius: "20px",
      dropShadow: "0 0 20px 0 rgba(26, 188, 156, 0.6)",
    });
  function change_checkbox_color() {
    $(".color-box .show-box").on("click", function () {
      $(".color-box").toggleClass("open");
    });
    $(".colors-list a").on("click", function () {
      var curr_color = $("main").data("checkbox-color");
      var color = $(this).data("checkbox-color");
      var new_colot = "checkbox-" + color;
      $(".rkmd-checkbox .input-checkbox").each(function (i, v) {
        var findColor = $(this).hasClass(curr_color);
        if (findColor) {
          $(this).removeClass(curr_color);
          $(this).addClass(new_colot);
        }
        $("main").data("checkbox-color", new_colot);
      });
    });
  }
  $("#custom").spectrum({ color: "#f00" });
  $("#flat").spectrum({ flat: true, showInput: true });
  $("#flatClearable").spectrum({
    flat: true,
    showInput: true,
    allowEmpty: true,
  });
  $(".demo").each(function () {
    $(this).minicolors({
      control: $(this).attr("data-control") || "hue",
      defaultValue: $(this).attr("data-defaultValue") || "",
      format: $(this).attr("data-format") || "hex",
      keywords: $(this).attr("data-keywords") || "",
      inline: $(this).attr("data-inline") === "true",
      letterCase: $(this).attr("data-letterCase") || "lowercase",
      opacity: $(this).attr("data-opacity"),
      position: $(this).attr("data-position") || "bottom left",
      swatches: $(this).attr("data-swatches")
        ? $(this).attr("data-swatches").split("|")
        : [],
      change: function (value, opacity) {
        if (!value) return;
        if (opacity) value += ", " + opacity;
        if (typeof console === "object") {
          console.log(value);
        }
      },
      theme: "bootstrap",
    });
  });
});
