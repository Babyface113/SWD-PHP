<?php

class Student{
	private $ime;
	private $prezime;

	public function setIme($b){
		$this->ime = $b;
	}
	public function setPrezime($b){
		$this->prezime = $b;
	}
	public function getIme(){
		return $this->ime;
	}
	public function getPrezime(){
		return $this->prezime;
	}
}


class Profesor{
	private $godini;
	private $predmet;

	public function setGodini($b){
		$this->godini = $b;
	}
	public function setPredmet($b){
		$this->predmet = $b;
	}
	public function getGodini(){
		return $this->godini;
	}
	public function getPredmet(){
		return $this->predmet;
	}
}

$student = new Student;
$profesor = new Profesor;

echo $student->setIme('Ivana');
echo "<br>";
echo $student->setPrezime('Koroveshovska');

echo $student->getIme();
echo "<br>";
echo $student->getPrezime();


echo "<br>";
echo "<hr>";

echo $profesor->setGodini(30);
echo "<br>";
echo $profesor->setPredmet('Programiranje');

echo $profesor->getGodini();
echo "<br>";
echo $profesor->getPredmet();



?>