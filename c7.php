<?php
// $ime = 'Dragi';
// $broj = strlen($ime);

// if($broj % 2 == 0){
// 	echo "paren broj na bukvi";
// }else {
// 	echo "neparen broj na bukvi";
// }



$ime = 'Dragi';
$broj = strlen($ime);

switch ($broj % 2) {
	case 0:
		echo "parno ime";
		break;
	
	case 1:
		echo "neparno ime";
		break;
}

?>