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
		if ($num2 != 0) {
			return $num1 / $num2;
		} else {
			echo "Não divisível por 0";
		}
	}
	function naoNumero() {
		echo "Um ou mais valores digitados não são números";
	}
	function checkNum($num1, $num2) {
		if (is_numeric($num1) && is_numeric($num2)) {
			return true;
		} else {
			naoNumero();
			return false;
		}
	}
	function operador($option) {
		if ($option == 1) {
			return "soma";
		} elseif ($option == 2) {
			return "subtração";
		} elseif ($option == 3) {
			return "multiplicação";
		} elseif ($option == 4) {
			return "divisão";
		} else {
			return null;
		}
	}
	function responder($num1, $num2, $option, $resp) {
		if (checkNum($num1, $num2)) {
			echo "A ";
			echo (operador($option));
			echo " de $num1 e $num2 é $resp";
		}
	}

	echo "1 - Soma <br>
	2 - Subtração <br>
	3 - Multiplicação <br>
	4 - Divisão";
	echo "<br> <br>";

	$num1 = 30;
	$num2 = 10;
	$option = 4;

	switch ($option) {
		case 1:
			$respSoma = somar($num1, $num2);
			responder($num1, $num2, $option, $respSoma);
			break;
		case 2:
			$respSub = subtrair($num1, $num2);
			responder($num1, $num2, $option, $respSub);
			break;
		case 3:
			$respMult = multiplicar($num1, $num2);
			responder($num1, $num2, $option, $respMult);
			break;
		case 4:
			$respDiv = dividir($num1, $num2);
			responder($num1, $num2, $option, $respDiv);
			break;
		default:
			echo "Opção não disponível";
			break;
	}
 ?>