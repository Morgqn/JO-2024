<!-- Navigation -->
<?php


if (isset($_POST['logout']))
{
  $uncontroleur = new Controller("localhost","JObdd","root","root");
  $uncontroleur->logout();
}

?>


    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
        <div class="container">
            <a href="index.php"><img src="img/Logo.png"  height="50" width="100" ></a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
      </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Athletes.php">Athlètes</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Sports.php">Sports</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Evenements.php">évènements</a>
                    </li>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Resultats.php">Résultats</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="galerie.php">Galerie</a>
                    </li>
                    <?php
        if (!(isset($_SESSION['is_connected']) && $_SESSION['is_connected'] == true))
        {
            echo '<li class="nav-item mx-0 mx-lg-1 dropdown">
            <a href="#" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger dropdown-toggle" data-toggle="dropdown">
            <b>Login</b>
            <span class="caret"></span>
            </a>
            <ul id="login-dp" class="dropdown-menu">
            <li>
            <div class="col-md-12">
            <form class="form" form method="POST" action="login/loginVue.php" role="form" accept-charset="UTF-8" id="login-nav">
            <div class="form-group">
            <label class="sr-only">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Email" <input type="text" name="pseudo" required />
            </div>
            <div class="form-group">
            <label class="sr-only">Password</label>
            <input type="password" class="form-control" name="mdp" placeholder="Password" required>
            </div>
            <div name="log " class="form-group">
            <button type="submit" name="seConnecter" class="btn btn-primary btn-block" >Se connecter</button>
            </div>
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#demo-modal-3">Inscription</button>
            
            
            </form>
            </div>
            
            </li>
            </ul>
            </li>';
        }
        else
        {
            $url = $_SESSION['avatar'];
            echo '<li class="nav-item mx-0 mx-lg-1 dropdown">
            <a href="#" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger dropdown-toggle" data-toggle="dropdown">
            <b>logout</b>
            <span class="caret"></span>
            </a>
            <ul id="login-dp" class="dropdown-menu" style="background : grey;">
            <li>
            <div class="col-md-12" style=" background: lightyellow;">
            <form method="POST" action="index.php">
            <div class="col-xs-12">
            <center><div class="col-xs-8"><span>Bonjour '.$_SESSION['first_name'].' ! </span></div></center>';
            echo'<div class="col-xs-4"><img class=\"avatar\" style="max-height: 110px;
            margin: 13px auto;border: dashed 4px #2D3E4F; ;display: block;" src='.$url.'></div></div>';
            
            echo'<center><input class="btn btn-info" type="submit" name="logout" value="Déconnexion" style="margin-bottom: 1vw;"></center>
            </div>
            </div>
            </form>
            </div>
            
            </li>
            </ul>
            </li>';
        }
        ?>
                </ul>
            </div>
        </div>
    </nav>
