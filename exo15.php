<?php

	/*
	
	Créer une classe Personne (nom, prénom et date de naissance).
	Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.

	$p1 = new Personne("DUPONT","Michel","1980-02-19");
	$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");


	
	*/

	class Personne {
		
		private string $_nom;
		private string $_prenom;
		private DateTime $_date_naissance;

		public function __construct($nom, $prenom, $dateNaissance) {
			$this->_nom = $nom;
			$this->_prenom = $prenom;
			$this->_date_naissance = new DateTime($dateNaissance);
		}
		
		//======		Functions   	=======================================

		public function afficheInfo() {
			echo $this.$this->_date_naissance->diff($to = new DateTime('today'))->y." ans<br>";
		}
		
		
		public function __toString(){
			return $this->_prenom." ".$this->_nom." a ";
		} 

		
		// GET & SET
		public function get_nom()
		{
				return $this->_nom;
		}
		public function set_nom($_nom)
		{
				$this->_nom = $_nom;

				return $this;
		}


		public function get_prenom()
		{
				return $this->_prenom;
		}
		public function set_prenom($_prenom)
		{
				$this->_prenom = $_prenom;

				return $this;
		}

	
		public function get_date_naissance()
		{
				return $this->_date_naissance;
		}
		public function set_date_naissance($_date_naissance)
		{
				$this->_date_naissance = $_date_naissance;

				return $this;
		}
	} 

	$p1 = new Personne("DUPONT","Michel","1980-02-19");
	$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");


	$p1->afficheInfo();
	$p2->afficheInfo();
	