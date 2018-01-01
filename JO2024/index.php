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

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
    <header class="masthead bg-primary text-white text-center" style="background-color: #ab9ec1 !important; padding-bottom: 0;">
        <div class="container">
            <img class="img-fluid mb-5 d-block mx-auto" src="img/JoTransparent.png" alt="" height="400" width="450" style="margin-bottom: 0 !important;">
        </div>
    </header>

    <!-- Portfolio Grid Section -->

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
        <div class="container">
            <h2 class="text-center text-uppercase text-white">DERNIÈRES ACTUALITÉS</h2>
            <hr class="star-light mb-5">
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="lead">Lorem ipsum dolor sit amet, sed natum qualisque ea, nisl suas instructior ei mea, an mel feugait tibique. Modus inciderint dissentiunt vel id, in scripta constituto contentiones vim, sit nibh petentium no.</p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="lead">An aperiam suscipit salutandi pri. No mollis aliquando mea, magna posse reprimique mel no. At labitur percipitur persequeris per, pro cu mutat torquatos. Ut altera sensibus vituperata mel. Duo error numquam te, est et essent nonumes pericula.</p>
                </div>
            </div> 
        </div>
    </section>

    <!-- Contact Section -->
    <section id="alaune">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">À LA UNE</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="lead">Lorem ipsum dolor sit amet, sed natum qualisque ea, nisl suas instructior ei mea, an mel feugait tibique. Modus inciderint dissentiunt vel id, in scripta constituto contentiones vim, sit nibh petentium no.</p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="lead">An aperiam suscipit salutandi pri. No mollis aliquando mea, magna posse reprimique mel no. At labitur percipitur persequeris per, pro cu mutat torquatos. Ut altera sensibus vituperata mel. Duo error numquam te, est et essent nonumes pericula.</p>
                </div>
            </div> 
        </div>
    </section>
        <?php include("Pages/footer.php") ?>
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
