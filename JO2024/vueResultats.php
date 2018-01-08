<?php
 session_start();
    include("controller.php");

    
    $uncontroleur = new Controller("localhost","JObdd","root","root");
    
    //$resultat = $uncontroleur->selectAll2(); 
    $tab = array("ID_SPORT"=>$_GET['id']);
    $uncontroleur->setTable("Pratiquer");
    $resultat = $uncontroleur->selectwhere($tab);
    $tab = array("ID_PERSONNE"=>$resultat['ID_PERSONNE']);
    $uncontroleur->setTable("Personne");
    $personne = $uncontroleur->selectwhere($tab);
    $uncontroleur->setTable("Sportif");
    $sportif = $uncontroleur->selectwhere($tab);

        echo "personne : ".$personne['NOM']." le poids :".$sportif['POIDS'].'<br>';
   
       
       
    ?>