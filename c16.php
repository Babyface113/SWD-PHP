<?php

class Avtomobil {
	private $marka;
	private $model;
	private $godina;
	private $boja;
	private $vrednost;

	public function __construct($k, $m, $g, $b, $v){
		$this->marka = $k;
		$this->model = $m;
		$this->godina = $g;
		$this->boja = $b;
		$this->vrednost = $v;
	}

	public function setMarka($k){
		$this->marka = $k;
	}
	public function setModel($m){
		$this->model = $m;
	}
	public function setGodina($g){
		$this->godina = $g;
	}
	public function setBoja($b){
		$this->boja = $b;
	}
	public function setVrednost($v){
		$this->vrednost = $v;
	}
	public function getMarka(){
		return $this->marka;
	}
	public function getModel(){
		return $this->model;
	}
	public function getGodina(){
		return $this->godina;
	}
	public function getBoja(){
		return $this->boja;
	}
	public function getVrednost(){
		return $this->vrednost;
	}
}

$auto = new Avtomobil('BMW', 'x6', '2013', 'bela', '16 000 $');

print_r ($auto);

// $auto->setMarka('BMW');
// $auto->setModel('x7');
// $auto->setGodina('2014');
// $auto->setBoja('crna');
// $auto->setVrednost('14 000 $');

// echo $auto->getMarka();
// echo "<br>";
// echo $auto->getModel();
// echo "<br>";
// echo $auto->getGodina();
// echo "<br>";
// echo $auto->getBoja();
// echo "<br>";
// echo $auto->getVrednost();

?>