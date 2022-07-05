<?php
	class Artikel{
		//Variablen
		private $artikelID;
		private $faktor;
		private $gewinde;
		private $kopf;
		private $antrieb;
		//Construktor
		function __construct($name, $faktor, $gewinde, $kopf, $antrieb) {
			$this->name = $name;
			$this->faktor = $faktor;
			$this->gewinde = $gewinde;
			$this->kopf = $kopf;
			$this->antrieb = $antrieb;
		}
		//Funtionen
		function getName(){
			return $this->name;
		}
		function getFaktor(){
			return $this->faktor;
		}
		function getGewinde(){
			return $this->gewinde;
		}
		function getKopf(){
			return $this->kopf
		}
		function getAntrieb(){
			return $this->antrieb;
		}

		function setName($name){
			$this->name = $name;
		}
		function setFaktor($faktor){
			$this->faktor;
		}
		function setGewinde($gewinde){
			$this->gewinde = $gewinde;
		}
		function setKopf($kopf){
			$this->kopf = $kopf;
		}
		function setAntrieb($antrieb){
			$this->antrieb = $antrieb;
		}
	}
?>
