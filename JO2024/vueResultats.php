<?php
 session_start();
    include("controller.php");

    
    $uncontroleur = new Controller("localhost","JObdd","root","root");
    
    //$resultat = $uncontroleur->selectAll2(); 
    $tab = array("ID_SPORT"=>$_GET['id']);
    $uncontroleur->setTable("resultat");
    $resultats = $uncontroleur->selectwhereall($tab);


    echo '<center><table border=1>
    <thead>
        <th>Medaille</th>
        <th>Pays</th>
        <th>avatar</th>
        <th>nom</th>
        <th>Prenom</th>
 
        
    </thead>
    <tbody>';

    // echo '<pre>';
    // print_r($resultats);
    // echo '</pre>';
    
    foreach ($resultats as $key =>$resultat) 
    {   
        echo'<tr><td>'.$resultat["MedailleRecu"].'</td>';

        echo'<td><img class="imgR" src ="Flags/'.$resultat['PaysRecu'].'"/></td>';
        echo'<td><img class="imgR" src ="avatars/'.$resultat['avatar'].'"/></td>';

        echo'<td>'.$resultat['NomRecu'].'</td>';
        echo'<td>'.$resultat['PrenomRecu'].'</td></tr>';
        //echo $resultat.'<br/>';


            }
        echo '</tbody></table></center>';
   
       
       
    ?>
    
   
  
     <link href="style.css/Resultat.css" rel="stylesheet">