<?php 

abstract class MotornoVozilo {
	protected $tip_na_motor;
	protected $broj_na_trkala;
	protected $kw;
}

abstract class Avtomobil extends MotornoVozilo {
	protected $br_vozdushni_prenichinja;
}

interface iAvtomobil {
	public function pali();
}

class BMW extends Avtomobil implements iAvtomobil {
	 private $model;

	 public function setType($t) {
	 	$this->tip_na_motor = $t;
	 }
	 public function setBrojNaTrkala($b) {
	 	$this->broj_na_trkala = $b;
	 }
	 public function setKW($k) {
	 	$this->kw = $k;
	 }
	 public function setVozdusniP($p) {
	 	$this->br_vozdushni_prenichinja = $p;
	 }
	 public function setModel($m) {
	 	$this->model = $m;
	 }
	 public function getType() {
	 	return $this->tip_na_motor;
	 }
	 public function getBrojNaTrkala() {
	 	return $this->broj_na_trkala;
	 }
	 public function getKW() {
	 	return $this->kw;
	 }
	 public function getVozdusniP() {
	 	return $this->br_vozdushni_prenichinja;
	 }
	 public function getModel() {
	 	return $this->model;
	 }

	 public function pali() {
	 	echo "brm brm brmmmm...";
	 }
}

// $kola = new BMW;
// $kola->setType('benzin');
// $kola->setBrojNaTrkala('4');
// $kola->setKW('400 kw');
// $kola->setVozdusniP('4');
// $kola->setModel('x6');


// print_r($kola);


// echo $kola->getType();
// echo "<br>";
// echo $kola->getBrojNaTrkala();
// echo "<br>";
// echo $kola->getKW();
// echo "<br>";
// echo $kola->getVozdusniP();
// echo "<br>";
// echo $kola->getModel();

$bmw = new BMW;
$bmw->setModel('x6');
$bmw->pali();

echo "<pre>";
print_r($bmw);
echo "</pre>";




?>