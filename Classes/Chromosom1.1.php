<?php
class Chromosom {

	private $chromosom [][]; //hier wird die Aktuelle Lösung gespeichert 
	public $fintenss;	// dies ist der Score von dem Aktuellen objekt 

	function __construct() {
		$this->fintenss = 0;
	}

	function getFitnessScore() {
		return $this->FitnessScore = $FitnessScore;
	}

	function setFitnessScore() {
		return $newScore;
	}

	function generateSolution($aufträge) {
		$aktuelleMaschine = 1;
		$maschinenArray = generateMaschinenArray();
		foreach($aufträge as $auftrag){
			switch ($aktuelleMaschine) {
			    case 1:
					if(prüfen ob der Auftrag überhaupt in diesen Case muss){
			        $randomNumber = rand(1,3);
							if ($randomNumber == 1) {
								//speichert die Zeit ab, wann der Auftrag mit der Maschine fertig ist
								$auftrag->$zeitTracker += (claculateZeit($maschinenArray['M1.1'], $auftrag) + $maschinenArray['M1.1']->$endZeit);
								//speichert die letzte Zeit ab, die der Auftrag auf der Maschine ist
								$maschinenArray['M1.1']->endZeit = (claculateZeit($maschinenArray['M1.1'], $auftrag) + $maschinenArray['M1.1']->$endZeit);
								$chromosom //maschine Auftrag Endzeit

								return;
							}
							elseif($randomNumber == 2){
								$maschinenArray['M1.2']->$startZeit = ;
								$maschinenArray['M1.2']->$endZeit = claculateEndZeit($maschinenArray['M1.2'], $auftrag);
								return;
							}
							else{
								$maschinenArray['M1.3']->$startZeit = ;
								$maschinenArray['M1.3']->$endZeit = claculateEndZeit($maschinenArray['M1.3'], $auftrag);
								return;
							}

			        break;
						} else{
							$aktuelleMaschine++;
						}
			    case 2:
					$randomNumber = rand(1,2);
						if ($randomNumber == 1) {
							$maschinenArray['M2.1']->$startZeit = ;
							$maschinenArray['M2.1']->$endZeit = claculateEndZeit($maschinenArray['M2.1'], $auftrag);
							return;
						}
						else{
							$maschinenArray['M2.2']->$startZeit = ;
							$maschinenArray['M2.2']->$endZeit = claculateEndZeit($maschinenArray['M2.2'], $auftrag);
							return;	
						}
					 break;
			    case 3:
			        $randomNumber = rand(1,2);
						if ($randomNumber == 1) {
							$maschinenArray['M3.1']->$startZeit = ;
							$maschinenArray['M3.1']->$endZeit = claculateEndZeit($maschinenArray['M3.1'], $auftrag);
							return;
						}
						else{
							$maschinenArray['M3.2']->$startZeit = ;
							$maschinenArray['M3.2']->$endZeit = claculateEndZeit($maschinenArray['M3.2'], $auftrag);
							return;	
						}
			        break;
					case 4:
						$randomNumber = rand(1,2);
							if ($randomNumber == 1) {
								$maschinenArray['M4.1']->$startZeit = ;
								$maschinenArray['M4.1']->$endZeit = claculateEndZeit($maschinenArray['M4.1'], $auftrag);
								return;
							}
							else{
								$maschinenArray['M4.2']->$startZeit = ;
								$maschinenArray['M4.2']->$endZeit = claculateEndZeit($maschinenArray['M4.2'], $auftrag);
								return;	
							}
						break;
			}
		}
		return
	}

	function calculateFitnessScore($chromosom) {
		foreach($chromosom as $value) { // weiß nicht ob es so wirklich anprechbar ist
			$duration += $value;
		}
		return $duration;
	}

	function generateMaschinenArray() {
		$m11 = new Maschine("M1.1",2,1,true,"Schlitz",0,0);  //$name, $durchlaufzeit_pro_stueck, $umruestzeit, $is_avaliable, $aktuellerAufsatz
		$m12 = new Maschine("M1.2",2,1,true,"Schlitz",0,0);
		$m13 = new Maschine("M1.3",2,1,true,"Schlitz",0,0);
		$m21 = new Maschine("M2.1",2,1,true,"Schlitz",0,0);
		$m22 = new Maschine("M2.2",2,1,true,"Schlitz",0,0);
		$m31 = new Maschine("M3.1",2,1,true,"Schlitz",0,0);
		$m32 = new Maschine("M3.2",2,1,true,"Schlitz",0,0);
		$m41 = new Maschine("M4.1",2,1,true,"Schlitz",0,0);
		$m42 = new Maschine("M4.2",2,1,true,"Schlitz",0,0);
		$m51 = new Maschine("M5.1",2,1,true,"Schlitz",0,0);
		$m52 = new Maschine("M5.2",2,1,true,"Schlitz",0,0);
		$m61 = new Maschine("M6.1",2,1,true,"Schlitz",0,0);
		$m62 = new Maschine("M6.2",2,1,true,"Schlitz",0,0);
		$m63 = new Maschine("M7.1",2,1,true,"Schlitz",0,0);
		$m71 = new Maschine("M7.2",2,1,true,"Schlitz",0,0);
		$m72 = new Maschine("M7.3",2,1,true,"Schlitz",0,0);

		$maschinenArray = array(
			"M1.1"=>$m11, 
			"M1.2"=>$m12,
			"M1.3"=>$m13,
			"M2.1"=>$m21,
			"M2.2"=>$m22,
			"M3.1"=>$m31,
			"M3.2"=>$m32,
			"M4.1"=>$m41,
			"M4.2"=>$m42,
			"M5.1"=>$m51,
			"M5.2"=>$m52,
			"M6.1"=>$m61,
			"M6.2"=>$m62,
			"M6.3"=>$m63,
			"M7.1"=>$m71,
			"M7.2"=>$m72);
		return $maschinenArray;
	}

	function claculateZeit($maschine,$auftrag){
		return ($maschine->getDurchlaufzeit($auftrag->$menge,$auftrag->$faktor) + $maschine->getumruestzeit($maschine->$aktuellerAufsatz));
	}
}
?>
