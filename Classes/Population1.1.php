<?php
class Population{
	private $name;
	private $aufträge [];
	private $population []; // hier ist der Array wo alle Chromosomen gespeichert werden
	private $newPopulation [];
	private $maschinenArray []; // hier der Array welcher alle Maschienen speichert der 

	function __construct($name, $aufträge, $population, $newPopulation) {
		$this->name = $name;
		$this->aufträge = $aufträge;
		$this->population = $population;
		$this->newPopulation = $newPopulation;
	}
	function getname(){
		return $this->name = $name;
	}
	function generatePopulation() {
		shuffle($aufträge);//Mischt das Array durch
		$beschischtung;
		$lackierung;

		foreach($aufträge as $auftrag){
			$auftrag[$i]
		}

		return $population;
	}
	function selectParent() {
		return $this->chromosom = $chromosom;
	}
	function crossover() {
		return ($this->parent1 = $chromosom, $this->parent2 = $chromosom);
	}
	function mutation() {
		return $newChromosom;
	}

	public function findBest() {
		$score = collect($chromosom->duration = $duration);
		return $score->where('duration', $score->min('duration')); // die minimalste durchlaufzeit aller chromosome einer pop soll ausgegeben werden
	}


?>
