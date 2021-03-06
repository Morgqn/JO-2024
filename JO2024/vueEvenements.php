<?php 
                session_start();?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="shortcut icon" href="img/LogoJO.png" type="image/x-icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Evenements</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
    <link href="style.css/evenement.css" rel="stylesheet" type="text/css">
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">


    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link href="style.css/evenement.css" rel="stylesheet">
    


</head>

<body id="page-top">
    <?php include("Pages/nav.php") ?>
    <section class="bg-primary text-white mb-0" id="about" style="background-color:#ffffff!important;">
        <br>
        <h2 class="text-center text-uppercase text-white" style="font-size: 25px;font-family: initial;color:#333!important;">Photos</h2>
        <div class="container">
            <hr style="border-top: 1px solid gray;width: 50%">
            <br>
            <div class="row">
                <div class="col-xl-12">
                    <?php
                    include("controller.php");

    
           if ((isset($_SESSION['is_connected']) && $_SESSION['is_connected'] == true))
        {
            echo '
            <center><h1 style="font-size: 19px; padding-top: 20px; color: white;">You can add images for this event</h1><form action="multiple-uploads.php" enctype="multipart/form-data" method="POST" style="padding-top:30px; padding-bottom: 30px;">
            <input class="btn btn-info" type="file" name="upload[]" multiple style="width: 300px;">
                <input class="btn btn-info" type="submit">
            </form></center>
            ';
        }
        

    $uncontroleur = new Controller("localhost","JObdd","root","root");
    $uncontroleur->setTable("Evenement");
    //$resultat = $uncontroleur->selectAll2(); 
    $tab = array("ID_EVENEMENT"=>$_GET['id']);
    $resultat = $uncontroleur->selectwhere($tab);
    $links =  $resultat['IMAGES'];
    $links_array = explode(",", $links);
    
    
    
        //echo '<div style="margin-top: 20;" class="container col-md-4 well bodyIframe">Date : '.$resultat['DATE'].'</div><br>';
   
        $date = $resultat['DATE'];
        //echo '<div class="bodyIframe container col-md-4 well ">Heure : '.$resultat['TIME'].'</div><br>';
        
        $_SESSION['ID_EVENEMENT_RECIEVED'] = $resultat['ID_EVENEMENT'];
        $uncontroleur->setTable("Lieu");
        $tab = array("ID_LIEU"=>$resultat['ID_LIEU']);
        $resultat = $uncontroleur->selectwhere($tab);

        echo '<div class="textE bodyIframe container col-md-4 well">Lieu : '.$resultat['LIBELLE'].'</div><br>';
        echo '<div class="textE bodyIframe container col-md-4 well">Adresse : '.$resultat['ADRESSE'].'</div><br>';

        //var_dump($links_array);

        foreach ($links_array as $value) {

            //$src = 'evenement_images/'.$date.'/'.$resultat['LIBELLE'].'/'.$value;
            $src = 'evenement_images/'.$date.$resultat['LIBELLE'].$value;

            $_SESSION['currentUrlUpload'] = 'evenement_images/'.$date.$resultat['LIBELLE'];
            if($value != ''){   
                echo'<span href="'.$src.'" data-imagelightbox="span">
                <img class="col-lg-6 imgI" src="'.$src.'" >

                </span>';
                            }
        }
    ?>






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
    <script src="JS_JO/imagelightbox.js"></script>
   
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

<script>
        $(function () {
            $('span').imageLightbox();
        });
    </script>