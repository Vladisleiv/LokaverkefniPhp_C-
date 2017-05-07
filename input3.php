<?php
		$servername = "10.200.10.24";
		$username= "0206953159";
		$password= "peskivreme95";
		$dbname ="0206953159_php_c#";
		$myndaheiti = $_POST['myndheiti'];
		$myndavefslod = $_POST['myndavefslod'];

		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
			# code...
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "INSERT INTO myndir (myndheiti, myndavefslod) 
		VALUES (\"$myndaheiti\", \"$myndavefslod\")";

		if ($conn->query($sql) === TRUE) {
			# code...
			echo "New record created successfully";
			echo "<a href=\"http://tsuts.tskoli.is/2t/0206953159/verk8/index.php\">Fara til baka herna.</a>";

		}else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
		?>