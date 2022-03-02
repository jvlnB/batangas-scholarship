<?php
include('includes/header.php');
include 'includes/auth.php';
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  

<div class="container-fluid px-4">
<h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
<li class="breadcrumb-item active">Dashboard</li> 
</ol>
<div class="row">
    <div class="row">
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Approved and Not Yet Approved Requirements Count
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="300"></canvas></div>
                                    <a href="dash-data.php" style="color: black;"><ul>Generate</ul></a>
                                    </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Complete and Incomplete Requirement Count                                    </div>
                                    <div class="card-body"><canvas id="requirements" width="100%" height="300"></canvas></div>
                                </div>
                            </div>
                            
                             <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Scholarship Category
                                        </div>
                                    <div class="card-body"><canvas id="catgory" width="100%" ></canvas></div>
                                     <a href="dash-data-comp.php" style="color: black;"><ul>Generate</ul></a>
                                </div>
                            </div>
                            
                            <!--  <div class="col-lg-6">-->
                            <!--    <div class="card mb-4">-->
                            <!--        <div class="card-header">-->
                            <!--            <i class="fas fa-chart-bar me-1"></i>-->
                            <!--            Expected Graduates-->
                            <!--            </div>-->
                            <!--        <div class="card-body"><canvas id="exp" width="100%" ></canvas></div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            
                            <!--<div class="col-lg-12">-->
                            <!--    <div class="card mb-4">-->
                            <!--        <div class="card-header">-->
                            <!--            <i class="fas fa-chart-bar me-1"></i>-->
                            <!--            Number of Scholars Per City                                    </div>-->
                            <!--        <div class="card-body"><canvas id="city" width="100%" height="300"></canvas></div>-->
                            <!--    </div>-->
                            <!--</div>-->

                        <div class="card mb-4">
                            <div class="card-body">
                              <h4>  DATA SUMMARY </h4>
                            </div>
                        </div>
                           <?php  
require_once 'includes/db_user.php';
require_once 'includes/new_admin.php';

// function random_color()
// {
//     return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
// }


// if (isset($_POST['getCity'])){
//     $area = mysqli_query($conn2, "SELECT area FROM evaluators_accs");
//     $areaData = array();

//     foreach ($area AS $c){
//       $areaData[] = array(
//           'areas' => $c['area'],
//           );
//     }
    
//     echo json_encode($areaData);
// }



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

$approved = mysqli_query($conn, "SELECT COUNT(req_id) AS approved FROM requirements WHERE status = 'APPROVED'");

if (mysqli_num_rows($approved) > 0){
    foreach ($approved AS $a){
        $approvedCount = $a['approved'];
    }
} else {
    $approvedCount = 0;
}

$not = mysqli_query($conn, "SELECT COUNT(req_id) AS notApproved FROM requirements WHERE status = ''");

if (mysqli_num_rows($not) > 0){
    foreach ($not AS $b){
        $dis = $b['notApproved'];
    }
} else {
    $dis = 0;
}
$bpeap = mysqli_query($conn, "SELECT COUNT(userID) AS bpeap FROM userinfo WHERE category = 'BPEAP'");

if (mysqli_num_rows($bpeap) > 0){
    foreach ($bpeap AS $bp){
        $bpeapCount = $bp['bpeap'];
    }
} else {
    $bpeapCount = 0;
}

$sch1 = mysqli_query($conn, "SELECT COUNT(userID) AS sch1 FROM userinfo WHERE category = 'BPSP -SCHEME 1'");

if (mysqli_num_rows($sch1) > 0){
    foreach ($sch1 AS $scheme1){
        $sch1Count = $scheme1['sch1'];
    }
} else {
    $sch1Count = 0;
}

$sch2 = mysqli_query($conn, "SELECT COUNT(userID) AS sch2 FROM userinfo WHERE category = 'BPSP -SCHEME 2'");

if (mysqli_num_rows($sch2) > 0){
    foreach ($sch2 AS $scheme2){
        $sch2Count = $scheme2['sch2'];
    }
} else {
    $sch2Count = 0;
}

$pwd = mysqli_query($conn, "SELECT COUNT(userID) AS pwd FROM userinfo WHERE category = 'PWD'");

if (mysqli_num_rows($pwd) > 0){
    foreach ($pwd AS $pdabs){
        $pwdCount = $pdabs['pwd'];
    }
} else {
    $pwdCount = 0;
}  
//  $gradsCount = array();
// $numOfGrads = mysqli_query($conn, "SELECT COUNT(`userID`) AS data FROM userinfo GROUP BY `exp_grad`");

//     while($nog=mysqli_fetch_assoc($numOfGrades)){
//         $gradsCount[]=$nog['data'];
//     }
    
// //     foreach ($numOfGrads AS $nog){
// //         $gradsCount = $nog['data'];
// //     }
// // } else {
// //     $gradsCount = 0;
// //  }  
// $years = mysqli_query($conn, "SELECT * FROM `userinfo` GROUP BY `exp_grad`");

// if (mysqli_num_rows($years) > 0){
//     foreach ($years AS $yr){
//      $yearsCount = $yr['exp_grad'];
//     }
// } else {
//     $yearsCount = 0;
// }  


$query ="SELECT * FROM userinfo ORDER BY userID DESC";  
$result = mysqli_query($conn, $query);  
 ?>  
 
           <div class="container">  
                <div class="table-responsive">  
                     <table id="summaryData" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Name</td>  
                                    <td>City/ Municipality</td>  
                                    <td>School Name</td>  
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                              $full = $row["last_name"].', '.$row["first_name"].' '.$row["middle_name"];
                               echo '  
                               <tr>  
                                    <td>'.$full.'</td>  
                                    <td>'.$row["city"].'</td>  
                                    <td>'.$row["sch_name"].'</td>  
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                      <button type="submit" onclick="tableToExcel()">GENERATE/ PRINT</button><BR><br><br>

                </div>  
           </div>  
 <script>  
 $(document).ready(function(){  
      $('#summaryData').DataTable();  
 });  
 </script>  
 
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script>
<!--<script src="./js/chartAJAX.js" defer></script>-->
<script>
    function tableToExcel() {
        $("#summaryData").table2excel({
    exclude: ".excludeThisClass",
    name: "Worksheet Name",
    filename: "report.xls", // do include extension
    preserveColors: false // set to true if you want background colors and font colors preserved
});
}
</script>
<?php
include 'includes/scripts.php'; ?>

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
        
        let ctx4 = document.getElementById('catgory').getContext('2d');
        let pieChart4 = new Chart(ctx4, {
             type: 'bar',
    data: {
        labels: [
        'BPEAP', 
        'BPSP SCHEME 1', 
        'BPSP SCHEME 2', 
        'PWD'
        
        ],
        datasets: [{
            label: "Scholars per Category",
            data: [ 
                <?php echo $bpeapCount; ?>,
                        <?php echo $sch1Count; ?>,
                        <?php echo $sch2Count; ?>,
                        <?php echo $pwdCount; ?>
                        ],
            backgroundColor: [
                'blue',
                'blue',
                'blue',
                'blue'
            ],
         
            borderWidth: 0
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
            
        });
        
    //      let ctx5 = document.getElementById('exp').getContext('2d');
    //     let pieChart5 = new Chart(ctx5, {
    //          type: 'bar',
    // data: {
    //     labels: [
    //                         <?php echo $yearsCount; ?>
    //     ],
    //     datasets: [{
    //         label: "Expected Graduates",
    //         data: [ 
    //   <?php echo $gradsCount; ?>

    //                     ],
    //         backgroundColor: [
    //             'blue'
    //         ],
         
    //         borderWidth: 0
    //     }]
    // },
    // options: {
    //     scales: {
    //         y: {
    //             beginAtZero: true
    //         }
    //     }
    // }
            
    //     });
        
//         bestcategoryGraph();

//   function bestcategoryGraph() {
//     $.ajax({
//       url: "dashboard.php",
//       type: "POST",
//       data: { getCity : 1 },
//       dataType: "json",
//       success: function (data) {
//         // let total = [];
//         // let color = [];
//         let cityName = [];

//         for (let count = 0; count < data.length; count++) {
//         //   total.push(data[count].quantity);
//         //   color.push(data[count].color);
//           cityName.push(data[count].areas);
//         }

//         let chartData = {
//           labels: cityName,
//           datasets: [
//             {
//               label: "Scholars Per City",
//               backgroundColor: "red",
//               color: "#fff",
//               data: ["100"],
//             },
//           ],
//         };

//         let barChartSold = document
//           .getElementById("city")
//           .getContext("2d");

//         let barChartSold2 = new Chart(barChartSold, {
//           type: "bar",
//           data: chartData,
//           options: {
//             scale: {
//               ticks: {
//                 precision: 0,
//               },
//             },
//             legend: {
//               display: false,
//             },
//             responsive: true,
//             maintainAspectRatio: false,
//           },
//         });
//       },
//     });
//   }
})


</script>