<?php
//##########################################################################
// ITEXMO SEND SMS API - PHP - CURL METHOD
// Visit www.itexmo.com/developers.php for more info about this API
//##########################################################################
function itexmo($number,$message,$apicode,$passwd){
			$ch = curl_init();
			$itexmo = array('1' => $number, '2' => $message, '3' => $apicode, 'passwd' => $passwd);
			curl_setopt($ch, CURLOPT_URL,"https://www.itexmo.com/php_api/api.php");
			curl_setopt($ch, CURLOPT_POST, 1);
			 curl_setopt($ch, CURLOPT_POSTFIELDS, 
			          http_build_query($itexmo));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			return curl_exec ($ch);
			curl_close ($ch);
}
//##########################################################################
$reason = $_SESSION['reason'];
$apiKey = "ST-BATAN362725_85L9B";
$apiPwd = "[s[wcr4u97";
$num = $_SESSION['num'];
$apr=$_SESSION['res'];
$name = $_SESSION['name'];


if ($apr == "APPROVED") {
$result = itexmo("0$num","Good day, $name! This is to notify you that your renewal of scholarship by Gov. Mandanas in Batangas Capitol was $apr. Kindly wait for the announcement about the grant giving. 
Official Website: www.him-batangas-scholarship.com  
Facebook Page: www.facebook.com/groups/1333390650049353",$apiKey, $apiPwd);
if ($result == ""){
echo "iTexMo: No response from server!!!
Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
Please CONTACT US for help. ";	
}else if ($result == 0){
echo "<p style='color:green;'<br><br>Message Sent!";
}
else{	
echo "Error Num ". $result . " was encountered!";
}
} 
else if ($apr == "DISAPPROVED") {
$resultDis = itexmo("0$num","Dear $name,

We regret to inform you that your renewal for Scholarship by Gov. Mandanas in Batangas Capitol was $apr. Reason: $reason. You may also check the status of your submitted requirements on our website.

Official Website: www.him-batangas-scholarship.com  
Facebook Page: www.facebook.com/groups/1333390650049353",$apiKey, $apiPwd);
if ($resultDis == ""){
echo "iTexMo: No response from server!!!
Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
Please CONTACT US for help. ";	
}else if ($resultDis == 0){
echo "<p style='color:green;'<br><br>Message Sent!";
}
else{	
echo "Error Num ". $resultDis . " was encountered!";
}
}