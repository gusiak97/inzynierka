<?php

session_start();

if ((isset($_SESSION['logged'])) && ($_SESSION['logged']==true))
{
  if ($_SESSION['admin']==1) {
    header('Location: logged_admin_calendar.php');
  }else {
    header('Location: logged_user_calendar.php'); 
  }
  
  exit();
}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Trojanda</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- Fonts
    ================================================== -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation
==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
        <span class="sr-only">Toggle navigation</span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand page-scroll" href="index.php">Trojanda</a> 
    </div>
    

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">O zespole</a></li>
        <li><a href="#team" class="page-scroll">Skład</a></li>
        <li><a href="#gallery" class="page-scroll">Galeria</a></li>
        <!--<li><a href="#demo" class="page-scroll">Demo</a></li>-->
        <li><a href="#calendar" class="page-scroll">Kalendarz</a></li>
        <li><a href="#contact" class="page-scroll">Kontakt</a></li>
        <li><a href="#login" class="page-scroll" style="color: #7e1b1b">Login</a></li>
		  </ul>
    </div>
  </div>
</nav>


<!-- Header -->

<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <div class="login-form">
              <h3 style="padding-top: 40px;">LOGIN</h3>
               <form method ="post" action="login.php">
                
                  <div class="fill"><p>Nazwa</p></div>
                  <input type="text" placeholder="Wpisz nazwę" name="login" required>

                  <div class="fill"><p>Hasło</p></div>
                  <input type="password" placeholder="Wpisz hasło" name="password" required>
                  <button type="submit">ZALOGUJ</button>
                  <div><p style="color: #e60000; margin-top: -15px;"><?php if(isset($_SESSION['error'])) echo $_SESSION['error'];?></p></div>
                
               </form>
            </div>

            
        </div>
      </div>
    </div>
  </div>
</header>




<!-- Footer -->

<footer>
  <p>Agnieszka Pałczak &copy; Trojanda</p>

</footer>

<script type="text/javascript" src="js/blueimp-gallery.min.js"></script>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script>   
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>

</body>