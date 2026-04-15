<?php 
	// Array de Linha VETOR - ${nome}[0,1,2,3,4] <- índices
	$idade = array();
	$idade[0] = 10;
	$idade[8] = 5;
	$valor = array(10, 20, 30, 40);

	$nomes = array("Maria", "José", "Pedro", "Paulo");


	$salario[] = 1500.52;
	$salario[] = 1250.35;
	$salario[] = 1587.96;
	$salario[] = 1587.89;

	echo "$valor[0] <br>";
	echo "$nomes[3] <br>";
	echo "$salario[2] <br>";
	echo "<br>";
	var_dump($valor);
	echo "<br>";
	var_dump($nomes);
	echo "<br>";
	var_dump($idade);
	echo "<br>";
	var_dump($salario);
 ?>