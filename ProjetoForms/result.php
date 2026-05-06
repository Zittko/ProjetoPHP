<?php 

	$name = $_POST['name'];
	$weight = $_POST['weight'];
	$height = $_POST['height'];
	$imc = $weight / ($height * $height);

	if (isset($name, $weight, $height)) {
		$text = sprintf("Hello, %s <br> Your weight: %.2f <br> Your height: %.2f <br><br> IMC: %.2f <br> Classification: ", $name, $weight, $height, $imc);
		echo($text);
		if ($imc < 18.5) {
			echo "Underweight";
		} else if ($imc >= 18.5 && $imc <= 24.9) {
			echo "Normal";
		} elseif ($imc >= 25 && $imc <= 28.5) {
			echo "Overweight";
		} elseif ($imc >= 28.5 && $imc <= 29.9) {
			echo "Pre-Obese";
		} elseif ($imc >= 30 && $imc <= 34.9) {
			echo "Obese I";
		} elseif ($imc >= 35 && $imc <= 39.9) {
			echo "Obese II";
		} else {
			echo "Obese III";
		}
		
	} else {
		echo "Name, weight or height was not defined :(";
	}
	

 ?>