<?php
require_once 'includes/db_user.php';

// $data1= mysqli_query($conn, "SELECT `category`, count(`category`) as categoryData from userinfo group by category");
    
//      while ($row = mysqli_fetch_array($data1)){
        
//     $data[]=array (
//             'category' => $row['category'],
//               'counts' => $row['categoryData']
//               );
//     }
//     ?>
    
<!--    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>-->


    
<!--    <div id=chart></div>-->
<!--    <style>-->
<!--        #chart {-->
<!--  max-width: 650px;-->
<!--  margin: 35px auto;-->
<!--}-->
<!--    </style>-->
    
<!-- <script>-->
<!--        var options = {-->
// <!--          series: [-->
          
// <!--          for ($i = 0; $i < count($data); $i++) {-->
// <!--            echo $data[$i]['counts'];-->
// <!--            }-->
          
// <!--          ?>],-->
<!--          chart: {-->
<!--          type: 'donut',-->
<!--        },-->
<!--        responsive: [{-->
<!--          breakpoint: 480,-->
<!--          options: {-->
<!--            chart: {-->
<!--              width: 200-->
<!--            },-->
<!--            legend: {-->
<!--              position: 'bottom'-->
<!--            }-->
<!--          }-->
<!--        }]-->
<!--        };-->

<!--        var chart = new ApexCharts(document.querySelector("#chart"), options);-->
<!--        chart.render();-->
      
      
<!--        </script>-->

<canvas id="expGrad" width="100%" height="300"></canvas>
<?php
$incomplete = mysqli_query($conn, "SELECT COUNT(req_id) AS incoReqs FROM requirements WHERE regFile_name = '' OR grFile_name = '' OR idFile_name = '' OR eval_form = ''");

if (mysqli_num_rows($incomplete) > 0){
    foreach ($incomplete AS $rows){
        $incompleteCount = $rows['incoReqs'];
    }
} else {
    $incompleteCount = 0;
}

$completed = mysqli_query($conn, "SELECT COUNT(req_id) As complete FROM requirements WHERE regFile_name != '' AND grFile_name != '' AND idFile_name != '' AND eval_form = ''");

if (mysqli_num_rows($completed) > 0){
    foreach ($completed AS $another){
        $completeCount = $another['complete'];
    }
} else {
    $completeCount = 0;
}
 ?>  
 <script>


$(document).ready(function(){
    let ctx2 = document.getElementById('requirements').getContext('2d');
        let pieChart2 = new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: [
                    'Incomplete Requirements',
                    'Complete Requirements',

                ],
                datasets: [{
                    label: "Complete and Not Complete Requiremens",
                    data: [
                        <?php echo $incompleteCount; ?>,
                        <?php echo $completeCount; ?>
                    ],
                    legendMarkerType: "circle",
                    backgroundColor: [
                        'blue',
                        'orange',
                    ],
                }]
            },
            options: {
                legend: {
                    display: true
                },
                responsive: true,
                maintainAspectRatio: false,
            }

        });
        
        
        let ctx3 = document.getElementById('myBarChart').getContext('2d');
        let pieChart3 = new Chart(ctx3, {
            type: 'pie',
            data: {
                labels: [
                    'Not Yet Approved',
                    'Approved',

                ],
                datasets: [{
                    label: "Approved and Not Yet Approved Requirements",
                    data: [
                        <?php echo $dis; ?>,
                        <?php echo $approvedCount; ?>
                    ],
                    legendMarkerType: "circle",
                    backgroundColor: [
                        'maroon',
                        '#8fce00',
                    ],
                }]
            },
            options: {
                legend: {
                    display: true
                },
                responsive: true,
                maintainAspectRatio: false,
            }

        });
        </script>
        