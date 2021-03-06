<?php
  include("controller.php");
 var_dump("sdfsf");

  $uncontroleur = new Controller("localhost","JObdd","root","root");
  $uncontroleur->setTable("Sport");
  $resultat = $uncontroleur->selectAll();
  ?>
<!DOCTYPE html>

<html lang="fr">
<!-- Head Section -->

<head>
  <link rel="shortcut icon" href="img/LogoJO.png" type="image/x-icon" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Resultats</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template -->
  <link href="css/freelancer.min.css" rel="stylesheet">
  <link href="style.css/header.css" rel="stylesheet">
  <link href="style.css/ficheSportif.css" rel="stylesheet">
</head>

<!-- End of head section -->


<!-- Header Section -->

<header>
  <nav>
    <?php
    include("Pages/nav.php");
    ?>
  </nav>
</header>
<link href="style.css/Resultat.css" rel="stylesheet">

<div class="main">
  <div class="main-holder">
    <section id="summer-sports" class="game-results-box alt" style="margin-top: 70px!important;">
      <div class="heading center" style="margin-top: 0;">
          <h2 class="text-center text-uppercase text-white" style="font-size: 25px;color:#333!important;">Resultats</h2>
      </div>
      <hr class="sportHr">
      <div class="select-box">
        <ul class="countries">
           <?php
                foreach ($resultat as $unResultat)
            {
          echo '<li class="box same-height-left" style="height: 129px;">
          <a class="aLink" href="vueResultats.php?id='.$unResultat['ID_SPORT'].'">

              <div class="flag-box">

                <img src="IMG_SPORTS/'.$unResultat['IMG'].'" class="sports90 at" height="96px">
                <span class="mask"></span>
              </div>'.$unResultat['LIBELLE'].'
            </a>
          </li>';}?>
        </ul>
      </div>
    </section>
  </div>

</div>

<footer>
  <?php include("Pages/footer.php");?>
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
  <script src="JS_JO/coutdown.js"></script>
  <!-- Modal -->
  <?php 
include("Pages/form.php");
?>
</footer>