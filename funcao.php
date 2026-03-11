<?php 
	$nome = "Armandino"; // variavel escopo de script
	$ano = 2020;

	function exibir() {

		$nome = "Josefina"; // variavel escopo de função

		echo "Valor da variável dentro da função $nome";
	}

	function exibirano() {
		GLOBAL $ano;
		$ano++;
		return $ano;
	}

	exibir();
	echo "<br/><br/> Valor da variável fora da função $nome <br/><br/>";
	echo "<br/> Ano: ".$ano;
	echo "<br/> Ano: ".exibirano();
	echo "<br/> Ano: ".exibirano();
	echo "<br/> Ano: ".$ano + 1;
 ?>