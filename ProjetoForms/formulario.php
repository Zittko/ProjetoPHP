<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formularios PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h2>Formularios PHP</h2>

	<form action="valida.php" method="post">
		<label for="email">E-mail:</label>
		<input type="email" name="email" id="email"
		maxlength="50" required autocomplete="off" autofocus size="30">
		<label for="password">Password:</label>
		<input type="password" name="password" id="password"
		maxlength="16" required autocomplete="off" size="15">
		<br><br>
		<input type="submit" name="login" value="Login">z
		<input type="reset" name="clear" value="Clear">

	</form>

	<script src="js/script.js"></script>
</body>
</html>