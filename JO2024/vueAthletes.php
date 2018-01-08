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
    $pays = $uncontroleur->selectwhere($tab);


    echo '<center><h1 class="Dh1">Fiche du sportif</h1></center>';
    
 echo'<center><div class="containers name"><div class="divS"> NOM : '.$personne['NOM'].'</div></div>';
    echo '<div class="containers surname""><div class="divS"> PRENOM : ' .$personne['PRENOM'].'</div></div>';
    echo '<div class="containers sexe""><div class="divS"> SEXE : '.$personne['SEXE'].'</div></div>';
    echo '<div class="containers age""><div class="divS"> AGE : '.$personne['AGE'].'</div></div>';
    echo '<div class="containers naissance""><div class="divS"> Lieu de naissance : '.$sportif['LIEU_DE_NAISSANCE'].'</div></div>';
    echo '<div class="containers poids""><div class="divS"> Poids: '.$sportif['POIDS'].'</div></div>';
    echo'<div class="containers taille""><div class="divS"> Taille : '.$sportif['TAILLE'].'</div></div></center>';


    echo'<img style="max-height: 100px;margin: 30px; position: absolute;
    top: 45vw;" src="Flags/'.$pays['DRAPEAU'].'"></div>';

                            echo'<div class="container">
                            <a href="'.$sportif['AVATAR'].'" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                                <img class="imgI2" style="margin: 30px; position: absolute; top: 25vw;" src="avatars/'.$sportif['AVATAR'].'">
                            </a>
                    </div>';


                    echo'<div class="container">
                            <a href="'.$sportif['AVATAR'].'" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                                <img class="imgI2" style="margin: 30px; position: absolute;
                                top: 45vw;" src="Flags/'.$pays['DRAPEAU'].'">
                            </a>
                    </div>';
    
   

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
    <link href="style.css/Athletes.css" rel="stylesheet" type="text/css">

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
