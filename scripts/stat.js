$(document).ready(function () {
  $.ajax({
    url: "includes/stat.php",
    method: "GET",
    success: function (data) {
      //át kell konvertálni json objectté
      let jsonObj = JSON.parse(data);

      //return jsonObj;
      let expense = jsonObj[0];
      let total = jsonObj[1];
      console.log(expense);
      //expense arrays
      let thing = [];
      let money = [];
      let bgColor = [];
      //total array
      let totalArray = [];
      let dynamicColors = () => {
        let r = Math.floor(Math.random() * 255);
        let g = Math.floor(Math.random() * 255);
        let b = Math.floor(Math.random() * 255);
        return "rgb(" + r + "," + g + "," + b + ")";
      };
      for (i in expense) {
        thing.push(expense[i].type);
        money.push(expense[i].amount);
        bgColor.push(dynamicColors());
      }
      for (i in total) {
        totalArray.push(total[i].amount);
      }

      let pieChartData = {
        labels: [
          "Income", "Expense"
        ],
        datasets: [
          {
            label: "Total Amounts",
            backgroundColor: [
              "green", "red"
            ],
            borderColor: "rgba(200, 200, 200, 0.75",
            hoverBackgroundColor: "rgba(200, 200, 200, 1)",
            hoverBorderColor: "rgba(200, 200, 200, 1)",
            data: totalArray
          }
        ]
      };
      let barChartData = {
        labels: thing,
        datasets: [
          {
            label: "Total Amounts",
            backgroundColor: bgColor,
            borderColor: "rgba(200, 200, 200, 0.75",
            hoverBackgroundColor: "rgba(200, 200, 200, 1)",
            hoverBorderColor: "rgba(200, 200, 200, 1)",
            data: money
          }
        ]
      };
      let chartOne = document.getElementById("barChart").getContext("2d");
      new Chart(chartOne, {
        type: "bar",
        data: barChartData,
        responsive: true,
        maintainAspectRatio: false,
        options: {
          legend: {
            display: false
          }
        }
      });
      let chartTwo = document.getElementById("pieChart").getContext("2d");
      new Chart(chartTwo, {
        type: "pie",
        data: pieChartData,
        responsive: true,
        maintainAspectRatio: false
      });
    },
    error: function (data) {
      console.log(data);
    }
  });
});
