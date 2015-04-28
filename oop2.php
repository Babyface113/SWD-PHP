<?php

abstract class Academy {
	protected $predmet;
	protected $br_na_studenti;

	public function Predmet($p) {
		return $p;
	}
	public function BrNaStudenti($b) {
		return $b;
	}
}

interface iPredavanje {
	public function predavanje();
}

class WebDesign extends Academy implements iPredavanje {
	public $problem;
	public $naaaa;
	
	public function predavanje() {
		return " Predavam Programiranje";
	}
}

class GraphicDesign extends Academy implements iPredavanje {
	public $prednost;
	public $serioznost;

	public function predavanje() {
		return " Predavam Umetnost";
	}
}
$webdesigner = new WebDesign;
$graphicdesigner = new GraphicDesign;

echo "WebDesign:", $webdesigner->predavanje(), "<br>", "<br>";

echo $webdesigner->Predmet('Predmet: Web Tehnologii'), "<br>";
echo $webdesigner->BrNaStudenti('Broj na Studenti: Momentalno 4'), "<br>";

echo $webdesigner->problem = "Problem: Sakame golemi Monitori !", "<br>";
echo $webdesigner->naaaa = "Ivana: Naaaaa !", "<br>";
echo "<hr>";

echo "GraphicDesign:", $graphicdesigner->predavanje(), "<br>", "<br>";

echo $graphicdesigner->Predmet("Predmet: Likovno be :)"), "<br>";
echo $graphicdesigner->BrNaStudenti("Broj Na Studenti: Nekolku"), "<br>";

echo $graphicdesigner->prednost ="Prednost: GOOOLEMI Monitori", "<br>";
echo $graphicdesigner->Serioznost = "Serioznost: Slabooo...", "<br>";

?>