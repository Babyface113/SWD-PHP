// <?php

// $studenti = array(
// 		array(
// 			'ime' => 'Dragi',
// 			'prezime' => 'Tanchev',
// 			'index' => '1'
// 			),
// 		array(
// 			'ime' => 'Ivana',
// 			'prezime' => 'Koroveshovska',
// 			'index' => '2'
// 			),
// 		array(
// 			'ime' => 'Ardi',
// 			'prezime' => 'Demirovik',
// 			'index' => '3'
// 			),
// 		array(
// 			'ime' => 'Marko',
// 			'prezime' => 'Tanaskoski',
// 			'index' => '4'
// 			),
// 	);

// print_r($studenti);

$fh = fopen('dragi.txt', 'a+');

fwrite($fh, 'Dragi');

fclose($fh);

$fh = fopen('dragi.txt', 'a+');

echo fread($fh, filesize('dragi.txt'));

fclose($fh);



?>