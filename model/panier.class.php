<?php
require("revue.class.php");
class Panier{
	private $revues; 
	private $date;
	private $vide;
	
	public function __construct(){
		$this->revues = array();
		$this->vide = true;
		$this->date = date("d/m/Y");
	}

	public function ajouter($newRevue){
		$this->revues[] = $newRevue;
		$this->vide = false;
	}

	public function getVide(){
		return $this->vide;        
	}

	public function getRevues(){
		return $this->revues;
	}

	public function getunerevue($num){
		$i = 0;
		while($i < count($this->revues) && $this->revues[$i]->IdRevue !=  $num){
			$i++;
		}

		return $this->revues[$i];
	}

	public static function affecter($panier){
		return unserialize(serialize($panier));
	}

	public function vider(){
		$this->vide = true;
		unset($this->revues);
	}

	public function supprimer($num){
		$i = 0;
		while($i < count($this->revues) && $this->revues[$i]->IdRevue !=  $num){
			$i++;
		}
		echo $i . " --> \$i<br/>" . $this->revues[$i]->IdRevue . " --> IdRevue<br/>";
		if($i <= count($this->revues) && $this->revues[$i]->IdRevue == $num){
			unset($this->revues[$i]);
			if($i <= count($this->revues)){
				for($j = $i; $j < count($this->revues) - 1; $j++){
					$this->revues[$j] = $this->revues[$j+1];
					unset($this->revues[$j+1]);
				}
			}
		}

		if(count($this->revues) == 0)
			$this->vide = true;
	}
}
?>
