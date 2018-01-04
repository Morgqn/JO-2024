<?php
session_start();
include("controller.php");
 $uncontroleur = new Controller("localhost","JObdd","root","root");
$uncontroleur->setTable("Evenement");
$uploads = 0;
 $total = count($_FILES['upload']['name']);
$IMAGES='';
// Loop through each file
for($i=0; $i<$total; $i++) {
  //Get the temp file path
  $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

  //Make sure we have a filepath
  if ($tmpFilePath != ""){
    //Setup our new file path
    $newFilePath = $_SESSION['currentUrlUpload']. $_FILES['upload']['name'][$i];
    $imgPath = $_FILES['upload']['name'][$i];
    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

      //header("location:Evenements.php");
       $uploads = $uploads+1;
       $IMAGES = $IMAGES.$imgPath.',';


    }
  }
}
if ($uploads == $total)
    {
        echo "upload reussi";
        $url = substr($IMAGES,0,(strlen($IMAGES) -1));
        
       
        $tab = array("ID_EVENEMENT"=>$_SESSION['ID_EVENEMENT_RECIEVED']);
        $resultats = $uncontroleur->selectwhere($tab);
         $myUpdatedUrl = $resultats['IMAGES'].','.$url;
         var_dump($myUpdatedUrl);

          $NewValuetab = array("IMAGES"=>$myUpdatedUrl);
          $uncontroleur->update($NewValuetab,$tab);

        var_dump("expression:::::::");


    
                // $tab = array(
                //     "IMAGES"=>$_POST['IDTYPE'],
                //     "LIBELLE"=>$_POST['LIBELLE'],
                //     "HEURESERVICE"=>$_POST['HEURESERVICE'],
                //     "HEUREFINSERVICE"=>$_POST['HEUREFINSERVICE'],
                //     "NBSTATIONS"=>$_POST['NBSTATIONS'],
                // );
                // $clause = array("IDMOYEN"=>$_POST['IDMOYEN']);
                // $uncontroleur->update($tab, $clause);
            }
?>