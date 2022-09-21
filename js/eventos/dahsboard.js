data = [34244, 45455, 65466, 8654, 34545, 76345, 98876];

(function () {
  "use strict";

  feather.replace();
  var ctxBrr = document.getElementById("chartBarras");
  var ctx = document.getElementById("myChart");
  var ctxPst = document.getElementById("chartPastel");


  var myChart = new Chart(ctx, {
    type: "line",
    data: {
      labels: [
        "Kte",
        "Petroleo",
        "Crudo",
        "Ambiente",
        "Inversion",
        "ods",
        "VarFlow",
      ],
      datasets: [
        {
          data: data,
          lineTension: 0,
          backgroundColor: "transparent",
          borderColor: "#008bgf",
          borderWidth: 4,
          pointBackgroundColor: "#007bff",
        },
      ],
    },
    options: {
      scales: {
        x: {
          display: true,
          title: {
            display: true,
            text: "Month",
          },
        },
        y: {
          display: true,
          title: {
            display: true,
            text: "Value",
          },
        },
      },

      legend: {
        display: false,
      },
    },
  });
  /*
 scales: {
        yAxes: [
          {
            ticks: {
              beginAtZero: false,
            },
          },
        ],
      },
       */
  const myChartBrr = new Chart(ctxBrr, {
    type: "bar",
    data: {
      labels: [
        "Kte",
        "Petroleo",
        "Crudo",
        "Ambiente",
        "Inversion",
        "ods",
        "VarFlow",
      ],
      datasets: [
        {
          label: "Cantidad kto",
          data: data,
          backgroundColor: [
            "rgba(132, 99, 85)",
            "rgba(54, 162, 235)",
            "rgba(54, 159, 153)",
            "rgba(255, 206, 86)",
            "rgba(75, 159, 192)",
            "rgba(153, 102, 255)",
            "rgba(54, 162, 235)",
          ],
          borderColor: [
            "rgba(255, 99, 132)",
            "rgba(54, 162, 235)",
            "rgba(255, 206, 86)",
            "rgba(75, 192, 192)",
            "rgba(153, 102, 255)",
            "rgba(255, 159, 64)",
            "rgba(54, 162, 235)",
          ],
          borderWidth: 1,
        },
      ],
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });

  const config = {
    type: "doughnut", //doughnut - PIE
    data: data,
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: "top",
        },
        title: {
          display: true,
          text: "Chart.js Pie Chart",
        },
      },
    },
  };

  const myChartPst = new Chart(ctxPst, {
    type: "pie",
    data: {
      labels: [
        "Kte",
        "Petroleo",
        "Crudo",
        "Ambiente",
        "Inversion",
        "ods",
        "VarFlow",
      ],
      datasets: [
        {
          label: "inversiones ",
          data: data,
          backgroundColor: [
            "rgba(75, 192, 192)",
            "rgba(153, 102, 255)",
            "rgba(255, 159, 64)",
            "rgba(54, 162, 235)",
            "rgba(255, 99, 132)",
            "rgba(54, 162, 235)",
            "rgba(255, 206, 86)",
          ],
          borderColor: [
            "rgba(255, 99, 132, 1)",
            "rgba(75, 192, 192, 1)",
            "rgba(153, 102, 255, 1)",
            "rgba(255, 159, 64, 1)",
            "rgba(54, 162, 235, 1)",
            "rgba(255, 206, 86, 1)",
            "rgba(54, 162, 235, 0.2)",
          ],
          borderWidth: 1,
        },
      ],
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
})();
