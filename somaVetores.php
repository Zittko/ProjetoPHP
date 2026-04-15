<?php 
	$num1 = array(10,20,30,40);
	$num2 = array(50,60,80,90);
	$res = array();
	for ($i=0; $i <= 3; $i++) { 
		$res[$i] = $num1[$i] + $num2[$i];
	}
	var_dump($res);
 ?>