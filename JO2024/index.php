<?php
session_start();
include("controller.php");
include ("signUpController.php");
$uncontroleur = new SignUpController("localhost","JObdd","root","root");
$uncontroleur->setTable("myuser");

if(isset($_POST['inscription']))
{
    $avatar_path = 'uploads/' . basename($_FILES['avatar']['name']);
    $resultat = $uncontroleur->signUp($_POST, $avatar_path);

    if($resultat == true)
    {
        echo ("<span style= \"color : green;\">inscription reussie.Vous pouvez vous connecter à votre compte</span><br/");  
    }
    else
    {
        echo "Vos mots de passe ne sont pas identiques";
    }
}

?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <link rel="shortcut icon" href="img/LogoJO.png" type="image/x-icon" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Accueil</title>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
        <link href="css/freelancer.min.css" rel="stylesheet">
        <link href="style.css/header.css" rel="stylesheet">



    </head>
    <body id="page-top">
        <?php
    include("Pages/nav.php");?>

            <!-- Header -->
            <header class="text-white text-center" style="padding-top: 30px !important ;background: transparent url('img/HeaderJO2024.jpg') no-repeat !important;
                 !important; background-size: 100% 100% !important; padding-top: 60px !important;">
                <div class="container">
                    <img class="img-fluid mb-5 d-block mx-auto" src="img/JoTransparent.png" alt="" height="400" width="450" style="margin-bottom: 0 !important;">
                </div>
            </header>
            <style>
                #days,
                #hours,
                #minutes,
                #seconds {
                    display: inline;
                    padding: 15px;
                    border: 10px solid #111;
                    box-shadow: 35px 35px 7px #999999;
                    border-bottom-right-radius: 15px;
                    border-radius: 25px;
                    padding: 15px 25px;
                    margin: 40px;
                    font-size: 40px;
                    background-color: #2D3E4F;
                    color: white;
                }               
                #days{                  
                    border-color: #1486C5;
                }               
                #minutes{
                    border-color: #DD1232;
                }               
                #seconds{
                    border-color: #F3C22C;
                }
            </style>
            <div class="container">
                <div class="row" style="place-content: center;">
                    <p id="days"></p>
                    <p id="hours"></p>
                    <p id="minutes"></p>
                    <p id="seconds"></p>
                </div>
            </div>
            <!-- Portfolio Grid Section -->
            <!-- About Section -->
            <section class="bg-primary text-white mb-0" id="about">
                <div class="container">
                    <h2 class="text-center text-uppercase text-white">DERNIÈRES ACTUALITÉS</h2>
                    <hr class="star-light mb-5">
                    <div class="row">
                        <div class="col-lg-4 ml-auto">
                            <?php include 'Flux.php'; ?>
                        </div>
                        <div class="col-lg-4 mr-auto">
                            <?php include 'Flux2.php'; ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Section -->
            
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
    </body>
    </html>
