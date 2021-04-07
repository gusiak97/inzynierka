<?php

$reservation_id = $_GET['reservation_id'];
include 'dbconfig.php';

$sql = "DELETE FROM events WHERE reservation_id='$reservation_id'";

if($db -> query($sql)){
echo "done";
 header('Location:logged_user_events.php');

};


?>