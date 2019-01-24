<html>
<head>
	<title>PHP and JSON Demo</title>
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
	<h1>Enter A Performer</h1>
	<hr>
	<form action="assets/process.php" method="post">
		<input type="text" name="fullName" placeholder="John Smith">
		<br>
		<label>
			<input type="radio" name ="genre" value="Rock"> Rock
		</label>
		<br>
		<label>
			<input type="radio" name="genre" value="Hip-Hop"> Hip-Hop
		</label>
		<br>
		<label>
			<input type="radio" name="genre" value="Salsa"> Salsa
		</label>
		<br>
		<input type="submit" value="submit">
	</form>
	<hr>
</body>
</html>