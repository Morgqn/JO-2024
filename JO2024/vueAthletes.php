<?php
 session_start();
    include("controller.php");


        

    $uncontroleur = new Controller("localhost","JObdd","root","root");
    $uncontroleur->setTable("Sportif");
    //$resultat = $uncontroleur->selectAll2(); 
    $tab = array("ID_SPORTIF"=>$_GET['id']);
    $sportif = $uncontroleur->selectwhere($tab);
    $tab = array("ID_PERSONNE"=>$sportif['ID_PERSONNE']);
    $uncontroleur->setTable("Personne");
    $personne = $uncontroleur->selectwhere($tab);
    $uncontroleur->setTable("Pays");
    $tab = array("ID_PAYS"=>$sportif['ID_PAYS']);

    echo '<center><b>Fiche du sportif</b></center>';
    
    echo'<img style="max-height: 50px;" src="avatars/'.$sportif['AVATAR'].'"></div>';
    
    echo'<div> NOM :'.$personne['NOM'].'</div>';
    echo '<div> PRENOM :' .$personne['PRENOM'].'</div>';
    echo '<div> SEXE : '.$personne['SEXE'].'</div>';
    echo '<div> AGE : '.$personne['AGE'].'</div>';
    echo '<div> Lieu de naissance : '.$sportif['LIEU_DE_NAISSANCE'].'</div>';
    echo '<div> Poids: '.$sportif['POIDS'].'</div>';
    echo'<div> Taille : '.$sportif['TAILLE'].'</div>';

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
