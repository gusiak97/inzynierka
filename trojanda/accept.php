<?php

$reservation_id = $_GET['reservation_id'];
include 'dbconfig.php';

$sql = "UPDATE events SET status=1 WHERE reservation_id='$reservation_id'";

if($db -> query($sql)){
	header('Location:logged_user_events.php');
};


?>