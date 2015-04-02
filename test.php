<?php

			/* Najdolgo ime i najkratko prezime */

// $niza = array(
// 	array(
// 		'ime' => 'Dragi',
// 		'prezime' => 'Tanchev',
// 		'email' => 'dragitancev@gmail.com',
// 		),
// 	array(
// 		'ime' => 'Ivanaaaa',
// 		'prezime' => 'Korovesovska',
// 		'email' => 'ivanak@gmail.com',
// 		),
// 	array(
// 		'ime' => 'Ardi',
// 		'prezime' => 'Demirovikj',
// 		'email' => 'ardibe@gmail.com',
// 		),
// 	array(
// 		'ime' => 'Marko',
// 		'prezime' => 'Janevski',
// 		'email' => 'marche@gmail.com',
// 		),
// 	array(
// 		'ime' => 'Marko',
// 		'prezime' => 'Tanaskoski',
// 		'email' => 'markostari@gmail.com',
// 		)
// 	);

// $max_ime = 100;
// $ime = '';
// $min_prezime = 0;
// $prezime = '';


// 	foreach ($niza as $key) {
// 		if(strlen($key['ime']) < $max_ime){
// 			$max_ime = strlen($key['ime']);
// 			$ime = $key['ime'];
// 		}

// 		if(strlen($key['prezime']) > $min_prezime){
// 			$min_prezime = strlen($key['prezime']);
// 			$prezime = $key['prezime'];
// 		}

// 	}


// 	echo "Najkratko ime: ".$ime;
// 	echo "<br>";
// 	echo "Najdolgo prezime: ".$prezime;


			/* U skolo */



$skolo = array(
		array(
			'predmet' => 'matematika',
			'ucenici' => 12,
			),
		array(
			'predmet' => 'fizika',
			'ucenici' => 18,
			),
		array(
			'predmet' => 'programiranje',
			'ucenici' => 32,
			),
		array(
			'predmet' => 'hemija',
			'ucenici' => 4,
			),
	);



$sobirok = 0;

foreach ($skolo as $predmet) {
	$sobirok += $predmet['ucenici'];
}

echo 'Sredna vrednost e: '.$sobirok / count($skolo);

?>