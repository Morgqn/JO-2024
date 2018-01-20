<?php
session_start();
var_dump($_SESSION);
include("controller.php");
$uncontroleur = new Controller("localhost","JObdd","root","root");
$uncontroleur->setTable("Evenement");
$resultat = $uncontroleur->selectAll2();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <link rel="shortcut icon" href="img/LogoJO.png" type="image/x-icon"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Evenements</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
  @import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
  body{margin-top:20px;}
  .fa-fw {width: 2em;
  }
  a 
  {
    color: white !important;
  }
</style>
<link href="style.css/evenement.css" rel="stylesheet" type="text/css">
<!-- Custom fonts for this template -->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

<!-- Plugin CSS -->
<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

<!-- Custom styles for this template -->
<link href="css/freelancer.min.css" rel="stylesheet">

</head>
<body id="page-top">
 <?php include("Pages/nav.php") ?>
 <section class="bg-primary text-white mb-0" id="about" style="background-color: #222222d6!important;">
     <h2 class="text-center text-uppercase text-white" style="font-size: 25px; font-family: initial;">Liste des évènements</h2>
  <div class="container">
    <hr style="border-top: 1px solid white;width: 50%">
      <br>
    <div class="row">
   <div class="col">
       <center>
        <a href="/photos/olympic-day">
        <picture class="img">
            <img srcset="https://stillmed.olympic.org/media/Photos/2013/07/13/National%20Olympic%20Committee%20-%20Singapore_243267.jpg?interpolation=lanczos-none&amp;fit=around|340:340&amp;crop=340:340;*,*, https://stillmed.olympic.org/media/Photos/2013/07/13/National%20Olympic%20Committee%20-%20Singapore_243267.jpg?interpolation=lanczos-none&amp;fit=around|680:680&amp;crop=680:680;*,* 2x" alt=""></picture>
            </a>
           <br>
           <br>
            <h3 style="font-size:25px;"><a href="/photos/olympic-day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Journée olympique</font></font></a></h3>
        </center>
            <br>
        </div>
    <div class="col"><center>
        <a href="/photos/olympic-day">
        <picture class="img">
            <img srcset="https://stillmed.olympic.org/media/Photos/2013/07/13/National%20Olympic%20Committee%20-%20Singapore_243267.jpg?interpolation=lanczos-none&amp;fit=around|340:340&amp;crop=340:340;*,*, https://stillmed.olympic.org/media/Photos/2013/07/13/National%20Olympic%20Committee%20-%20Singapore_243267.jpg?interpolation=lanczos-none&amp;fit=around|680:680&amp;crop=680:680;*,* 2x" alt=""></picture>
            </a>
           <br>
           <br>
            <h3 style="font-size:25px;"><a href="/photos/olympic-day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Journée olympique</font></font></a></h3>
        </center>
            <br>
        </div>
    <div class="w-100"></div>
        <br>
    <div class="col"><center>
        <a href="/photos/olympic-day">
        <picture class="img">
            <img srcset="https://stillmed.olympic.org/media/Photos/2013/07/13/National%20Olympic%20Committee%20-%20Singapore_243267.jpg?interpolation=lanczos-none&amp;fit=around|340:340&amp;crop=340:340;*,*, https://stillmed.olympic.org/media/Photos/2013/07/13/National%20Olympic%20Committee%20-%20Singapore_243267.jpg?interpolation=lanczos-none&amp;fit=around|680:680&amp;crop=680:680;*,* 2x" alt=""></picture>
            </a>
           <br>
           <br>
            <h3 style="font-size:25px;"><a href="/photos/olympic-day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Journée olympique</font></font></a></h3>
        </center>
            <br>
        </div>
        <div class="col"><center>
        <a href="/photos/olympic-day">
        <picture class="img">
            <img srcset="https://stillmed.olympic.org/media/Photos/2013/07/13/National%20Olympic%20Committee%20-%20Singapore_243267.jpg?interpolation=lanczos-none&amp;fit=around|340:340&amp;crop=340:340;*,*, https://stillmed.olympic.org/media/Photos/2013/07/13/National%20Olympic%20Committee%20-%20Singapore_243267.jpg?interpolation=lanczos-none&amp;fit=around|680:680&amp;crop=680:680;*,* 2x" alt=""></picture>
            </a>
           <br>
           <br>
            <h3 style="font-size:25px;"><a href="/photos/olympic-day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Journée olympique</font></font></a></h3>
        </center>
            <br>
        </div>
 <div class="w-100"></div>
        <br>
        <div class="col"><center>
        <a href="/photos/olympic-day">
        <picture class="img">
            <img srcset="https://stillmed.olympic.org/media/Photos/2013/07/13/National%20Olympic%20Committee%20-%20Singapore_243267.jpg?interpolation=lanczos-none&amp;fit=around|340:340&amp;crop=340:340;*,*, https://stillmed.olympic.org/media/Photos/2013/07/13/National%20Olympic%20Committee%20-%20Singapore_243267.jpg?interpolation=lanczos-none&amp;fit=around|680:680&amp;crop=680:680;*,* 2x" alt=""></picture>
            </a>
           <br>
           <br>
            <h3 style="font-size:25px;"><a href="/photos/olympic-day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Journée olympique</font></font></a></h3>
        </center>
            <br>
        
        </div>
        <div class="col"><center>
        <a href="/photos/olympic-day">
        <picture class="img">
            <img srcset="https://stillmed.olympic.org/media/Photos/2013/07/13/National%20Olympic%20Committee%20-%20Singapore_243267.jpg?interpolation=lanczos-none&amp;fit=around|340:340&amp;crop=340:340;*,*, https://stillmed.olympic.org/media/Photos/2013/07/13/National%20Olympic%20Committee%20-%20Singapore_243267.jpg?interpolation=lanczos-none&amp;fit=around|680:680&amp;crop=680:680;*,* 2x" alt=""></picture>
            </a>
           <br>
           <br>
            <h3 style="font-size:25px;"><a href="/photos/olympic-day"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Journée olympique</font></font></a></h3>
        </center>
            <br>
        </div>
        <div class="w-100"></div>    
        </div>
        </div>
</section>
<?php include("Pages/footer.php"); ?>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
  <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
    <i class="fa fa-chevron-up"></i>
  </a>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="js/freelancer.min.js"></script>
<!-- Modal -->
<?php 
include("Pages/form.php");
?>
</body>
</html>
