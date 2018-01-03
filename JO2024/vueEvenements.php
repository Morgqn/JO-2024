
    <?php
    include("controller.php");
    $uncontroleur = new Controller("localhost","JObdd","root","root");
    $uncontroleur->setTable("Evenement");
    //$resultat = $uncontroleur->selectAll2(); 
    $tab = array("ID_EVENEMENT"=>$_GET['id']);
    $resultat = $uncontroleur->selectwhere($tab);
    $links =  $resultat['IMAGES'];
    $links_array = explode(",", $links);


     // echo "<tr><td>".$unResultat['DATE']."</td><td>".$unResultat['LIBELLE_LIEU']."</td><td>".$unResultat['ADRESSE']."</td><td>".$unResultat['TIME']."</td><td>".$unResultat['LIBELLE_EVENEMENT']."</td></tr>";
        echo "la date de l'evenement : ".$resultat['DATE'].'<br>';
        $date = $resultat['DATE'];
        echo "Heure : ".$resultat['TIME'].'<br>';
        
        $uncontroleur->setTable("Lieu");
        $tab = array("ID_LIEU"=>$resultat['ID_LIEU']);
        $resultat = $uncontroleur->selectwhere($tab);
        echo "le lieu de l'evenement : ".$resultat['LIBELLE'].'<br>';
        echo "l'adresse de l'evenement : ".$resultat['ADRESSE'].'<br>';

        //var_dump($links_array);
        echo "les images dans l'evenement :";

        foreach ($links_array as $value) {
            $src = 'evenement_images/'.$date.'/'.$resultat['LIBELLE'].'/'.$value;
            echo '<img src="'.$src.'">';
        }
       




    ?>