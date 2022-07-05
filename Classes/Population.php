<?php
class Population{
	private $name;
	private $aufträge;
	private $population;
	private $newPopulation;

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

		for($i = 0; $i <= count($aufträge)){

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
?>
