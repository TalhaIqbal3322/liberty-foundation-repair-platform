<?php 

include 'db.php';

$postal_code_enter = trim($_POST['postal_code_enter']);

$submit_time=date('d-m-Y');
$ip_address = $_SERVER['REMOTE_ADDR'];


$sql = "INSERT INTO postal_codes(date, ip_address, postal_codes) 
VALUES ('$submit_time', '$ip_address', '$postal_code_enter')";
if (mysqli_query($conn, $sql)) {

	echo json_encode(array("statusCode" => 200, "message" => "Registration successful."));

}
else{
	echo json_encode(array("statusCode" => 201, "message" => "Database Error: " . mysqli_error($conn)));

}