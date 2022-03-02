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
                        <div class="card mb-4">
                            <div class="card-body">
                              <h4> <b> APPROVED SCHOLARS </b></h4>
                            </div>
                        </div>
                           <?php  
require_once 'includes/db_user.php';

$sql = "SELECT userinfo.userID, userinfo.first_name, userinfo.middle_name, userinfo.last_name, userinfo.city, userinfo.sch_name, requirements.status FROM userinfo INNER JOIN requirements ON userinfo.userID=requirements.userID WHERE status = 'APPROVED' ";
$result = mysqli_query($conn, $sql);  
 ?>  
                 <div class="table-responsive">  
                     <table id="approvedScholars" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Name</td>  
                                    <td>City/ Municipality</td>  
                                    <td>School Name</td>
                                    <td>Status</td>  

                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                              $fullName= $row["last_name"] .', '. $row["first_name"]. ' '. $row["middle_name"];
                               echo '  
                               <tr>  
                                    <td>'.$fullName.'</td>  
                                    <td>'.$row["city"].'</td>  
                                    <td>'.$row["sch_name"].'</td>
                                    <td>'.$row["status"].'</td> 
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                      <button type="submit" onclick="tableToExcel()">PRINT</button><BR>

                </div>
           </div>  
 <script>  
 $(document).ready(function(){  
      $('#approvedScholars').DataTable();  
 });  
 </script>  
 
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script>
<!--<script src="./js/chartAJAX.js" defer></script>-->
<script>
    function tableToExcel() {
        $("#approvedScholars").table2excel({
    exclude: ".excludeThisClass",
    name: "Worksheet Name",
    filename: "approved.xls", // do include extension
    preserveColors: false // set to true if you want background colors and font colors preserved
});
}
</script><br><br><br>
<div class="container-fluid px-4">

                        <div class="card mb-4">
                            <div class="card-body">
                              <h4> <b> DISAPPROVED SCHOLARS</b> </h4>
                            </div>
                        </div>
                           <?php  
require_once 'includes/db_user.php';

$sql1 = "SELECT userinfo.userID, userinfo.first_name, userinfo.middle_name, userinfo.last_name, userinfo.city, userinfo.sch_name, requirements.status FROM userinfo INNER JOIN requirements ON userinfo.userID=requirements.userID WHERE status = 'DISAPPROVED' ";
$result1 = mysqli_query($conn, $sql1);  
 ?>  
 
                <div class="table-responsive">  
                     <table id="disapprovedScholars" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Name</td>  
                                    <td>City/ Municipality</td>  
                                    <td>School Name</td>
                                    <td>Status</td>  

                               </tr>  
                          </thead>  
                          <?php  
                          while($row1 = mysqli_fetch_array($result1))  
                          {  
                              $fullName1= $row1["last_name"] .', '. $row1["first_name"]. ' '. $row1["middle_name"];
                               echo '  
                               <tr>  
                                    <td>'.$fullName1.'</td>  
                                    <td>'.$row1["city"].'</td>  
                                    <td>'.$row1["sch_name"].'</td>
                                    <td>'.$row1["status"].'</td> 
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>
                     <button type="submit" onclick="tableToExcel1()">PRINT</button><BR>

                </div>  
           </div>  
 <script>  
 $(document).ready(function(){  
      $('#disapprovedScholars').DataTable();  
 });  
 </script>  <br>


     
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script>
<!--<script src="./js/chartAJAX.js" defer></script>-->
<script>
    function tableToExcel1() {
        $("#disapprovedScholars").table2excel({
    exclude: ".excludeThisClass",
    name: "Worksheet Name",
    filename: "disapproved.xls", // do include extension
    preserveColors: false // set to true if you want background colors and font colors preserved
});
}
</script><br><br>
<?php
include 'includes/scripts.php'; ?>

<script>