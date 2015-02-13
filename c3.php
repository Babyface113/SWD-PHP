<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8"/>
    	<title>New Page</title>
    	<link rel="stylesheet" href=""/>
    </head>
    <body>
    	<form action="c3.php" method="post">
    		Username: <br>
    		<input type="text" name="username"/> <br>
    		Password: <br>
    		<input type="password" name="password"/> <br>
    		Age: <br>
    		<input type="number"/ name="age"> <br>
    		Gender: <br>
    		<label for="gm">
    			Male
    			<input type="radio" name="gender" value="male" id="gm"/>
    		</label> <br>
    		<label for="gf">
    			Female
    			<input type="radio" name="gender" value="Female" id="gf"/>
    		</label><br>
    		<label for="go">
    			Other
    			<input type="radio" name="gender" value="other" id="go"/>
    		</label><br>
    		Hair color:
    		<input type="color" name="hair"/><br>
    		Date of birth:
    		<input type="date" name="birthday"/><br>
    		<label for="f1">
    			Pizza
    			<input type="checkbox" name="food[]" value="pizza" id="f1"/>
    		</label> <br>
    		<label for="f2">
    			Barbecue
    			<input type="checkbox" name="food[]" value="bbq" id="f2"/>
    		</label> <br>
    		<label for="f3">
    			Burek
    			<input type="checkbox" name="food[]" value="burek" id="f3"/>
    		</label> <br>
    		<label for="f4">
    			Spaghetti
    			<input type="checkbox" name="food[]" value="spaghetti" id="f4"/>
    		</label> <br>
    		<label for="f5">
    			Salad
    			<input type="checkbox" name="food[]" value="salad" id="f5"/>
    		</label> <br>
    		<label for="f6">
    			More salad
    			<input type="checkbox" name="food[]" value="more_salad" id="f6"/>
    		</label> <br>
    		Country: <br>
    		<select name="country">
    			<option value="mk">Macedonia</option>
    			<option value="sk">Slovakia</option>
    			<option value="se">Sweeden</option>
    			<option value="de">Germany</option>
    			<option value="fr">France</option>
    			<option value="zb">Zimbabwe</option>
    			<option value="gb">Great Britian</option>
    			<option value="at">Atlantis</option>
    			<option value="nk">North Korea</option>
    			<option value="bo">Bolivia</option>
    			<option value="it">Italy</option>
    			<option value="ir">Ireland</option>
    		</select> <br>
    		<button type="submit">Submit</button>
    	</form>
    	<?php
    		print_r($_POST);
    	?>
    	<hr>
    	username:
    	<?=$POST['username'];?>
    	<br>
    	password:
    	<?=$POST['password'];?>
    	<br>
    	age:
    	<?=$POST['age'];?>
    	<br>
    	<?=$POST['gender'];?>
    	<br>
    	<?=$POST['hair'];?>
    	<br>
    	<?=$POST['birthday'];?>
    	<br>
    	<?=$POST['food'];?>
    	<br>
    	<?=$POST['country'];?>
    </body>
</html>