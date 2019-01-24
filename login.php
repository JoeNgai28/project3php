<html>
<head>
	<title>PHP and JSON Demo</title>
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
	<?php require_once('assets/partials/nav.php'); ?>
	<h1>Sign In
    </h1>
	<hr>
	<form action="assets/process.php" method="post">
        <label>FullName<br>
            <input type="text" name="fullName" placeholder="John Smith">
        </label>
		<br><br>
        <label>Password - Use Default pwd - 'play'<br>
		  <input type="password" name="pwd" title="Use default password -'play'" required>
        </label>
		<br><br>
        <input type="submit" value="Login">
	</form>
	<hr>
	<?php require_once('assets/partials/footer.php'); ?>
</body>
</html>