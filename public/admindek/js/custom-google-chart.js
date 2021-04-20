"use strict";
$(document).ready(function () {


  google.charts.load("current", { packages: ["corechart"] });
  google.charts.setOnLoadCallback(drawVisualization);
  function drawVisualization() {
    var countApprove = document.getElementById("total_ap").value;
    var p = parseInt(countApprove);
    var data = google.visualization.arrayToDataTable([
      [
        "อนุมัติ",
        "จำหน่าย",
      ],
      ["text_Ap", p,2],
      
    ]);
    var options = {
      title: "Reservation Per Day",
      vAxis: { title: "จำนวนอนุมัติ/จำหน่าย" },
      hAxis: { title: "ช่วงวันที่" },
      seriesType: "bars",
      colors: [
        "#69CEC6",
        "#11c15b",
      ],
    };
    var chart = new google.visualization.ComboChart(
      document.getElementById("chart_Combo")
    );
    chart.draw(data, options);
  }

});
