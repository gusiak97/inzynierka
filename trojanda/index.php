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
<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">

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


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="w3-light-grey">

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
      <a class="navbar-brand page-scroll" href="#page-top">Trojanda</a> 
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
        <li><a href="#login" class="page-scroll">Login</a></li>
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
            <h1>Trojanda</h1>
        </div>
      </div>
    </div>
  </div>
</header>



<main>



<!-- About Section -->
<article>
<div id="about">
  <div class="container">
    <div class="about-text">
        <h2>O Zespole</h2>
        <hr>
        <p align="justify">Trojanda to łemkowski zespół składający się z grupy czteru pozytywnych osób, żyjących muzyką. Na nasz repertuar składają się piosenki łemkowskie, ukraińskie oraz polskie. Możecie nas głównie znaleźć na weselach, także tych bardziej tradycyjnych, łemkowskich Watrach, czy zabawach Ostatkowych lub Małankach. Jako zespół istniejemy od 2009 roku, co sprawia, że w swoim dorobku mamy już parę dobrych lat przebywania na łemkowskiej scenie muzycznej. </h3>

        <p align="justify">Tрoяндa - це лемківський гурт, що складається з групи з чотирьох позитивних людей, які живуть музикою. Наш репертуар складається з лемківських, українських та польських пісень. В основному ви можете зустріти нас на весіллях, також на тих традиційних, Лeмківських Вaтрaх, або Shrovetide party чи Маланки. Як гурт, ми існуємо з 2009 року, а це означає, що на музичній сцені Лeмківськoй у нас вже було кілька років.</p>
    </div>
  </div>
</div>
</article>



<!-- Events -->

<div class="events">
  <div class="container" >
    <div class="row">

    <div class="events_item col-xs-6 col-md-3">
      <div class="events_image" class="img-responsive" style="background: url('img/events/event_1.jpg') center center; "></div>
      <div class="overlay">      
        <h2>Wesela</h2>
      </div>
    </div>
    
    <div class="events_item col-xs-6 col-md-3">
      <div class="events_image" class="img-responsive" style="background: url('img/events/event_2.jpg') center center; "></div>
      <div class="overlay">      
        <h2>Ostatki</h2>
      </div>
    </div>
    
    <div class="events_item col-xs-6 col-md-3">
      <div class="events_image" class="img-responsive" style="background: url('img/events/event_3.jpg') center center; "></div>
      <div class="overlay">      
        <h2>Zabawy</h2>
      </div>
    </div>
    
    <div class="events_item col-xs-6 col-md-3">
      <div class="events_image" class="img-responsive" style="background: url('img/events/event_4.jpg') center center; "></div>
      <div class="overlay">      
        <h2>Małanki</h2>
      </div>
    </div>
  
    </div>
  </div>
</div>



<!-- Team Section -->

<div id="team" class="text-center">
  <div class="overlay">
    <div class="container">

      <div class="col-md-10 col-md-offset-1 section-title">
        <h2>Skład</h2>
        <hr>
      </div>
    </div>

    <div class="container">
       <div id="row">
        <div class="team col-xs-12 col-sm-6 col-md-3">
          <div class="thumbnail">
            <div class="team-img"><img src="img/team/team_1.jpg" alt="..."></div>
            <div class="caption">
              <h3>KEYBORD / AKORDEON</h3>
            </div>
          </div>
        </div>
        <div class="team col-xs-12 col-sm-6 col-md-3">
          <div class="thumbnail">
            <div class="team-img"><img src="img/team/team_1.jpg" alt="..."></div>
            <div class="caption">
              <h3>SKRZYPCE</h3>
            </div>
          </div>
        </div>
        <div class="team col-xs-12 col-sm-6 col-md-3">
          <div class="thumbnail">
            <div class="team-img"><img src="img/team/team_1.jpg" alt="..."></div>
            <div class="caption">
              <h3>ŚPIEW</h3>
            </div>
          </div>
        </div>
        <div class="team col-xs-12 col-sm-6 col-md-3">
          <div class="thumbnail">
            <div class="team-img"><img src="img/team/team_1.jpg" alt="..."></div>
            <div class="caption">
              <h3>TRĄBKA</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Gallery -->

<div id="gallery" class="text_center">
  <div class="container">
    <div class="gallery-text">
      <h2>Galeria</h2>
      <hr>
      <p align="center">Zapraszamy Państwa do obejrzenia naszej galerii. Znajdują się tutaj zdjęcia z wesel, zabaw oraz innych wydarzeń kulturalnych.</p>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="gallery-item">
          <a href="img/gallery/1.jpg" data-lightbox="mygallery" data-title="team pictures">
          <img src="img/gallery/s1.jpg" class="img-responsive"></a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="gallery-item">
          <a href="img/gallery/2.jpg" data-lightbox="mygallery" data-title="Trojanda">
          <img src="img/gallery/s2.jpg" class="img-responsive"></a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="gallery-item">
          <a href="img/gallery/3.jpg" data-lightbox="mygallery" data-title="Trojanda">
          <img src="img/gallery/s3.jpg" class="img-responsive"></a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="gallery-item">
          <a href="img/gallery/4.jpg" data-lightbox="mygallery" data-title="Trojanda">
          <img src="img/gallery/s4.jpg" class="img-responsive"></a>
        </div>
      </div>
      
      <div class="col-sm-6 col-md-4">
        <div class="gallery-item">
          <a href="img/gallery/5.jpg" data-lightbox="mygallery" data-title="Trojanda">
          <img src="img/gallery/s5.jpg" class="img-responsive"></a>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="gallery-item">
          <a href="img/gallery/6.jpg" data-lightbox="mygallery" data-title="Trojanda">
          <img src="img/gallery/s6.jpg" class="img-responsive"></a>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Calendar -->

<div id="calendar" class="text-center">
  <div class="overlay">
    <div class="container">

      <div class="col-md-10 col-md-offset-1 section-title">
        <h2>Kalendarz</h2>
        <hr>
      </div>
    </div>

    <div class="container">
      <div class="w3-content" style="max-width:1600px">
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

    <div class="container">
      <div class="login-form" style="margin-top: 80px">
          <form method ="post" action="booking.php"> 
            <input type="text" placeholder="Imię" name="first_name" required style="margin: 10px">
            <input type="text" placeholder="Nazwisko" name="last_name" required style="margin: 10px">
            <br>
            <input type="text" placeholder="Mail" name="mail" required style="margin: 10px">
            <input type="text" placeholder="Numer telefonu" name="phone_number" required style="margin: 10px">
            <br>
            <input class="data_type" type="date" placeholder="Data" name="date" required style="margin: 10px 10px 10px 10px">
            <input type="text" placeholder="Miejsce" name="place" required style="margin: 10px 10px 30px 10px ">
            
            <button type="submit" style="margin: 10px 10px 10px 10px">ZAREZERWUJ</button>
                
          </form>
      </div>

            
        </div>
    </div>
  </div>
</div>




<!-- Contact -->

<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title text-center">
      <h2>ZAPYTAJ O REZERWACJĘ</h2>
      <hr>
      <p style="font-size: 25px; margin-bottom: 30px; color: #333">Zapraszamy do kontaktu!</p>
    
    <a href="mailto:jan.kowalski@gmail.com?subject=[trojanda]"><p><b>jan.kowalski@gmail.com</b></p></a>
    <p>+48 123 456 789</p>

    </div>
  </div>
</div>
  


<!-- Login -->

<div id="login" class="text-center">
  <div class="overlay">
    <div class="login">

      <div class="col-md-10 col-md-offset-1 section-title">
        <a href="login_page.php"><button class="button">LOGIN</button></a>
  
      </div>
    </div>

    
  </div>
</div>

</main>

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
<script src="scheduler/codebase/sources/dhtmlxscheduler.js"></script>

</body>

