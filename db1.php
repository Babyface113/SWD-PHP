<?php


$dsn = 'mysql:dbname=koledz;host=127.0.0.1';
$username = 'root';
$password = '';

$db = new PDO($dsn, $username, $password);

// print_r ($db);

$query = $db->query('SELECT * FROM studenti where koledz_id = 1');
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);

// print_r($res);



?>

<form action="vezba_prodolzuva.php" method="post">
	<input type="text" name="ime">
	<input type="text" name="prezime">
	<select name="koledz_id">
		<option value="1">Web</option>
		<option value="2">Graphic</option>
	</select>
	<input type="submit" value="Save">
</form>

<hr/>

<table border = '1'>
	<tr>
		<td>id</td>
		<td>ime</td>
		<td>prezime</td>
		<td>koledz_id</td>
	</tr>

	<?php foreach ($res as $red) { ?>
	<tr>
		<td><?php echo $red['id'] ?></td>
		<td><?php echo $red['ime'] ?></td>
		<td><?php echo $red['prezime'] ?></td>
		<td><?php echo $red['koledz_id'] ?></td>
	</tr>
		
	<?php } ?>

</table>


