<?php
	class Model
	{
		//etat
		public $pdo, $table;

		//constructeur
		public function __construct ($server, $bdd, $user, $mdp)
		{
			$this->pdo = null;
			try
			{
				$this->pdo = new PDO("mysql:host=".$server.";dbname=".$bdd, $user, $mdp);
			}
			catch(Exception $exp)
			{
				echo "Erreur de connexion au ".$serveur."/".$bdd;
			}
		}

		//methodes
		public function selectAll()
		{
			if($this->pdo != null)
			{
				$requete = "select * from ".$this->table;
				$select = $this->pdo->prepare($requete);
				$select->execute();
				$resultats = $select->fetchAll();
				return $resultats;
			}
			else
			{
				return null;
			}
		}

			public function selectAll2()
		{
			if($this->pdo != null)
			{
				$requete = 'SELECT l.LIBELLE AS LIBELLE_LIEU,e.LIBELLE AS LIBELLE_EVENEMENT,l.ADRESSE,e.DATE,e.TIME,e.ID_EVENEMENT FROM Lieu AS l, Evenement AS e WHERE l.ID_LIEU = e.ID_LIEU';
				$select = $this->pdo->prepare($requete);
				$select->execute();
				$resultats = $select->fetchAll();
				return $resultats;
			}
			else
			{
				return null;
			}
		}

		//getters and setters
		public function setTable($uneTable)
		{
			$this->table = $uneTable;
		}
		public function insert($tab)
		{
			var_dump($tab);
			$donnees = array();
			$champs = array();
			foreach($tab as $cle =>$valeur)
			{
				$champs[] = ":".$cle;
				$donnees[":".$cle] = $valeur;
			}
			$chaine = implode(",", $champs);
			$requete = "insert into ".$this->table." values (null, ".$chaine.");";

			if($this->pdo != null)
			{
				$insert = $this->pdo->prepare($requete);

				$insert->execute($donnees);
			}
			else
			{
				return null;
			}
		}
		public function insertSansNull($tab)
		{
			$donnees = array();
			$champs = array();
			foreach($tab as $cle =>$valeur)
			{
				$champs[] = ":".$cle;
				$donnees[":".$cle] = $valeur;
			}
			$chaine = implode(",", $champs);
			$requete = "insert into ".$this->table." values (".$chaine.");";
			if($this->pdo != null)
			{
				$insert = $this->pdo->prepare($requete);
				$insert->execute($donnees);
			}
			else
			{
				return null;
			}
		}
		public function delete($tab)
		{
			$donnees = array();
			$champs = array();
			foreach($tab as $cle =>$valeur)
			{
				$donnees[":".$cle] = $valeur;
				$champs[] = $cle." = :".$cle;

			}
			$chaineclause = implode(" and ", $champs);


			$requete = "delete from ".$this->table." where ".$chaineclause.";";
			echo $requete;
			var_dump($donnees);
			if($this->pdo != null)
			{
				$delete = $this->pdo->prepare($requete);
				$delete->execute($donnees);
			}
			else
			{
				return null;
			}
		}
		
		public function  update ($tab, $where){
            $donnees = array ();
            $champs = array (); 
            $clause = array();
            
            foreach ($tab as $cle => $valeur) 
            {
                $donnees[":".$cle] = $valeur;
                $champs[] = $cle." = :".$cle;
            }
            $chainechamps = implode(" , ", $champs);
            
            foreach ($where as $cle => $valeur) 
            {
                $donnees[":".$cle] = $valeur;
                $clause[] = $cle." = :".$cle;
            }
            $chaineclause = implode(" and ", $clause);
            
            $requete=" update ".$this->table." set ".$chainechamps." where ".$chaineclause.";";
                 echo $requete;
            
            if ($this->pdo != null)
            {
                $update = $this->pdo->prepare ($requete);
                $update->execute($donnees);
            }
                 else
                 {
                     return null;
                 }
             }

		public function selectwhere($tab)
		{
			$donnees = array();
			$clause = array();
			foreach($tab as $cle =>$valeur)
			{
				$donnees[":".$cle] = $valeur;
				$clause[] = $cle." = :".$cle;

			}
			$chaineclause = implode(" and ", $clause);


			$requete = "select * from ".$this->table." where ".$chaineclause.";";
			
			if($this->pdo != null)
			{
				$selectWhere = $this->pdo->prepare($requete);
				$selectWhere->execute($donnees);
				$resultats = $selectWhere->fetch();
				return $resultats;
			}
			else
			{
				return null;
			}
		}
		public function logout()
		{
			session_unset ();
			session_destroy ();
		}
		
	}
?>