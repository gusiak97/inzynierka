<?php 

  session_start();

  if (!isset($_SESSION['logged']))
  {
    header('Location: login_page.php');
    exit();
  }

  include 'dbconfig.php';

  $sql = "SELECT * FROM events";
  $rows = $db -> query($sql);

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
      <a class="navbar-brand page-scroll" href="index.php">Trojanda</a> 
    </div>
    

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
          <li><a style="color: #7e1b1b; padding-right: 30px"><b>
            <?php 
              echo "Witaj ".$_SESSION['first_name'];
            ?>
          </b></a></li>
          <li><a href="logout.php">Wyloguj</a></li>
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

            <div class="col-sm-2 col-md-2">
              <div class="logged_nav">
                <h3 style="font-size: 18px;"><a href="logged_admin_calendar.php">KALENDARZ</a></h3>
                <h3 style="font-size: 18px;"><a href="logged_admin_events.php">REZERWACJE</a></h3>
                <h3 style="font-size: 18px;"><a href="logged_admin_data.php"> MOJE DANE</a></h3>
              </div>
            </div>

            <div class="col-sm-10 col-md-10">
              <div class="logged_cont">
                <table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Imię</th>
                      <th>Nazwisko</th>
                      <th>Mail</th>
                      <th>Numer telefonu</th>
                      <th>Data</th>
                      <th>Miejsce</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php while($row = $rows->fetch_assoc()): ?>
                      <th><?php echo $row['reservation_id'] ?></th>
                      <td><?php echo $row['first_name'] ?></td>
                      <td><?php echo $row['last_name'] ?></td>
                      <td><?php echo $row['mail'] ?></td>
                      <td><?php echo $row['phone_number'] ?></td>
                      <td><?php echo $row['date'] ?></td>
                      <td><?php echo $row['place'] ?></td>
                      <td><a href="delete.php?reservation_id=<?php echo $row['reservation_id'];?>" class="btn btn-delete">Usuń</a></td>
                      <td>
                        <div class="<?php echo $row['status'] == 0 ? 'show' : 'hidden'; ?>">
                          <a href="accept.php?reservation_id=<?php echo $row['reservation_id'];?>" class="btn btn-accept">Akceptuj</a></td>
                        </div>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                  
                </table>
              </div>
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