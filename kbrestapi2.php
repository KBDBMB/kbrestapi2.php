
<?php


$json = file_get_contents('php://input');


$data = json_decode($json, true);

$arr = $data;


$jsonR1 = json_encode($arr, true);

$jsonResult = json_encode($arr, JSON_PRETTY_PRINT);

header("Content-Type: application/json");

echo $jsonResult;



$timestamp = date('Y-m-d H:i:s');



$clientIP = $_SERVER['REMOTE_ADDR'];
$C2 = $_SERVER['HTTP_CLIENT_IP'];
$C3 = $_SERVER['HTTP_X_FORWARDED_FOR'];
$C4 = $_SERVER['REMOTE_USER'];
$C5 = $_SERVER['REMOTE_HOST'];
$C6 = $_SERVER['SERVER_NAME'];
$C7 = $_SERVER['SERVER_ADDR'];




$userAgent = $_SERVER['HTTP_USER_AGENT'];
$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestURI = $_SERVER['REQUEST_URI'];
$domainName = $_SERVER['HTTP_HOST'];
$clientDomain = gethostbyaddr($clientIP);

$logEntry .= "Timestamp: $timestamp \n";
$logEntry .= "Client IP: $clientIP \n";



$logEntry .= "Client Domain: $clientDomain  6: $C6 7: $C7 \n";




$logEntry .= "User Agent: $userAgent \n";
$logEntry .= "Request Method: $requestMethod \n";
$logEntry .= "Request URI: $requestURI \n";
$logEntry .= "Response: $jsonR1 \n\n";
$logEntry .= "--------------------END-------------------- \n\n";


file_put_contents('kblog.txt',$logEntry, FILE_APPEND);

?>
