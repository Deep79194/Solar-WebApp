d3.json("http://localhost/DE%20project/sample.json").then(function (data) {
  var arr = [];
  var arr1 = [];

  for (var i = 0; i < data.length; i++) {
    arr.push(data[i].Date);
  }
  for (var i = 0; i < data.length; i++) {
    arr1.push(data[i].elec);
  }
  console.log(arr);
  console.log(arr1);
});

var first = function () {
  google.charts.load("current", { packages: ["corechart"] });
  google.setOnLoadCallback(drawChart);
  function drawChart() {
    var dt = [
      ["date", "electricity(kw)", { role: "style" }, { role: "annotation" }],
      ["1/1/2023", 20, "color:red", "20"],
      ["2/1/2023", 25, "fillopacity:0.2;fill-color:#C5AFCF", "25"],
      ["3/1/2023", 33, "fillopacity:0.2;fill-color:cyan", "33"],
      ["4/1/2023", 22, "fillopacity:0.2;fill-color:burlywood", "22"],
      ["5/1/2023", 33, "fillopacity:0.2;fill-color:blue", "33"],
      ["6/1/2023", 22, "fillopacity:0.2;fill-color:green", "22"],
      ["7/1/2023", 25, "fillopacity:0.2;fill-color:#25AFCF", "25"],
    ];

    var data = google.visualization.arrayToDataTable(dt);
    var option = {
      animation: {
        startup: true,
        duration: 2000,
        easing: "inandout",
      },
    };
    var chart = new google.visualization.ColumnChart(
      document.getElementById("columnChart")
    );
    chart.draw(data, option);
  }
};

const second = function () {
  var chart = new CanvasJS.Chart("columnChart", {
    data: [
      {
        dataPoints: [
          { label: "January", y: 660 },
          { label: "february", y: 550 },
          { label: "march", y: 775 },
          { label: "April", y: 400 },
        ],
        type: "doughnut",
      },
    ],

    axisX: { title: "month" },
    axisY: { title: "electricity(KW)" },
  });
  chart.render();
};

const third = function () {
  var tit = {
    text: "MultiSeriesChart",
    fontColor: "red",
    FontSize: 30,
    verticalAlign: "top",
    horizontalAlign: "right",
  };
  var axisy = {
    title: "Electricy in (kw)",
    titleFontColor: "blue",
  };
  var leg = {
    verticalAlign: "top",
    horizonalAlign: "right",
  };
  var dt1 = {
    type: "stackedBar", //column,stackedColumn,stackedBar
    legendText: "2022",
    showInLegend: true,
    color: "burlywood",
    dataPoints: [
      { label: "January", y: 558 },
      { label: "February", y: 469 },
      { label: "March", y: 380 },
      { label: "April", y: 374 },
      { label: "May", y: 564 },
    ],
  };
  var dt2 = {
    type: "stackedBar",
    showInLegend: true,
    legendText: "2023",
    color: "salmon",
    dataPoints: [
      { label: "January", y: 663 },
      { label: "February", y: 573 },
      { label: "March", y: 488 },
      { label: "April", y: 477 },
      { label: "May", y: 460 },
    ],
  };
  var chart = new CanvasJS.Chart("columnChart", {
    title: tit,
    axisY: axisy,
    legend: leg,
    data: [dt1, dt2],
    animationEnabled: true,
    animationDuration: 5000,
    theme: "light2", //light1,light2,dark1,dark2
  });
  chart.render();
};
