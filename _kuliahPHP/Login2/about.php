<?php
	session_start();
	
	if (empty($_SESSION['isloggedin'])) {
		header("Location: login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>About</title>
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
		<a href="home.php">Home</a>
		
		<a href="news.php">News</a>
		<a href="contact.php">Contact</a>
		
		<a class="active">About</a>
		<a href="logout.php" style="float: right">Logout</a>
	</div>
	<h1>ini halaman about</h1>
</body>
</html>