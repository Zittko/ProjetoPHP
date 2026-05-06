<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<title>IMC Calculator</title>
</head>
<body>

	<h1>IMC Calculator</h1>
	<div id="imcForm">
		<form action="result.php" method="post">
			<label for="name">Name:</label>
			<input type="text" name="name" id="idName"
			maxlength="30" autofocus autocomplete="on">
			<br><br>
			<label for="weight">Weight:</label>
			<input type="text" name="weight" id="idWeight"
			maxlength="5" autofocus autocomplete="off">
			<br><br>
			<label for="height">Height:</label>
			<input type="text" name="height" id="idHeight"
			maxlength="4" autofocus autocomplete="off">
			<br><br>
			<input type="submit" name="calulate" value="Calculate">
			<input type="reset" name="clear" value="Clear">
		</form>
	</div>
	<br><br>
	<table border="1">
		<th>Classification</th>
		<th>IMC (kg/m²)</th>
		<tr>
			<td>Underweight</td> <td>Less than 18,5</td>
		</tr>
		<tr>
			<td>Normal</td> <td>18,5 - 24,9</td>
		</tr>
		<tr>
			<td>Pre-Obese</td> <td>Higher than 25</td>
		</tr>
		<tr>
			<td>Obese I</td> <td>30 - 34,9</td>
		</tr>
		<tr>
			<td>Obese II</td> <td>35 - 39,9</td>
		</tr>
		<tr>
			<td>Obese III</td> <td>Higher than 40</td>
		</tr>
	</table>

	<script src="./js/script.js"></script>
</body>
</html>