$(document).ready(function(){
    getChart();
    
    function getChart(){
        $.ajax({
            url : "../chartQuery.php",
            type : "GET",
            data : {getBar : 1},
            dataType : "json",
            success : function (data){
                let catName = [],
                categoryCount = [],
                Color = [];
                
                for (let count = 0; count < data.length; count++) {
                categoryCount.push(data[count].counts);
                Color.push(data[count].color);
                catName.push(data[count].categoryName);
                }

        let chartData = {
          labels: "Hello",
          datasets: [
            {
              label: "Data Summary for Category",
              backgroundColor: Color,
              color: "#fff",
              data: categoryCount,
            },
          ],
        };

        let barChartReviews = document
          .getElementById("myBarChart")
          .getContext("2d");

        let barChartReview2 = new Chart(barChartReviews, {
          type: "bar",
          data: chartData,
          options: {
            scale: {
              ticks: {
                precision: 0,
              },
            },
            legend: {
              display: false,
            },
            responsive: true,
            maintainAspectRatio: false,
          },
        });
            }
        });
    }
});