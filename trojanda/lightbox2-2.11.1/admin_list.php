<?php

session_start();
require_once "connect.php";


//connection to database
$conn = new mysqli($host, $db_user, $db_password, $db_name);

//chceck connection
if (!$conn) {
  echo 'Connection error: '.mysqli_connect_error();
}
else
{
	$first_name = "";
  	$last_name = "";
  	$mail = "";
  	$phone_number = "";
  	$date = "";
  	$date=date("Y-m-d",strtotime($date));
  	$place = "";

  	$sql = "INSERT INTO events (first_name, last_name, mail, phone_number, date, place, status) 
  	VALUES ('$first_name','$last_name','$mail','$phone_number', '$date', '$place', '0')";

?>