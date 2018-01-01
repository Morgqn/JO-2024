<?php
	include ("model.php");
	class Controller
	{
		public $unModele;

	public function __construct($serveur, $bdd, $user, $mdp)
	{
		$this->unModele = new Model($serveur, $bdd, $user, $mdp);
	}
	public function setTable ($uneTable)
	{
		$this->unModele->setTable($uneTable);
	}
	public function selectAll()
	{
		return $this->unModele->selectAll();
	}
	public function selectAll2()
	{
		return $this->unModele->selectAll2();
	}

	public function logout()
	{
		$this->unModele->logout();
		
	}

	public function insert($tab)
	{
		$this->unModele->insert($tab);
	}
	public function insertSansNull($tab)
	{
		$this->unModele->insertSansNull($tab);
	}
		public function delete($tab)
	{
		$this->unModele->delete($tab);
	}
		public function update($tab, $where)
	{
		$this->unModele->update($tab, $where);
	}
		public function selectwhere($tab)
	{
		 return $this->unModele->selectwhere($tab);
	}
	}

?>