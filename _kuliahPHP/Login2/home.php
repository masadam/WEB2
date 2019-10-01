<?php
	session_start();
	
	if (empty($_SESSION['isloggedin'])) {
		header("Location: login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
		/* Add a black background color to the top navigation */
		.topnav {
		  background-color: #333;
		  overflow: hidden;
		}

		/* Style the links inside the navigation bar */
		.topnav a {
		  float: left;
		  color: #f2f2f2;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		}

		/* Change the color of links on hover */
		.topnav a:hover {
		  background-color: #ddd;
		  color: black;
		}

		/* Add a color to the active/current link */
		.topnav a.active {
		  background-color: #4CAF50;
		  color: white;
		}
	</style>
</head>
<body>
	<div class="topnav">
		<a class="active">Home</a>
		<?php
			if($_SESSION['level'] == 'admin'){

		?>
		<a href="news.php">News</a>
		<a href="contact.php">Contact</a>
		<?php
			}
		?>
		<a href="about.php">About</a>
		<a href="logout.php" style="float: right">Logout</a>
	</div>
	<h1>ini halaman home</h1>
</body>
</html>