<?php
include ("signUpModel.php");

class SignUpController
{
	private $unModele;

	public function __construct($serveur, $bdd, $user, $mdp)
	{
		$this->unModele = new SignUpModel($serveur, $bdd, $user, $mdp);
	}
	public function setTable ($uneTable)
	{
		$this->unModele->setTable($uneTable);
	}
	private function mdp_match($mdp,$mdpc) {
		return($mdp == $mdpc);
	}



	public function signUp($form, $avatar_path)
	{
		var_dump("nlknp,,".$avatar_path);
		if($this->mdp_match($form['mdp'],$form['mdpc']))
		{
			$this->unModele->signUp($form, $avatar_path);
			move_uploaded_file($_FILES['avatar']['tmp_name'], $avatar_path);
			return true	;
		}
		else
		{
			return false;
					}
	}

}

?>