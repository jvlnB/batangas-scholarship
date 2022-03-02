<?php  
require_once 'includes/db_user.php';
$query ="SELECT * FROM userinfo ORDER BY userID DESC";  
$result = mysqli_query($conn, $query);  
 ?>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
 
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
                               echo '  
                               <tr>  
                                    <td>'.$row["last_name"].'</td>  
                                    <td>'.$row["city"].'</td>  
                                    <td>'.$row["sch_name"].'</td>  
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#summaryData').DataTable();  
 });  
 </script>  
 
 <button type="submit" onclick="tableToExcel()">GENERATE/ PRINT</button><BR><BR>
     <script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>

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