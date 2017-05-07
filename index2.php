<?php
		include "connection.php";
		include "query.php";

		?>

<h1>Hérna Koma Myndir Með Database lausn</h1>
<form action="input.php" method="POST">
	Nafn:<br>
	<input type="text" name="Name">
	<br><br/>
	Lastname:<br>
	<input type="text" name="Lastname">
	<br><br/>
	Kennitala:<br>
	<input type="text" name="Kennitala">
	<br><br>
	<input type="submit" name="Submit">
</form>



	