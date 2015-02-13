<?php
	$n=$_POST['n'];
	$op=$_POST['op'];


	if($op == 'c'){
		echo ($n - 32) * 5/9;
	}
	if($op == 'f'){
		echo ($n * 9/5) + 32;
	}
?>