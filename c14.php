<?php

class Flomaster {
		//properties
	private $boja = 'crna';
	private $visina = 20;
	private $sirina = 2;

		//methods
	public function setBoja($b){
		$this->boja = $b;
	}

	public function setVisina($a){
		$this->visina = $a;
	}
	public function setSirina($c){
		$this->sirina = $c;
	}
	public function getBoja(){
		return $this->boja;
	}
	public function getVisina(){
		return $this->visina;
	}
	public function getSirina(){
		return $this->sirina;
	}
};


//objekti od tip flomaster
//instanci od klasa flomaster // isti kurac

$f1 = new Flomaster;
// $f1->visina = 15; //samo za public propertie

$f2 = new Flomaster;
// $f2->boja = 'crvena'; // samo za public propertie
// $f2->sirina = 2.5;
$f2->setBoja('ciklama');
$f2->setVisina(4);
$f2->setSirina(4);




$f1-> setBoja('crvena');
$f1-> setVisina('17');
$f1-> setSirina('4');

// print_r($f1);
// print_r($f2);
echo $f1->getBoja();
echo "<br>";
echo $f1->getVisina();
echo "<br>";
echo $f1->getSirina();

echo "<hr>";








?>