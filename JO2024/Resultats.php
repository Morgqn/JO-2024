<?php
session_start();
include("controller.php");
$uncontroleur = new Controller("localhost","JObdd","root","root");

?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="img/LogoJO.png" type="image/x-icon" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Résultats</title>

        <!-- Bootstrap core CSS -->
        <link href="style.css/evenement.css" rel="stylesheet" type="text/css">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Plugin CSS -->
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="css/freelancer.min.css" rel="stylesheet">
        <style type="text/css">
            @import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
            body {
                margin-top: 20px;
            }

            .fa-fw {
                width: 2em;
            }

            a {
                color: white !important;
            }

        </style>
    </head>

    <body id="page-top">

        <?php include("Pages/nav.php") ?>


        <!-- Header -->


        <section class="bg-primary text-white mb-0" id="about" style="background-color:#ffffff!important;">
            <div class="container">
                <br>
                <h2 class="text-center text-uppercase text-white" style="font-size : 20px;color: #333!important; font-size:25px;">Résultats pour chaque Sports</h2>
                <hr style="width:50%;">
                <div class="row">
                    <?php
          $uncontroleur->setTable("Sport");
          $resultat = $uncontroleur->selectAll();
      
          foreach ($resultat as $unResultat) {

            echo '<center>
            <table>
            <td>
            <div class="col"><a style="color: #333!important;border-style:solid;border-color:black;text-align: justify;padding: 50px;background: lightgray;line-height: 28px;font-family: monospace;font-size: 15px;"href="vueResultats.php?id='.$unResultat['ID_SPORT'].'">'.$unResultat['LIBELLE'].'</a>
            </td>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            </table></center>';
          }
          ?>
                    
                    </div>
                    <div class="col-md-9 well">

                        <iframe width="910" height="910" name="myframe" frameborder="yes">
           
         </iframe>


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
