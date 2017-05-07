<?php
		include "connection.php";
		include "query.php";

		?>

<h1>Hérna Koma Myndir Með Database lausn</h1>
<form action="input.php" method="POST">
	Nafn:<br>
	<input type="text" name="myndheiti">
	<br><br/>
	Slóð:<br>
	<input type="text" name="myndavefslod">
	<br><br>
	<input type="submit" name="Submit">
</form>

<?php

			foreach ($mynd as $entry) {
				# code...
				echo '<p>' . $entry[0] . '<br> <img src="' . $entry[1] . '" style="width:304px"';
			}

			print_r($mynd)

			?>