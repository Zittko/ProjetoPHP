<?php 

	$HOST = "localhost";
	$USER = "user_dbloja";
	$PWD = "admin123";
	$DB = "dbLoja";

	// mysqli_connect("localhost", "user_dbloja","admin123", "dbLoja");
	$con = mysqli_connect($HOST, $USER, $PWD, $DB);

	if (mysqli_connect_errno()) {
		echo "Não foi possível conectar com o Banco de Dados" . mysqli_connect_error();
	} else {
		echo "Banco de Dados conectado com sucesso!!!";
		mysqli_close($con);
	}
	
 ?>