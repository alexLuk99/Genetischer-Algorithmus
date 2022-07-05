<?php
	class maschine{
		//Variablen
		private $name
		private $durchlaufzeit_pro_stueck;
		private $umruestzeit;
		private $is_avaliable;
		private $aktuellerAufsatz;
		private $startZeit;
		private $endZeit;
		private $belegungszeiten;
		//Construktor
		function __construct($name, $durchlaufzeit_pro_stueck, $umruestzeit, $is_avaliable, $aktuellerAufsatz, $startZeit, $endZeit) {
			$this->name = $name;
			$this->durchlaufzeit_pro_stueck = $durchlaufzeit_pro_stueck;
			$this->umruestzeit = $umruestzeit;
			$this->is_avaliable = $is_avaliable;
			$this->aktuellerAufsatz = $aktuellerAufsatz;
			$this->startZeit = $startZeit;
			$this->endZeit = $endeit;
			$this->belegungszeiten = $belegungszeiten;

		}
		//Funtionen
		function getName(){
			return $this->name;
		}
		function getDurchlaufzeit_pro_stueck(){
			return $this->durchlaufzeit_pro_stueck;
		}
		function getumruestzeit(){
			return $this->umruestzeit;
		}
		function getAktuellerAufsatz(){
			return $this->aktuellerAufsatz;
		}
		function getIs_Avaliable(){
			return $this->is_avaliable
		}

		function getStartZeit(){
			return $this->startZeit;
		}

		function getEndZeit(){
			return $this->endZeit;
		}

		function getBelegungszeit(){
			return $this->belegungszeiten;
		}

		function setStartZeit($belegungszeiten){
			 $this->belegungszeiten = $belegungszeiten;
		}

		function setStartZeit($startZeit){
			 $this->startZeit = $startZeit;
		}

		function setEndZeit($endZeit){
			 $this->endZeit = $endZeit;
		}

		function setName($name){
			$this->name = $name;
		}
		function setDurchlaufzeit_pro_stueck($durchlaufzeit_pro_stueck){
			$this->durchlaufzeit_pro_stueck;
		}
		function setumruestzeit($umruestzeit){
			$this->umruestzeit = $umruestzeit;
		}
		function setAktuellerAufsatz($aktuellerAufsatz){
			$this->aktuellerAufsatz = $aktuellerAufsatz;
		}
		function setIs_Avaliable($is_avaliable){
			$this->is_avaliable = $is_avaliable;
		}

		function getDurchlaufzeit($menge, $faktor){
			return $this->durchlaufzeit_pro_stueck * $menge * $faktor;
		}

		function Umrüstzeit($newAufsatz){
			if($this->aktuellerAufsatz == $newAufsatz){
				return 0;
			}else{
				return $umruestzeit;
			}
		}

	}
?>
