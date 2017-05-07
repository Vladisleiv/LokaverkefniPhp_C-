<?php
		try {
			
                   $sql = "select * FROM system";

                   $result = $pdo ->query($sql);

		} catch (Exception $e) {
			echo "Ekki tókst að ná í gögnin". "<br>" . $e->getMessage();
		}

		while ($row = $result -> fetch()) {
			
			$gold[] = array($row['Nafn'], $row['Fornafn'], $row['Kennitala']);
		}
?>