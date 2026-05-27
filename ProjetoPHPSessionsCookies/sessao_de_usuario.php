<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pagina Web - Sessão de usuário </title>
</head>
<body>
	<?php 
		session_start();
		$_SESSION['nome'] = "canjica e arroz doce";
		// session_unset();
		session_destroy();

	 ?>
	 <h3>Sessão de Usuário</h3>
	 <label>Bem vindo usuário: </label><?php echo $_SESSION['nome']; ?>
	 <br>
	 <label>ID do usuário: </label><?php echo session_id(); ?>
</body>
</html>