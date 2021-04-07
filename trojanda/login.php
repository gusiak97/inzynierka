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
  $login = $_POST['login'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM user WHERE login='$login' AND password='$password'";

  if($result = @$conn->query($sql))
  {
    $how_many_users = $result->num_rows;
    if($how_many_users>0)
    {
      $_SESSION['logged']=true;

      $row = $result->fetch_assoc();
      $_SESSION['user_id'] = $row['user_id'];
      $_SESSION['first_name'] = $row['first_name'];
      $_SESSION['last_name'] = $row['last_name'];
      $_SESSION['login'] = $row['login'];
      $_SESSION['admin'] = $row['admin'];


      unset($_SESSION['error']);

      $result->free_result();
      if ($_SESSION['admin']==1) {
         header('Location: logged_admin_calendar.php');
      }else {
        header('Location: logged_user_calendar.php');
      }
     
        
    }else
    {
      $_SESSION['error'] = '<span>Nieprawidłowy login lub hasło!</span>';
      header('Location:login_page.php');
    }
  }

  $conn->close();
}




?>
