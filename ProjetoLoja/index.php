<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Home</title>
</head>
<body>
	<form action="contato.php" method="post">
		<label for="idName">Name:</label>
		<input type="text" name="name" id="idName" 
		placeholder="Type your name" maxlength="50" 
		required autocomplete="off" autofocus>
		<br><br>
		<label for="idEmail">Email:</label>
		<input type="email" name="email" id="idEmail"
		placeholder="Type your e-mail" maxlength="50"
		autocomplete="off" required>
		<br><br>
		<label for="idMessage">Message:</label>
		<textarea name="message" id="idMessage" placeholder="Send a message..."
		required></textarea>
		<br><br>
		<input type="submit" name="enviar" value="Submit">
		<input type="reset" name="limpar" value="Clear">
	</form>
	<script src="js/script.js"></script>
</body>
</html>