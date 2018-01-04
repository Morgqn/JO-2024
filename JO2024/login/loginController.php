<?php
	include ("loginModel.php");
	class LoginController
	{
		private $unModele;

	public function __construct($serveur, $bdd, $user, $mdp)
	{
		$this->unModele = new LoginModel($serveur, $bdd, $user, $mdp);
	}
	public function setTable ($uneTable)
	{
		$this->unModele->setTable($uneTable);
	}
	public function selectAll()
	{
		return $this->unModele->selectAll();
	}
	public function login($email, $mdp)
	{
		$resultat = $this->unModele->login($email, $mdp);
		if($resultat)
		{
			$this->setSession($resultat);
			return true;			
		}
		else
			return false;
	}

	private function setSession($resultat)
	{
		session_start();//creer la variable globale $_session
	
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['mdp'] = $_POST['mdp'];
		$_SESSION['first_name'] = $resultat['FIRSTNAME'];
		$_SESSION['ID_EVENEMENT_RECIEVED']='';
		//$_SESSION['profil_type'] = $resultat['profil_type'];
		if($resultat['AVATAR']== "uploads/")
		{
		$_SESSION['avatar'] = "uploads/default.jpg";
		}
		else
		{
			$_SESSION['avatar'] = $resultat['AVATAR'] ;
		}
		$_SESSION['is_connected'] = true;
		$_SESSION['is_admin'] = ($_SESSION['email'] == "admin@admin.com");

	}
	public function logout()
	{
		session_unset ();
		session_destroy ();
	}

	}

?>