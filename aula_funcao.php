<?php 

	function somaValor() { // Função em php sem parâmetro
		echo "Somando...";
	}

	function printNome($nome) { // Função com parâmetro
		echo "Olá, $nome";
	}

	function somar($num1, $num2) {
		return $num1 + $num2;
	}

	somaValor();
	echo "</br>";
	printNome("Etecia");
	echo "</br>";
	$soma = somar(10.5, 42.25);
	echo "$soma";
 ?>