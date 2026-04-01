<?php 
	$cadRes = 0;
	do {
		$mesaSec = 4;
		$cadSec = 5;
		$cadRes = $cadRes + $cadSec;
		for ($mesa = 1; $mesa <= 40; $mesa++) { 
			$mesOcu = false;
			$cadOcu = 0;
			echo "MESA $mesa </br>";
			for ($cadeira = 1; $cadeira <= 6; $cadeira++) {
				echo "CADEIRA $cadeira: ";
				if ($mesa == $mesaSec) {
					if ($cadeira <= $cadSec) {
						echo "OCUPADA </br>";
						$cadOcu++;
					} else {
						echo "NÃO OCUPADA </br>";
					}
				} else {
					echo "NÃO OCUPADA </br>";
				}
			}
			if ($cadOcu == 6) {
				echo "MESA OCUPADA </br>";
				$mesOcu = true;
			}
			echo "</br>";
		}
	} while ($mesa == 0 || $cadRes == 240);
 ?>