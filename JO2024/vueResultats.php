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
 <section class="bg-primary text-white mb-0" id="about" style="background-color:#ffffff!important;">
     <br>
     <h2 class="text-center text-uppercase text-white" style="font-size: 25px;font-family: initial;color:#333!important;">Résultats</h2>
  <div class="container">
    <hr style="border-top: 1px solid gray;width: 50%">
    <div class="row">
        <div class="col-xl-12">
            <?php
    session_start();
    include("controller.php");

    
    $uncontroleur = new Controller("localhost","JObdd","root","root");
    
    //$resultat = $uncontroleur->selectAll2(); 
    $tab = array("ID_SPORT"=>$_GET['id']);
    $uncontroleur->setTable("resultat");
    $resultats = $uncontroleur->selectwhereall($tab);


    echo '<center><table border=1>
    <thead>
        <th>Position</th>
        <th>Participant</th>
        <th></th>
        <th></th>
 
        
    </thead>
    <tbody>';

    // echo '<pre>';
    // print_r($resultats);
    // echo '</pre>';
    
    foreach ($resultats as $key =>$resultat) 
    {   
        echo'<tr><td>'.$resultat["MedailleRecu"].'</td>';
        echo'<td><img class="imgR" style="width: 75%;height: 105%;" src ="avatars/'.$resultat['avatar'].'"/></td>';
        echo'<td>'.$resultat['NomRecu']." ".$resultat['PrenomRecu'].'</td>';
        echo'<td><img class="imgR" style="width: 100%;height: 20%;" src ="Flags/'.$resultat['PaysRecu'].'"/></td>';
        
        
        

        
        //echo $resultat.'<br/>';


            }
        echo '</tbody></table></center>';
   
       
       
    ?>
    
   
  
     <link href="style.css/Resultat.css" rel="stylesheet">
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
             </div>
        <div class="col"></div>
        <div class="w-100"></div>
        <div class="col"></div>
        <div class="col"></div>
      
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
