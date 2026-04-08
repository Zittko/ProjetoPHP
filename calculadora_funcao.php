<?php 
	function somar($num1, $num2) {
		return $num1 + $num2;
	}
	function subtrair($num1, $num2) {
		return $num1 - $num2;
	}
	function multiplicar($num1, $num2) {
		return $num1 * $num2;
	}
	function dividir($num1, $num2) {
		return $num1 / $num2;
	}
	function naoNumero() {
		echo "Um ou mais valores digitados não são números";
	}

	echo "1 - Soma <br>
	2 - Subtração <br>
	3 - Multiplicação <br>
	4 - Divisão";
	echo "<br> <br>";

	$num1 = 30;
	$num2 = 10;
	$option = 2;

	switch ($option) {
		case 1:
			if (is_numeric($num1) && is_numeric($num2)) {
				$respSoma = somar($num1, $num2);
				echo "$num1 + $num2 = $respSoma";
			} else {
				naoNumero();
			}
			break;
		case 2:
			if (is_numeric($num1) && is_numeric($num2)) {
				$respSub = subtrair($num1, $num2);
				echo "$num1 - $num2 = $respSub";
			} else {
				naoNumero();
			}
			break;
		case 3:
			if (is_numeric($num1) && is_numeric($num2)) {
				$respMult = multiplicar($num1, $num2);
				echo "$num1 x $num2 = $respMult";
			} else {
				naoNumero();
			}
			break;
		case 4:
		if (is_numeric($num1) && is_numeric($num2)) {
				$respDiv = dividir($num1, $num2);
				echo "$num1 / $num2 = $respDiv";
			} else {
				naoNumero();
			}
			break;
		default:
			echo "Opção não disponível";
			break;
	}
 ?>