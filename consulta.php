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
		$sql = "SELECT nome, email, idade FROM tbPessoa";
		$resultado =  mysqli_query($con, $sql);
		echo "<h2>Lista de Pessoas Cadastradas</h2>";
		while ($pessoa = mysqli_fetch_array($resultado)) {
			echo $pessoa['Nome'] ." - ". $pessoa['Email'] ."-". $pessoa['Idade'] . " <br>";
		}
		mysqli_close($con);
	}

 ?>