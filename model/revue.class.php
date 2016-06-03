<?php

class Revue
{
	private $IdRevue;
	private $DesignationRevue;
	private $DureeAbonnement;
	private $TarifAbonnement;
	private $ImageRevue;
	private $quantite;

	public function __construct($id, $d, $du, $t, $i){
		$this->IdRevue = $id;
		$this->DesignationRevue = $d;
		$this->DureeAbonnement = $du;
		$this->TarifAbonnement = $t;
		$this->ImageRevue = $i;
		$this->quantite = 0;
		
	}

	public function __destruct(){}

	public function __get($attribut){
		switch ($attribut) {
			case'IdRevue': {return $this->IdRevue;break;}
			case'DesignationRevue':{return $this->DesignationRevue;break;}
			case'DureeAbonnement':{return $this->DureeAbonnement;break;}
			case'TarifAbonnement':{return $this->TarifAbonnement;break;}
			case'quantite':{return $this->quantite;break;}
			case'ImageRevue':{return $this->ImageRevue;break;}
		}
	}
	
	public function setQuantite($nouvelleQuantite){
		$this->quantite = $nouvelleQuantite;	
	}

	static function lecture(){
		include('include/connect.php');
		$req= $bdd->query("SELECT * FROM revues");
		$TableauRevues = array();

		try {
			while($ligne=$req->fetch()){
				$TableauRevues[] = new Revue($ligne["IdRevue"], $ligne["DesignationRevue"], $ligne["DureeAbonnement"], $ligne["TarifAbonnement"], $ligne["ImageRevue"]);
			}
			return $TableauRevues;
		}catch (Exception $e){
			die('Erreur : ' . $e->getMessage());
		}
	}

	static public function recherche($num){
		return Revue::lecture()[$num-1];
	}


	public function __toString(){
		return $this->IdRevue .";". $this->DesignationRevue .";". $this->DureeAbonnement .";".$this->TarifAbonnement .";". $this->quantite;
	}
}
?>
