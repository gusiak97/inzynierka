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
	$first_name = $_POST['first_name'];
  	$last_name = $_POST['last_name'];
  	$mail = $_POST['mail'];
  	$phone_number = $_POST['phone_number'];
  	$date = $_POST['date'];
  	$date=date("Y-m-d",strtotime($date));
  	$place = $_POST['place'];

  	$sql = "INSERT INTO events (first_name, last_name, mail, phone_number, date, place, status) 
  	VALUES ('$first_name','$last_name','$mail','$phone_number', '$date', '$place', 0)";

  	if ($conn->query($sql) === TRUE) {
    
    echo $date;
    //$_SESSION['thx'] = '<span>Dziękujemy za dokonanie rezerwacji</span>';
    header('Location:index.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

  	$conn->close();

}

?>
