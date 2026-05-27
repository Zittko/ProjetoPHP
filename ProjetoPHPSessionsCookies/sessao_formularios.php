<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php 

		session_start();

	 ?>
</head>
<body>
	<b>Funcionário: </b> <?php echo $_SESSION['nome'] ?>, logado com sucesso! <br>
	<b>Data da conexão: </b> <?php echo date("d/m/Y"); ?> <br>
	<b>Hora da conexão: </b> <?php echo date("H:m:s"); ?> <br>
</body>
</html>