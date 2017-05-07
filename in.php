<?php
		$servername = "10.200.10.24";
		$username= "0206953159";
		$password= "peskivreme95";
		$dbname ="0206953159_php_c#";
		$Name = $_POST ['Name'];
		$Lastname= $_POST ['Lastname'];
		$Kennitala =$_POST ['Kennitala'];

		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
			# code...
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "INSERT INTO customers (Name,Lastname,Kennitala) 
		VALUES (\"$Name\", \"$Lastname\", \"$Kennitala\")";

		if ($conn->query($sql) === TRUE) {
			# code...
			echo "New record created successfully";
			echo "<a href=\"http://tsuts.tskoli.is/2t/0206953159/LokaverkefniPhp_C%23/index2.php\">Fara til baka herna.</a>";

		}else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
		?>