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
        <div class="col-md-12 resetPadding">
            <article id="vignette">
                <picture class="image">
                    <source src="testImageAthletes/Lin_Dan_mugshot.jpg" media="(min-width: 1024px)">
                    <source src="testImageAthletes/Lin_Dan_mugshot.jpg" media="(min-width: 768px)">
                    <img class="isRadius minBorder" src="testImageAthletes/Lin_Dan_mugshot.jpg" alt="LIN Dan" width="150px;">
                    </span>
                </picture>
                <div class="text-box">
                    <h1 class="h1A">Lin DAN</h1>
                    <div class="profile-row hasPadding">

                        <a href="">
                            <div class="flag-image">
                                <div class="flag18 chn">
                                    <div class="mask"></div>
                                </div>
                            </div>
                            <span>CHN</span>
                        </a>
                    </div>
                    <ul class="medal-box">
                        <li>
                            <div class="medal liMedal"> <span class="num">2</span> </div>
                            <div class="medal  liMedal"> <span class="num silver silverNum">0</span> </div>
                            <div class="medal  liMedal"> <span class="num bronze bronzeNum">0</span> </div>
                        </li>
                    </ul>
                </div>
            </article>
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
        border: 10px solid red;
    }

    .minBorder {
        border: 3px solid red;
    }

    #vignette {
        text-align: center;
        width: fit-content;
        height: fit-content;
        padding: 10px;
    }

    .h1A {

        font-size: 32px;
        color: white;
    }

    .hasPadding {
        padding: 8px;
    }

</style>
