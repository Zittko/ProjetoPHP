<?php 
	$num1 = array(10,20,30,40);
	$num2 = array(50,60,70,80);
	$res = array();
	// for ($i=0; $i <= 3; $i++) { 
	// 	echo "$num1[$i] <br>";
	// }
	// for ($i=0; $i <= 3; $i++) { 
	// 	echo "$num2[$i] <br>";
	// }
	for ($i=0; $i <= 3; $i++) { 
		$res[$i] = $num1[$i] + $num2[$i];
	}
	echo "------------ <br>";
	for ($i=0; $i <= 3; $i++) { 
		echo "$res[$i]<br>";
	}
	echo "------------ <br>";
 ?>