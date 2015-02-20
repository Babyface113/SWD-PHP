<?php

	// if(isset($_POST['a']) && strlen($_POST['a']) > 0 && is_int($_POST)){

	if(filter_var($_POST['a'], FILTER_VALIDATE_INT)){

		if($_POST['a'] % 2 == 0){
			echo "paren broj";
		}else{
			echo "neparen broj";
		}
	}else{
		echo "ne gi ispolnuva uslovite";
	}


	// echo $_POST['a'] % 2 == 0 ? "paren broj" : "neparen broj";
?>