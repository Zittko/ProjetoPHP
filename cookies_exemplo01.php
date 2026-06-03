<?php 
	$value = "aluno";
	// setcookie("usuario", "etecia", time()+86400);
	// setcookie("admin", "user_admin", time()+86400);
	// setcookie("Ocupacao", $value, time()+60);

	$usuario = $_COOKIE['usuario'];
	$admin = $_COOKIE['admin'];
	if ($admin != "master") {
		echo "Não é master <br>";
	} else {
		echo "Bem vindo, $admin.";
	}

	if (isset($usuario)) {
		echo "Bem vindo(a), $usuario <br>";
	} else {
		echo "Usuário novo, seja bem vindo(a)! <br>";
	}

 ?>