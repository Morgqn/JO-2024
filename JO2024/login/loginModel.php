<?php
	include ("../model.php");

	class LoginModel extends Model
	{
		public function login($email, $mdp)
		{
		$requete = "SELECT * from ".$this->table." where email=:email and mdp=:mdp";
		$donnees = array(":email" => $email,
						":mdp" => $mdp);

		$select = $this->pdo ->prepare($requete);
		$select->execute($donnees);
		$resultat = $select->fetch();
		return $resultat;
		}
		
	}
?>