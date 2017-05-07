<?php
		include "connection.php";
		include "query.php";

		?>

<h1>Hérna Koma Nafn, Fornafn og Kennitala til Database.</h1>
<form action="input.php" method="POST">
	Nafn:<br>
	<input type="text" name="Nafn">
	<br><br/>
	Lastname:<br>
	<input type="text" name="Fornafn">
	<br><br/>
	Kennitala:<br>
	<input type="text" name="Kennitala">
	<br><br>
	<input type="submit" name="Submit">
</form>



	