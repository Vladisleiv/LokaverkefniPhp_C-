<?php
		try {
			
                   $sql = "select * FROM myndir";

                   $result = $pdo ->query($sql);

		} catch (Exception $e) {
			echo "Ekki tókst að ná í gögnin". "<br>" . $e->getMessage();
		}

		while ($row = $result -> fetch()) {
			
			$mynd[] = array($row['myndheiti'], $row['myndavefslod']);
		}
?>