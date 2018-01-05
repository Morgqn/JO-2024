<?php
 session_start();
    include("controller.php");

    
           if ((isset($_SESSION['is_connected']) && $_SESSION['is_connected'] == true))
        {
            echo '
            <form action="multiple-uploads.php" enctype="multipart/form-data" method="POST">
            Select images: <input type="file" name="upload[]" multiple>
                <input type="submit">
            </form>
            ';
        }
        

    $uncontroleur = new Controller("localhost","JObdd","root","root");
    $uncontroleur->setTable("Evenement");
    //$resultat = $uncontroleur->selectAll2(); 
    $tab = array("ID_EVENEMENT"=>$_GET['id']);
    $resultat = $uncontroleur->selectwhere($tab);
    $links =  $resultat['IMAGES'];
    $links_array = explode(",", $links);
    
    
    
        echo '<div style="margin-top: 20;" class="container col-md-4 well bodyIframe">Date : '.$resultat['DATE'].'</div><br>';
   
        $date = $resultat['DATE'];
        echo '<div class="bodyIframe container col-md-4 well ">Heure : '.$resultat['TIME'].'</div><br>';
        
        $_SESSION['ID_EVENEMENT_RECIEVED'] = $resultat['ID_EVENEMENT'];
        $uncontroleur->setTable("Lieu");
        $tab = array("ID_LIEU"=>$resultat['ID_LIEU']);
        $resultat = $uncontroleur->selectwhere($tab);

        echo '<div class="bodyIframe container col-md-4 well">Lieu : '.$resultat['LIBELLE'].'</div><br>';
        echo '<div class="bodyIframe container col-md-4 well">Adresse : '.$resultat['ADRESSE'].'</div><br>';

        //var_dump($links_array);

        foreach ($links_array as $value) {

            //$src = 'evenement_images/'.$date.'/'.$resultat['LIBELLE'].'/'.$value;
            $src = 'evenement_images/'.$date.$resultat['LIBELLE'].$value;

            $_SESSION['currentUrlUpload'] = 'evenement_images/'.$date.$resultat['LIBELLE'];
            if($value != ''){   
                echo'<div class="container">
                            <a href="'.$src.'" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                                <img class="imgI" src="'.$src.'" alt="...">
                            </a>
                    </div>';
                            }
        }
    ?>
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
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    <script src="JS_JO/lightbox.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link href="style.css/evenement.css" rel="stylesheet" type="text/css">

    <!-- Light Box -->
    <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body" style="background: black;">
                    <img height="500" width="500" src="" alt="" />
                </div>
            </div>
        </div>
    </div>
