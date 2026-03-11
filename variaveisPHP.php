<?php 

	$data = "20 de agosto de 2020"; // string
	$salario = 850.00;				// float ou double
	$cargo = "Estagiário";			// string
	$idade = 18;					// inteeger
	$resultado = true;				// boolean

	print("Data: $data <br/><br/>");

	printf("Salário: R$%.2f <br/><br/>", $salario);

	$texto = sprintf("%s recebe R$%.2f por mês", $cargo, $salario);

	print("Cargo: $cargo <br/><br/> Idade: $idade <br/><br/>");
	
	
	echo($texto);
?>
