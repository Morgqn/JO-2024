<?php 
include ("signUpController.php");
$uncontroleur = new SignUpController("localhost","sncf_bdd","root","root");
$uncontroleur->setTable("profil");

if(isset($_POST['inscription']))
{
	$avatar_path = 'uploads/' . basename($_FILES['avatar']['name']);
	$resultat = $uncontroleur->signUp($_POST, $avatar_path);

	if($resultat == true)
	{
		echo ("<span style= \"color : green;\">inscription reussie.Vous pouvez vous connecter à votre compte</span><br/");	
	}
	else
	{
		echo "Vos mots de passe ne sont pas identiques";
	}
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../boostrap/favicon.ico">

	<title>SNCF</title>

	<!-- Bootstrap core CSS -->
	<link href="../../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../../bootstrap/caroussel.css" rel="stylesheet">
	<link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<script type="text/javascript" src="script.js" ></script>
	<center id="inscription">Ouverture d'un compte</center>
	<br/>
	<br/>
<div id="frame"></div>
<div class="row">
	<div class="col-md-12 col-md-offset-1">
		<form class="form-horizontal" method="POST"  action="inscription.php" id="myForm" enctype="multipart/form-data">
			<fieldset>

				<legend>Informations obligatoires</legend>

				<div class="form-group">
					<div class="col-sm-4" style="display: inline-block;">
						<input class="form-control" type="text" name="nom" placeholder="Nom" id="nom" onblur="formatNom();event.stopPropagation();" required>
					</div>

					<div class="col-sm-4" style="display: inline-block;">
						<input class="form-control" id="prenom" name="prenom" placeholder="Prenom" onblur="formatPrenom();" required>
					</div>
				</div>

				<div class="form-group col-sm-4" style="display: inline-block;" >
					
						<label>DATE DE NAISSANCE :</label>
						<input class="form-control" style="display: inline-block;" type="date" name="birth_date" placeholder="Date Of Birth" required>
				
				</div>
				<div class="form-group col-sm-4" style="display: inline-block;">
						<input  type="number" name="age" placeholder="Age" class="form-control" required>
				
				</div>
				<div class="form-group col-sm-4" style="display: inline-block;">
						<label>Email : </label>
						<input class="form-control" type="email" id="email" name="email" placeholder="exemple@exemple.com" onblur="checkEmail()" required>
						
						
				</div>

				<div class="form-group col-sm-4" style="display: inline-block;">
						<label>Mot de passe : </label>
						<input class="form-control" type="password" name="mdp" id="password" 
						onblur="checkPassword()" placeholder="Mot de passe"  required>
						
					</div>
					<div class="form-group col-sm-3" style="display: inline-block;">
						<label>Confirmation du mot de passe : </label>
				
						<input class="form-control" type="password" name="mdpc" placeholder="Mot de passe" required>
				</div>
		<div class="alert alert-danger col-sm-7" style="display: none; margin: 0px 0px 10px 15px;cursor: pointer;" id="info" onclick="infoEmail()"> format Email incorrect.Cliquez sur l'alerte pour plus d'informations</div>

				<div class="alert alert-danger col-sm-7" style="display: none; margin: 0px 0px 10px 15px;cursor: pointer;" 
				id="infopassword"
						onclick= "infoPassword();"> format mot de passe incorrect, Cliquez sur l'alerte pour plus d'informations </div>



			<hr/>

				<legend>Informations supplimentaires</legend>
				<div class="form-group col-sm-6" style="display: inline-block;">
						<label>Avatar : </label>
						<input  class="form-control" type="file" name="avatar">
				</div>
					<div class="form-group col-sm-5" style="display: inline-block;">
						<select name="profil_souhaite" class="form-control">
							<option value="grand voyageur">
							Grand voyageur</option>
							<option value="jeune">Jeune</option>
							<option value="senior">Senior</option>
							<option value="militaire">Militaire</option>
							<option value="autres">Autres</option>
						</select>
				</div>
				
				
				<div class="form-group col-sm-6" style="display: inline-block;">
				
						<label>Votre site internet : </label>
						<input  class="form-control" type="url" name="site" placeholder="https://...">
				
				</div>
				<div class="form-group col-sm-5" style="display: inline-block;">
						<label >NUMERO DE TELEPHONE: </label>
						<input  class="form-control" type="tel" name="phone_number" placeholder="">
				</div>
				<br>
				<br>
				<br>
				<br>
				<br>
            <div class="pull-right" style="padding-right: 30px;">
                <button type="reset" class="btn btn-default"  NAME="">Cancel</button>
                <button type="submit" class="btn btn-primary" id="register" name="inscription">S'inscrire</button>
            </div>

			</form>
		</div>
	</div>

