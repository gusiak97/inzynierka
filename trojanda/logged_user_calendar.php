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

<!-- Scheduler -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
  <script src="jquery.min.js"></script>
<script>
  $(function() {
    $( "#skills" ).autocomplete({
      source: 'search.php'
    });
  });
  </script>
<?php include_once('functions.php'); ?>

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
                <h3 style="font-size: 18px;"><a href="logged_user_calendar.php">KALENDARZ</a></h3>
                <h3 style="font-size: 18px;"><a href="logged_user_data.php"> MOJE DANE</a></h3>
              </div>
            </div>

            <div class="col-sm-10 col-md-10">
              <div class="logged_cont" style="height: 700px;">
                
                  <div class="w3-content">
                    <div class="w3-row w3-padding w3-border">

                      <!-- Blog entries -->
                      <div class="w3-col l12 s12">
                        <!-- Blog entry -->
                        <div class="w3-container w3-white w3-margin w3-padding-large">
        
                          <div id="calendar_div">
                            <?php echo getCalender1(); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                 
                </div>
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