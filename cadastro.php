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
		$sql = "INSERT INTO tbPessoa(nome, email, idade) VALUES('$_POST[nome]', '$_POST[email]', '$_POST[idade]')";
		if (mysqli_query($con, $sql)) {
		 	echo "Cadastrado com sucesso!!!";
		} else {
		 	echo "Erro ao cadastrar :(" . mysqli_error();
		}
		mysqli_close($con);
	}

 ?>