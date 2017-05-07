<?php
		try {
			
                   $sql = "select * FROM gold_customers";

                   $result = $pdo ->query($sql);

		} catch (Exception $e) {
			echo "Ekki tókst að ná í gögnin". "<br>" . $e->getMessage();
		}

		while ($row = $result -> fetch()) {
			
			$gold[] = array($row['Name'], $row['Lastname'], $row['Kennitala']);
		}
?>