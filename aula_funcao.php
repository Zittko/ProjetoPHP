<?php 
	
	$numero = 30;

	function somaValor() { // Função em php sem parâmetro
		echo "Somando...";
	}

	function somar($num1, $num2) {
		return $num1 + $num2;
	}

	function printNome($nome) { // Função com parâmetro
		echo "Olá, $nome";
	}

	if (is_numeric($numero)) {
		echo "É numero";
	} else {
		echo "Não é número";
	}
	echo "<br>";
	somaValor();
	echo "</br>";
	printNome("Etecia");
	echo "</br>";
	$soma = somar(10.5, 42.25);
	echo "O resultado da soma é $soma";
 ?>