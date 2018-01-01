<?php
include ("model.php");
class SignUpModel extends Model
{
	function signUp($tab, $avatar_name)
	{


		if (!isset($tab['avatar'])) {
			$avatar = $avatar_name;
		} else {
			$avatar = $tab['avatar'];
		}

			$requete = "INSERT into ".$this->table." values(null,:first_name,:last_name,:age,:sexe,:birth_date,:email,:mdp,:avatar)";
			var_dump($tab);
			$donnees = array(
				":first_name" => $tab['firstName'],
				":last_name" => $tab['lastName'],
				":age" => $tab['age'],
				":sexe" => $tab['gender'],
				":birth_date" => $tab['birthDate'],
				":email" => $tab['email'],
				":mdp" => $tab['mdp'],
				":avatar" => $avatar);

			$insert = $this->pdo ->prepare($requete);
			//var_dump($requete);
			//var_dump($donnees);
			$insert->execute($donnees);
		
	}

}
?>