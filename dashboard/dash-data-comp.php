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
                              <h4> <b> BPEAP SCHOLARS </b></h4>
                            </div>
                        </div>
                           <?php  
require_once 'includes/db_user.php';

$sql = "SELECT * FROM userinfo WHERE category = 'BPEAP' ";
$result = mysqli_query($conn, $sql);  
 ?>  
                 <div class="table-responsive">  
                     <table id="bpeap" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Name</td>  
                                    <td>City/ Municipality</td>  
                                    <td>School Name</td>
                                    <td>Category</td>  

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
                                    <td>'.$row["category"].'</td> 
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
      $('#bpeap').DataTable();  
 });  
 </script>  
 
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script>
<!--<script src="./js/chartAJAX.js" defer></script>-->
<script>
    function tableToExcel() {
        $("#bpeap").table2excel({
    exclude: ".excludeThisClass",
    name: "Worksheet Name",
    filename: "bpeap.xls", // do include extension
    preserveColors: false // set to true if you want background colors and font colors preserved
});
}
</script><br><br><br>
<div class="container-fluid px-4">

                        <div class="card mb-4">
                            <div class="card-body">
                              <h4> <b> BPSP SCHEME 1 SCHOLARS</b> </h4>
                            </div>
                        </div>
                           <?php  
require_once 'includes/db_user.php';

$sql1 = "SELECT * FROM userinfo WHERE category = 'BPSP -SCHEME 1' ";
$result1 = mysqli_query($conn, $sql1);  
 ?>  
 
                <div class="table-responsive">  
                     <table id="sch1" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Name</td>  
                                    <td>City/ Municipality</td>  
                                    <td>School Name</td>
                                    <td>Category</td>  

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
                                    <td>'.$row1["category"].'</td> 
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
      $('#sch1').DataTable();  
 });  
 </script>  <br>


     
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script>
<!--<script src="./js/chartAJAX.js" defer></script>-->
<script>
    function tableToExcel1() {
        $("#sch1").table2excel({
    exclude: ".excludeThisClass",
    name: "Worksheet Name",
    filename: "bpsp_scheme_2.xls", // do include extension
    preserveColors: false // set to true if you want background colors and font colors preserved
});
}
</script><br><br>
<div class="container-fluid px-4">

                        <div class="card mb-4">
                            <div class="card-body">
                              <h4> <b> BPSP SCHEME 2 SCHOLARS</b> </h4>
                            </div>
                        </div>
                           <?php  
require_once 'includes/db_user.php';

$sql2 = "SELECT * FROM userinfo WHERE category = 'BPSP -SCHEME 2' ";
$result2 = mysqli_query($conn, $sql2);  
 ?>  
 
                <div class="table-responsive">  
                     <table id="sch2" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Name</td>  
                                    <td>City/ Municipality</td>  
                                    <td>School Name</td>
                                    <td>Category</td>  

                               </tr>  
                          </thead>  
                          <?php  
                          while($row2 = mysqli_fetch_array($result2))  
                          {  
                              $fullName2= $row2["last_name"] .', '. $row2["first_name"]. ' '. $row2["middle_name"];
                               echo '  
                               <tr>  
                                    <td>'.$fullName2.'</td>  
                                    <td>'.$row2["city"].'</td>  
                                    <td>'.$row2["sch_name"].'</td>
                                    <td>'.$row2["category"].'</td> 
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>
                     <button type="submit" onclick="tableToExcel2()">PRINT</button><BR>

                </div>  
           </div>  
 <script>  
 $(document).ready(function(){  
      $('#sch2').DataTable();  
 });  
 </script>  <br>


     
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script>
<!--<script src="./js/chartAJAX.js" defer></script>-->
<script>
    function tableToExcel2() {
        $("#sch2").table2excel({
    exclude: ".excludeThisClass",
    name: "Worksheet Name",
    filename: "bpsp_scheme_1.xls", // do include extension
    preserveColors: false // set to true if you want background colors and font colors preserved
});
}
</script><br><br>
<div class="container-fluid px-4">

                        <div class="card mb-4">
                            <div class="card-body">
                              <h4> <b> PWD SCHOLARS</b> </h4>
                            </div>
                        </div>
                           <?php  
require_once 'includes/db_user.php';

$sql3 = "SELECT * FROM userinfo WHERE category = 'PWD' ";
$result3 = mysqli_query($conn, $sql3);  
 ?>  
 
                <div class="table-responsive">  
                     <table id="pwd" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Name</td>  
                                    <td>City/ Municipality</td>  
                                    <td>School Name</td>
                                    <td>Category</td>  

                               </tr>  
                          </thead>  
                          <?php  
                          while($row3 = mysqli_fetch_array($result3))  
                          {  
                              $fullName3= $row3["last_name"] .', '. $row3["first_name"]. ' '. $row3["middle_name"];
                               echo '  
                               <tr>  
                                    <td>'.$fullName3.'</td>  
                                    <td>'.$row3["city"].'</td>  
                                    <td>'.$row3["sch_name"].'</td>
                                    <td>'.$row3["category"].'</td> 
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>
                     <button type="submit" onclick="tableToExcel3()">PRINT</button><BR>

                </div>  
           </div>  
 <script>  
 $(document).ready(function(){  
      $('#pwd').DataTable();  
 });  
 </script>  <br>


     
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script>
<!--<script src="./js/chartAJAX.js" defer></script>-->
<script>
    function tableToExcel3() {
        $("#pwd").table2excel({
    exclude: ".excludeThisClass",
    name: "Worksheet Name",
    filename: "pwd_scholars.xls", // do include extension
    preserveColors: false // set to true if you want background colors and font colors preserved
});
}
</script><br><br>
<?php
include 'includes/scripts.php'; ?>

<script>