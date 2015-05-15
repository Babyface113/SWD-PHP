<?php

$dsn = "mysql:host=127.0.0.1;dbname=koledz";
$username = "root";
$password = '';


$db = new PDO($dsn, $username, $password);

$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$koledz_id = $_POST['koledz_id'];

$sql = "INSERT INTO studenti (ime, prezime, koledz_id) values ('".$ime."', '".$prezime."', ".$koledz_id.")";


$query = $db->query($sql);

header('location: db1.php')

?>