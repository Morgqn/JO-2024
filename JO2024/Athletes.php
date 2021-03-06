<?php
session_start();
include("controller.php");
$uncontroleur = new Controller("localhost","JObdd","root","root");
$uncontroleur->setTable("Personne");
$resultat = $uncontroleur->selectAll();
?>

    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <link rel="shortcut icon" href="img/LogoJO.png" type="image/x-icon" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Athlètes</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css/Athletes.css" rel="stylesheet">
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


        <section class="bg-primary text-white mb-0" id="about">
            <div class="container-fluid" style="padding-top: 50px;">
                <h2 class="text-center text-uppercase text-white" style="font-size: 25px;color:#333!important;">Liste des Athlètes</h2>
               
                
                <div class="row" style="padding: 0 150px 0 150px;">
                    <table>
                        <?php
                      foreach ($resultat as $unResultat)
                      {
                        echo "<tr>
                        <td>".$unResultat['NOM']."</td>
                        <td>".$unResultat['PRENOM']."</td>
                        <td>".$unResultat['AGE']."</td>
                        <td>".$unResultat['SEXE']."</td>
                        <br>
                        </tr>"; 
                      }
                    ?>
                    </table>
                    <table>
                        <?php
                       $uncontroleur->setTable("Sportif");
                       $resultat = $uncontroleur->selectAll();

                      foreach ($resultat as $unResultat)
                      {
                        echo "<tr>
                        <td>".$unResultat['AVATAR']."</td>
                        </tr>
                        <br>"; 
                      }
                      ?>
                    </table>
                   <table>
                        <?php
                      $resultat = $uncontroleur->selectFlag();
                       foreach ($resultat as $unResultat)
                      {
                      echo "<tr>
                       <td>".$unResultat['DRAPEAU']."</td>
                        </tr>
                       <br>"; 
                      }
                      
                    ?>
                    </table>
                    </p>
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
