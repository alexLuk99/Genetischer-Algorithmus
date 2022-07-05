<?php
	class Auftrag{
		//Variablen
		private $artikelID;
		private $name;
		private $menge;
		private $beschichtung;
		private $lackierung;
		//Construktor
		function __construct($name, $auftragsPos) {
			$this->name = $name;
			$this->auftragsPos = $auftragsPos;
		}
		//Funtionen
		function getName(){
			return $this->name;
		}
		function getAuftragsPos($pos){
			return $this->auftragsPos[$pos];
		}

		function setName($name){
			$this->name = $name;
		}
		function setAuftragsPos($pos){
			$this->auftragsPos = $pos;
		}

	}
?>
