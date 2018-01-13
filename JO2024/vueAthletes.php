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
                <img class="hasRedBorder" src="testImageAthletes/Lin_Dan_banner.jpg">
            </div>
        </div>
    </div>
    <div class="row">
        <article id="vignette" class="vignette-desktop">
            <picture class="image">
                <source srcset="testImageAthletes/Lin_Dan_mugshot.jpg" media="(min-width: 1024px)" >
                <source srcset="testImageAthletes/Lin_Dan_mugshot.jpg" media="(min-width: 768px)">
                <img class="isRadius minBorder " src="testImageAthletes/Lin_Dan_mugshot.jpg" alt="LIN Dan" width="140vw;">
                </span>
            </picture>
            <div class="text-box">
                <h1 class="h1A">Lin DAN</h1>
                <div class="profile-row hasPadding">
                    <div>
                        <img class="flagRezise" src="testImageAthletes/china_flag.png">
                            </div>
                        </div>
                </div>
                <ul class="medal-box">
                    <li>
                        <div class="medal liMedal"> <span class="num">2</span> </div>
                        <div class="medal  liMedal"> <span class="num silver silverNum">0</span> </div>
                        <div class="medal  liMedal"> <span class="num bronze bronzeNum">0</span> </div>
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
                                    <a class="aA" href="/fr/badminton">Badminton</a>                            
                                </div>
                        </li>
                        <li class="liA">
                            <div class="text-box">
                                <strong class="title">Pays</strong>
                                <a class="aA" href="/fr/republique-populaire-de-chine">République Populaire de Chine</a> 
                            </div>
                        </li class="liA">
                        <li class="liA">
                            <div class="text-box">
                                <strong class="title">Naissance</strong><a class="aA" href="">14 oct. 1983</a>                   
                            </div>
                        </li>
                        <li class="liA">
                            <div class="text-box">
                                <strong class="title">Participation aux Jeux</strong>
                                <a class="aA" href="/fr/athenes-2004">2004</a> 
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
<style type="text/css">
.crop img {
    width: 100%;
    height: 100%;
}

.hasMarginTop {
    margin: 150px 0 0 0;

}


.resetPadding {
    padding: 0;
}



.profiles .holder {
    max-width: 1130px;
    padding: 0 15px;
    margin: 0 auto;
}




.medal-box {
    background: white;
    padding: 2Px;
    border-radius: 10%;
    list-style: none;
    margin: 0 0 6px;
    padding: 0;
    overflow: hidden;
    font: 1.336em/1.07em Trade-Gothic-W-Cond-Bold, Arial, Helvetica, sans-serif;
    color: #dab509;

}

.liMedal {
    width: 33%;
    display: inline;
    padding: 10px;
}

.medal .num {
    display: inline-block;
    vertical-align: middle;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    padding: 3px 0 0;
    border: 2px solid #dab509;
    text-align: center;
    color: #dab509;

}

.silverNum {
    border: 2px solid grey !important;
}

.bronzeNum {
    border: 2px solid brown !important;
}

.silver {
    color: grey !important;
}

.bronze {
    color: brown !important;
}


.isRadius {
    border-radius: 43%;
}

.hasRedBorder {
    border: 5px solid red;
}

.minBorder {
    border: 3px solid red;
}

#vignette {

    text-align: center;
    width: fit-content;
    height: fit-content;
    padding: 10px;
    background: rgba(255,255,255,0.5);
}

.vignette-desktop{
    top : 200px;
    position: absolute;
    left: 60px;
}

.h1A {

    font-size: 32px;
    color: white;
}

.hasPadding {
    padding: 8px;
}

.flagRezise{
    height: 30px;
}

.id-card{
    background: #666;
    width: 100%;
    font: 1.5em/1.07em Trade-Gothic-W-Cond-Bold,Arial,Helvetica,sans-serif;
    color: #fff;
    text-transform: uppercase;
    padding: 35px 0 37px;
    margin: 0 0 60px;
}

.holder{    
    margin: 0 auto;
    padding: 0 15px;}

.title{
    font-size: .857em;
    line-height: 1.07em;
    color: #fff;
    color: rgba(255,255,255,.4);
    display: block;
    font-weight: 400;
    margin: 0 0 6px;
}

.ulA{
    margin: 0!important;
    display: table;
    width: 100%;
    font-size: 1.5vw;
    text-align: center;
}

.liA{
    padding: 10px;
    display: table-cell;
    vertical-align: top;
    position: relative!important;
    width: auto!important;
    left: 0!important;
    top: 0!important;

}

.aA{
    color: red;
    text-decoration : none !important;
}

.noc-chn {
    background-color: rgba(0,0,0,0.8) !important;
}



@media (max-width: 1024px) {
#vignette {
display: none !important;
}
}
</style>
