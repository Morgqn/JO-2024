<?php
 include("controller.php");
   $uncontroleur = new Controller("localhost","JObdd","root","root");
    $uncontroleur->setTable("Sport");
    //$resultat = $uncontroleur->selectAll2(); 
    $tab = array("ID_SPORT"=>$_GET['id']);
    $resultat = $uncontroleur->selectwhere($tab);
     $avatars = $resultat['IMG'];
            $sportifImagesArray = explode('"',$avatars);
            $sportCover = $sportifImagesArray[1];
            $sportProfil = $sportifImagesArray[0];
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
        <title>Fiche Sportive</title>
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
        <link href="style.css/Sport.css" rel="stylesheet">
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

    <!-- End of header section -->

    <body>
        <div class="container-fluid resetPadding hasMarginTop " style="margin: 103px 0 0 0;">
            <div class="row">
                <div class="col-lg-12 resetPadding">
                    <?php  echo'<img class="imageCrop" src="IMG_SPORTS/'.$sportCover.'">';?>
                </div>
            </div>
        </div>
        <div class="row divP">
            <article id="vignette" class="vignette-desktop">
                <picture class="image">
                    <?php echo'<source srcset="IMG_SPORTS/'.$sportProfil.'" media="(min-width: 1024px)">
                <source srcset="IMG_SPORTS/'.$sportProfil.'" media="(min-width: 768px)">
                <img class="isRadius minBorder resizeImg" srcset="IMG_SPORTS/'.$sportProfil.'">
            </picture>
            <div class="text-box">
              <h1 class="h1A">'.$resultat['LIBELLE'].'</h1>' ?>
        </div>
        </article>
        </div>
        <div class="row divPhone">
            <div class="col-lg-12" style="background: grey; text-align: center;">
                <?php echo '<img class="isRadius minBorder resizeImg radius" src="IMG_SPORTS/'.$resultat['IMG'].'" alt="LIN Dan">
        <h1 class="h1A">'.$resultat['LIBELLE'].'</h1>';?>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 pSport">
                <h1 class="hStyle">
                    Description
                </h1>
                <?php echo'<p class="pStyle">'.$resultat['DESCRIPTION'].'</p>';?>
            </div>
        </div>
        </div>
        <!-- Footer And scripts section -->

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
    </body>

    </html>