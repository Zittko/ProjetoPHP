<?php 
	$num1 = array(10,20,30,40);
	$num2 = array(50,60,70,80);
	$somaVet = array();
	$res = array(0,0,0,0);
	$maxI = sizeof($num1);
	for ($i=1; $i < $maxI; $i++) { 
		$num1[0] += $num1[$i];
	}
	echo "$num1[0] <br>";
	for ($i=1; $i < $maxI; $i++) { 
		$num2[0] += $num2[$i];
	}
	echo "$num2[0] <br>";
	for ($i=0; $i < $maxI; $i++) { 
		$somaVet[$i] = $num1[$i] + $num2[$i];
	}
	for ($i=1; $i < $maxI; $i++) { 
		$res[0] += $somaVet[$i];
	}
	echo "$somaVet[0]";
 ?>