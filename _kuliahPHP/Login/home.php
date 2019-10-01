<?php
	session_start();
	// $_SESSION['isloggedin'] = true;
	if (empty($_SESSION['isloggedin'])) {
		header("Location: login.php");
	}
	// session_destroy();

	// print_r($_SESSION);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Halaman Home</h1>
	<a href="logout.php">Logout</a>

</body>
</html>