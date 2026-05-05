<?php 
	
	$email = $_POST['email'];
	$password = $_POST['password'];

	if ($email == 'arroz@feijao.com.br'&& $password == '123') {
		echo "Welcome to the system!";
	} else{
		echo "Error trying to access";
	}

 ?>