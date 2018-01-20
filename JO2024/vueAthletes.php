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
    $sportifImages = $sportif['AVATAR'];
    $sportifImagesArray = explode('"', $sportifImages);
    $sportifCover = $sportifImagesArray[0];
    $sportifProfil = $sportifImagesArray[1];
    $tab = array("ID_PERSONNE"=>$sportif['ID_PERSONNE']);
    $uncontroleur->setTable("Pratiquer");
    $pratique = $uncontroleur->selectwhere($tab);
    $tab = array("ID_SPORT"=>$pratique['ID_SPORT']);
    $uncontroleur->setTable("Sport");
    $sport = $uncontroleur->selectwhere($tab);

    //echo'<img style="max-height: 50px;" src="Flags/'.$pays['DRAPEAU'].'"></div>';

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
    <link href="style.css/ficheSportif.css" rel="stylesheet">
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
    <div class="container-fluid resetPadding hasMarginTop">
        <div class="row">
            <div class="col-md-12 crop resetPadding">
                <?php
                echo '<img class="hasRedBorder" src="avatars/'.$sportifCover.'">';?>
            </div>
        </div>
    </div>
    <div class="row">
        <article id="vignette" class="vignette-desktop">
            <picture class="image">
                <?php 
                echo '<source srcset="avatars/'.$sportifProfil.'" media="(min-width: 1024px)">
                <source srcset="'.$sportifProfil.'" media="(min-width: 768px)">
                <img class="isRadius minBorder resizeImg" src="avatars/'.$sportifProfil.'" alt="img">';?>
                </span>
            </picture>
            <div class="text-box">
                <?php echo'<h1 class="h1A">'.$personne['NOM'].' '.$personne['PRENOM'].'</h1>'?>
                <div class="profile-row hasPadding">
                    <div>
                        <?php echo '<img class="flagRezise" src="Flags/'.$pays['DRAPEAU'].'">';?>
                    </div>
                </div>
            </div>
            <ul class="medal-box">
                <li>
                    <div class="medal liMedal">
                        <span class="num">2</span>
                    </div>
                    <div class="medal  liMedal">
                        <span class="num silver silverNum">0</span>
                    </div>
                    <div class="medal  liMedal">
                        <span class="num bronze bronzeNum">0</span>
                    </div>
                </li>
            </ul>
        </article>
        <article class="col-lg-12 hasPadding hidden rowVignette">
            <picture class="image">
                <source srcset="testImageAthletes/Lin_Dan_mugshot.jpg" media="(min-width: 1024px)">
                <source srcset="testImageAthletes/Lin_Dan_mugshot.jpg" media="(min-width: 768px)">
                <img class="isRadius minBorder resizeImg" src="testImageAthletes/Lin_Dan_mugshot.jpg" alt="LIN Dan">
                </span>
            </picture>
            <div class="text-box">
                <?php echo'<h1 class="h1A">'.$personne['NOM'].' '.$personne['PRENOM'].'</h1>'?>
                <div class="profile-row hasPadding">
                    <div>
                        <img class="flagRezise" src="testImageAthletes/china_flag.png">
                    </div>
                </div>
            </div>
            <ul class="medal-box">
                <li class="liAA">
                    <div class="medal liMedal">
                        <span class="num">2</span>
                    </div>
                    <div class="medal  liMedal">
                        <span class="num silver silverNum">0</span>
                    </div>
                    <div class="medal  liMedal">
                        <span class="num bronze bronzeNum">0</span>
                    </div>
                </li>
            </ul>
        </article>
        <section class="id-card gallery-js-ready noc-chn">
            <div class="holder">
                <div class="frame" style="height: 60px;">
                    <ul class="ulA">
                        <li class="liA">
                            <div class="text-box">
                                <strong class="title">Sport</strong>
                                <?php
                                echo '<a class="aA" href="/fr/badminton">'.$sport['LIBELLE'].'</a>';?>
                            </div>
                        </li>
                        <li class="liA">
                            <div class="text-box">
                                <strong class="title">Pays</strong>
                               <?php  echo'<a class="aA" href="/fr/republique-populaire-de-chine">'
                                    .$pays['LIBELLE'].
                                '</a>'?>
                            </div>
                        </li>
                        <li class="liA">
                            <div class="text-box">
                                <strong class="title">Age</strong>
                               <?php echo '<a class="aA" href="">'.$personne['AGE'].'</a>';?>
                            </div>
                        </li>
                        <li class="liA">
                            <div class="text-box">
                                <strong class="title">Taille</strong>
                                <?php echo '<a class="aA" href="/fr/athenes-2004">'.$sportif['TAILLE'].'</a>';?>
                            </div>
                        </li>
                        <li class="liA">
                            <div class="text-box">
                                <strong class="title">Poids</strong>
                                <?php echo '<a class="aA" href="/fr/athenes-2004">'.$sportif['POIDS'].'</a>';?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
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