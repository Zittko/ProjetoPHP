<?php 
	$mesa = 3;
	$lgr = 5;
	$m1ocu = false; $m2ocu = true; $m3ocu = false; $m4ocu = false; $m5ocu = false; 
	$m6ocu = true; $m7ocu = true; $m8ocu = true; $m9ocu = true; $m10ocu = false;
	$m11ocu = false; $m12ocu = true; $m13ocu = false; $m14ocu = true; $m15ocu = true;
	$m16ocu = false; $m17ocu = true; $m18ocu = false; $m19ocu = false; $m20ocu = true;
	$m21ocu = true; $m22ocu = true; $m23ocu = false; $m24ocu = false; $m25ocu = true; 
	$m26ocu = false; $m27ocu = true; $m28ocu = true; $m29ocu = false; $m30ocu = true;
	$m31ocu = false; $m32ocu = false; $m33ocu = false; $m34ocu = true; $m35ocu = false; 
	$m36ocu = true; $m37ocu = true; $m38ocu = false; $m39ocu = false; $m40ocu = true;
	while ($mesa == 0 || $lgr == 0) {
			if ($mesa < 0 || $mesa >= 40) {
				echo "A mesa N° $mesa não está disponível, pois não existe";
			} elseif ($mesa == 1) { 
				// code...
			} {
				if (condition) {
					// code...
				}
			}

			if ($mesa <= 0 || $mesa >= 40) {
				
			} else {
				if ($mesa == 1) {
					if ($m1ocu == true) {
						echo "A mesa N° $mesa está completamente ocupada e não pode ser reservada";
					} else {
						echo "string";
					}
				}
				echo "--> Mesa N° $mesa</br>";
				if ($lgr <= 0 || $lgr >= 6) {
					echo "A quantidade de lugares '$lgr' está indisponível, pois não existe ";
				} else {
					echo "--> Lugares: $lgr";
				}
			}
	}
 ?>