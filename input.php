<?php
		$servername = "82.148.66.15";
		$username= "0206953159";
		$password= "peskivreme95";
		$dbname ="0206953159_0206953159_c#_php ";
		$Name = $_POST['Nafn'];
		$Lastname = $_POST['Fornafn'];
		$Kennitala = $_POST['Kennitala'];

		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
			# code...
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "INSERT INTO system (Nafn,Fornafn,Kennitala) 
		VALUES (\"$Nafn\", \"$Fornafn\", \"$Kennitala\")";

		if ($conn->query($sql) === TRUE) {
			# code...
			echo "New record created successfully";
			echo "<a href=\"http://tsuts.tskoli.is/2t/0206953159/verk8/index.php\">Fara til baka herna.</a>";

		}else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
		?>