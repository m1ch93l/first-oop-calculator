<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>first oop calculator</title>
</head>
<body>
	<form action="calculate.php" method="post">
		<input type="text" name="num1">
		<input type="text" name="num2">
		<select name="calculate">
			<option value="addition">ADD</option>
			<option value="subraction">SUBTRACT</option>
			<option value="multiplication">MULTIPLY</option>
		</select>
		<button type="submit">Calculate</button>
	</form>
</body>
</html>