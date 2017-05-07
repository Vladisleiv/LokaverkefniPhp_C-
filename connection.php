<?php
	try {
			$source = 'mysql:host=tsuts.tskoli.is;dbname=0206953159_lokaverkefni_2017';
			$user ='0206953159';
			$password = 'peskivreme95';

			$pdo = new pdo($source, $user, $password);

			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$pdo->exec('SET NAMES "utf8"');
		} 

		catch (Exception $e) {

			echo "tenging tókst ekki". "<br>" . $e->getMessage();
			
		}	
?>