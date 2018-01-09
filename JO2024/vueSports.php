<?php
 session_start();?>
    <head>
        <link rel="shortcut icon" href="img/LogoJO.png" type="image/x-icon" />
        <meta charset="utf-8">


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



    </head>
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
    $uncontroleur->setTable("Sport");
    //$resultat = $uncontroleur->selectAll2(); 
    $tab = array("ID_SPORT"=>$_GET['id']);
    $resultat = $uncontroleur->selectwhere($tab);
    
    echo'<div class= "col-xs-9">
    <div class="row">
        <img style="max-height: 200;
    display: block;
    margin: 10px auto;" src="IMG_SPORTS/'.$resultat['IMG'].'"><br></div>
    <div class="row" style="width: 200px;
    display: block;
    margin: 10px auto;">
            <h1>'.$resultat['LIBELLE'].'</h1><br>
        </div>
     </div>
        <div  style="max-width: 80%;
    display: block;
    margin: 10px auto;" class="row">
            <div>'.$resultat['DESCRIPTION'].'</div><br>
        </div><br>
        ';


      
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
