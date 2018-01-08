<?php

if (isset($_POST['email']) && isset($_POST['mdp'])) {
	include("loginController.php");
	$uncontroleur = new LoginController("localhost","JObdd","root","root");
	$uncontroleur->setTable("myuser");
	$resultat = $uncontroleur->login($_POST['email'], $_POST['mdp']);
	if ($resultat == true)
	{
		header ('location: ../index.php');
	}	
	else {
		echo '<body onLoad="alert(\'Veuillez verifier vos identifiants\')">';
		echo '<meta http-equiv="refresh" content="0;URL=../index.php">';
	}
}
?>
