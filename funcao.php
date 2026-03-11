<?php 
	$nome = "Armandino"; // variavel escopo de script

	function exibir(){

		$nome = "Josefina"; // variavel escopo de função

		echo "Valor da variável dentro da função $nome";
	}

	exibir();
	echo "<br/><br/> Valor da variável fora da função $nome";

 ?>