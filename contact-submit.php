<?php 

include 'db.php';

$looking = trim($_POST['looking']);
$postal_code = trim($_POST['postal_code']);
$datetime = trim($_POST['datetime']);
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone_no = trim($_POST['phone_no']);
$address = trim($_POST['address']);
$comment = trim($_POST['comment']);


$submit_time=date('d-m-Y');

$sql = "INSERT INTO quotations(looking, postal_code, datetime, name, email, phone_no, address, comment,submit_time) 
VALUES ('$looking', '$postal_code', '$datetime', '$name', '$email', '$phone_no', '$address', '$comment','$submit_time')";
if (mysqli_query($conn, $sql)) {

	echo json_encode(array("statusCode" => 200, "message" => "Registration successful."));


}
else{
	echo json_encode(array("statusCode" => 201, "message" => "Database Error: " . mysqli_error($conn)));

}