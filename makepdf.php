<?php
session_start();
require ('pdf/fpdf.php');

// grab variables

if(isset($_POST["submit"])) {

$sub1 = $_POST['sub1'];
$un1 = $_POST['un1'];
$gr1 = $_POST['gr1'];

$sub2 = $_POST['sub2'];
$un2 = $_POST['un2'];
$gr2 = $_POST['gr2'];

$sub3 = $_POST['sub3'];
$un3 = $_POST['un3'];
$gr3 = $_POST['gr3'];

$sub4 = $_POST['sub4'];
$un4 = $_POST['un4'];
$gr4 = $_POST['gr4'];

$sub5 = $_POST['sub5'];
$un5 = $_POST['un5'];
$gr5 = $_POST['gr5'];

$sub6 = $_POST['sub6'];
$un6 = $_POST['un6'];
$gr6 = $_POST['gr6'];

$sub7 = $_POST['sub7'];
$un7 = $_POST['un7'];
$gr7 = $_POST['gr7'];

$sub8 = $_POST['sub8'];
$un8 = $_POST['un8'];
$gr8 = $_POST['gr8'];

$sub9 = $_POST['sub9'];
$un9 = $_POST['un9'];
$gr9 = $_POST['gr9'];

$sub10 = $_POST['sub10'];
$un10 = $_POST['un10'];
$gr10 = $_POST['gr10'];

$sub11 = $_POST['sub11'];
$un11 = $_POST['un11'];
$gr11 = $_POST['gr11'];

$sub12 = $_POST['sub12'];
$un12 = $_POST['un12'];
$gr12 = $_POST['gr12'];

$name = $_SESSION['name'];
$middle = $_SESSION['middle'];
$lname = $_SESSION['lname'];
$cat = $_SESSION['category'];
$yr = $_SESSION['year'];
$schName = $_SESSION['schName'];

$unTotal = $_POST['total_units'];
$gwa = $_POST['gwa_gr'];
$func = $_POST['func'];
$rel = $_POST['rel'];
$pos = $_POST['pos'];


$fullName = $name . " " . $middle . " " . $lname;

//create new pdf instance
//$mpdf = new \Mpdf\Mpdf();
$data = new FPDF();
//create our pdf

$data -> AddPage();
$data -> SetFont('Courier', 'B' , 12);
$data -> Cell(200, 10, 'Batangas Scholarship', 0 , 1, 'C');
$data -> Cell(200, 10, 'Batangas Provincial Capitol, Batangas City', 0 , 1, 'C');

$data -> SetFont('Courier', 'B' , 15);
$data -> Cell(55, 10, 'Personal Details', 0 , 1);

$data -> SetFont('Courier', '' , 12);
$data -> Cell(55, 5, 'Full Name', 0 , 0);
$data -> Cell(58, 5, ': '.$fullName, 0 , 1);
$data -> Cell(55, 5, 'Year Level', 0 , 0);
$data -> Cell(55, 5, ': '.$yr, 0 , 1);
$data -> Cell(55, 5, 'School Name', 0 , 0);
$data -> Cell(55, 5, ': '. $schName, 0 , 1);
$data -> Cell(55, 5, 'Category', 0 , 0);
$data -> Cell(55, 5, ': '. $cat, 0 , 1);
$data -> Line(10, 45, 200, 45);
$data -> Ln(5);

$data -> SetFont('Courier', 'B' , 15);
$data -> Cell(55, 7, 'Grades', 0 , 1);

$data -> SetFont('Courier', 'B' , 12);
$data -> Cell(100, 10, 'Subject', 1 , 0, 'C');
$data -> Cell(40, 10, 'Units', 1 , 0, 'C');
$data -> Cell(40, 10, 'Grade', 1 , 1, 'C');

$data -> SetFont('Courier', '' , 12);
$data -> Cell(100, 7, $sub1 , 1 , 0, 'C');
$data -> Cell(40, 7, $un1, 1 , 0, 'C');
$data -> Cell(40, 7, $gr1, 1 , 1, 'C');

$data -> Cell(100, 7, $sub2 , 1 , 0, 'C');
$data -> Cell(40, 7, $un2, 1 , 0, 'C');
$data -> Cell(40, 7, $gr2, 1 , 1, 'C');

$data -> Cell(100, 7, $sub3 , 1 , 0, 'C');
$data -> Cell(40, 7, $un3, 1 , 0, 'C');
$data -> Cell(40, 7, $gr3, 1 , 1, 'C');

$data -> Cell(100, 7, $sub4 , 1 , 0, 'C');
$data -> Cell(40, 7, $un4, 1 , 0, 'C');
$data -> Cell(40, 7, $gr4, 1 , 1, 'C');

$data -> Cell(100, 7, $sub5 , 1 , 0, 'C');
$data -> Cell(40, 7, $un5, 1 , 0, 'C');
$data -> Cell(40, 7, $gr5, 1 , 1, 'C');

$data -> Cell(100, 7, $sub6 , 1 , 0, 'C');
$data -> Cell(40, 7, $un6, 1 , 0, 'C');
$data -> Cell(40, 7, $gr6, 1 , 1, 'C');

$data -> Cell(100, 7, $sub7 , 1 , 0, 'C');
$data -> Cell(40, 7, $un7, 1 , 0, 'C');
$data -> Cell(40, 7, $gr7, 1 , 1, 'C');

$data -> Cell(100, 7, $sub8 , 1 , 0, 'C');
$data -> Cell(40, 7, $un8, 1 , 0, 'C');
$data -> Cell(40, 7, $gr8, 1 , 1, 'C');

$data -> Cell(100, 7, $sub9 , 1 , 0, 'C');
$data -> Cell(40, 7, $un9, 1 , 0, 'C');
$data -> Cell(40, 7, $gr9, 1 , 1, 'C');

$data -> Cell(100, 7, $sub10 , 1 , 0, 'C');
$data -> Cell(40, 7, $un10, 1 , 0, 'C');
$data -> Cell(40, 7, $gr10, 1 , 1, 'C');

$data -> Cell(100, 7, $sub11, 1 , 0, 'C');
$data -> Cell(40, 7, $un11, 1 , 0, 'C');
$data -> Cell(40, 7, $gr11, 1 , 1, 'C');

$data -> Cell(100, 7, $sub12 , 1 , 0, 'C');
$data -> Cell(40, 7, $un12, 1 , 0, 'C');
$data -> Cell(40, 7, $gr12, 1 , 1, 'C');

$data -> SetFont('Courier', 'B' , 12);
$data -> Cell(100, 7, "Total/ GWA" , 1 , 0, 'C');
$data -> SetFont('Courier', '' , 12);
$data -> Cell(40, 7, $unTotal, 1 , 0, 'C');
$data -> Cell(40, 7, $gwa, 1 , 1, 'C');
$data -> Cell(55, 7, '', 0 , 1);


$data -> SetFont('Courier', '' , 12);
$data -> Cell(55, 5, 'Name of Functionary', 0 , 0);
$data -> Cell(58, 5, ': '.$func, 0 , 1);
$data -> Cell(55, 5, 'Relation', 0 , 0);
$data -> Cell(55, 5, ': '.$rel, 0 , 1);
$data -> Cell(55, 5, 'Position', 0 , 0);
$data -> Cell(55, 5, ': '. $pos, 0 , 1);



// output
//$data ->Output($name.'.pdf' , 'D');
$data ->Output();

}

?>