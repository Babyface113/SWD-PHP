<?php

// print_r($_FILES);


if('image/jpeg' == $_FILES['slika']['type']){
	
$od = $_FILES['slika']['tmp_name'];
$vo = 'uploads./'.$_FILES['slika']['name'];

move_uploaded_file($od, $vo);
}

?>