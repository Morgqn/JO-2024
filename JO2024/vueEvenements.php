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

        echo "la date de l'evenement : ".$resultat['DATE'].'<br>';
   
        $date = $resultat['DATE'];
        echo "Heure : ".$resultat['TIME'].'<br>';
        
        $_SESSION['ID_EVENEMENT_RECIEVED'] = $resultat['ID_EVENEMENT'];
        $uncontroleur->setTable("Lieu");
        $tab = array("ID_LIEU"=>$resultat['ID_LIEU']);
        $resultat = $uncontroleur->selectwhere($tab);
        echo "le lieu de l'evenement : ".$resultat['LIBELLE'].'<br>';
        echo "l'adresse de l'evenement : ".$resultat['ADRESSE'].'<br>';

        //var_dump($links_array);
        echo "les images dans l'evenement :";

        foreach ($links_array as $value) {

            //$src = 'evenement_images/'.$date.'/'.$resultat['LIBELLE'].'/'.$value;
            $src = 'evenement_images/'.$date.$resultat['LIBELLE'].$value;

            $_SESSION['currentUrlUpload'] = 'evenement_images/'.$date.$resultat['LIBELLE'];
            if($value != '')
            echo '<img src="'.$src.'">';
        }
       
    ?>