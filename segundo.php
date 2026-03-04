<?php
	//comentario de linha
	/* comentario
		  de
		bloco    */
    
	$num1 = 10;
	$num2 = 10.5;
	$sobreNome = 'Saiki';
	$nome = "Juan";
	$status = true;
	$flag = false;
	$resp = $num1 + $num2;
	$resp2 = $nome.$sobreNome;
	echo $resp2;
	if ($num1 != $num2) {
		echo "\n aviso!";	
	};
	function teste() {
		echo "\n TESTE!!";
	};
	teste();
?>