<?php 
	$numeros = array(12, -5, 0, 7, -3, 8, 10, -1, 4, 6);
	$numPosi = 0;
	$numNeg = 0;
	$numPar = 0;
	$numImp = 0;
	$maxI = sizeof($numeros);
	for ($i=0; $i < $maxI; $i++) { 
		echo "$numeros[$i] <br>";
		if ($numeros[$i] >= 0) {
			$numPosi ++;
		} else {
			$numNeg ++;
		}
		if ($numeros[$i] % 2 == 0) {
			$numPar ++;
		} else {
			$numImp ++;
		}
	}
	echo "<br>";
	echo "Números posítivos: $numPosi <br>";
	echo "Números negativos: $numNeg <br>";
	echo "Números pares: $numPar <br>";
	echo "Números ímpares: $numImp <br>";
 ?>