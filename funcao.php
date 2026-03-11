<?php 
	$nome = "Armandino";

	function exibir(){

		$nome = "Josefina";

		echo "Valor da variável dentro da função $nome";
	}

	function calc($n1, $n2) {
		$resultado = $n1 + $n2;
		echo "<br/><br/> Resultado é igual a: $resultado";
	}
	
	exibir();
	calc(5, 10);
	echo "<br/><br/> Valor da variável fora da função $nome";

 ?>