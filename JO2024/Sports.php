<?php
session_start();
var_dump($_SESSION);
include("controller.php");
$uncontroleur = new Controller("localhost","JObdd","root","root");
$uncontroleur->setTable("Sport");
$resultat = $uncontroleur->selectAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <link rel="shortcut icon" href="img/LogoJO.png" type="image/x-icon"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sports</title>
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


 <!-- Header -->
 <div class="container">
 </div>
 <section class="bg-primary text-white mb-0" id="about">
  <div class="container">
    <h2 class="text-center text-uppercase text-white" style="font-size: 20px;">Sports</h2>
    <hr class="star-light mb-5">
    <div class="row">
      <div class="col-md-3 sideNav">
        <ul class="nav nav-pills nav-stacked ulSideNav" id="buttons" style="display: block;">
          <?php
        
          foreach ($resultat as $unResultat) {

            echo '<li ><a href="vueSport.php?id='.$unResultat['ID_SPORT'].'" target="myframe">'.$unResultat['LIBELLE'].'</a></li>';
          }
          ?>
        </ul>
      </div>
      <div class="col-md-9 well">
          <div width="800" height="768" name="myframe" frameborder="yes" srcdoc="<h1> Jeux olympiques</h1>Les Jeux olympiques d'été de 2012 (Jeux de la XXXe Olympiade de l'ère moderne) ont lieu du 27 juillet1 au 12 août 20122 à Londres. La capitale britannique est la première ville à accueillir les Jeux olympiques modernes pour la troisième fois3,4, après ceux de 1908 et de 19485,6.

La ville de Londres a été élue parmi cinq villes candidates lors de la 117e session du Comité international olympique (CIO), le 6 juillet 2005 à Singapour. Sebastian Coe est le chef du comité de candidature puis le président du Comité organisant les Jeux olympiques et les Jeux paralympiques d'été de 2012.<br/>La ville de Londres a été élue parmi cinq villes candidates lors de la 117e session du Comité international olympique (CIO), le 6 juillet 2005 à Singapour. Sebastian Coe est le chef du comité de candidature puis le président du Comité organisant les Jeux olympiques et les Jeux paralympiques d'été de 2012. <br/>Les Jeux olympiques d'été de 2012 (Jeux de la XXXe Olympiade de l'ère moderne) ont lieu du 27 juillet1 au 12 août 20122 à Londres. La capitale britannique est la première ville à accueillir les Jeux olympiques modernes pour la troisième fois3,4, après ceux de 1908 et de 19485,6.

La ville de Londres a été élue parmi cinq villes candidates lors de la 117e session du Comité international olympique (CIO), le 6 juillet 2005 à Singapour. Sebastian Coe est le chef du comité de candidature puis le président du Comité organisant les Jeux olympiques et les Jeux paralympiques d'été de 2012.<br/>La ville de Londres a été élue parmi cinq villes candidates lors de la 117e session du Comité international olympique (CIO), le 6 juillet 2005 à Singapour. Sebastian Coe est le chef du comité de candidature puis le président du Comité organisant les Jeux olympiques et les Jeux paralympiques d'été de 2012.  <br/>Les Jeux olympiques d'été de 2012 (Jeux de la XXXe Olympiade de l'ère moderne) ont lieu du 27 juillet1 au 12 août 20122 à Londres. La capitale britannique est la première ville à accueillir les Jeux olympiques modernes pour la troisième fois3,4, après ceux de 1908 et de 19485,6.

La ville de Londres a été élue parmi cinq villes candidates lors de la 117e session du Comité international olympique (CIO), le 6 juillet 2005 à Singapour. Sebastian Coe est le chef du comité de candidature puis le président du Comité organisant les Jeux olympiques et les Jeux paralympiques d'été de 2012.<br/>La ville de Londres a été élue parmi cinq villes candidates lors de la 117e session du Comité international olympique (CIO), le 6 juillet 2005 à Singapour. Sebastian Coe est le chef du comité de candidature puis le président du Comité organisant les Jeux olympiques et les Jeux paralympiques d'été de 2012.   ">
            
         </div>       
      </div>
        
        
    </div>

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
