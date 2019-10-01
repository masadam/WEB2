<?php
	session_start();
	//---------------------------------------------
	@$username = $_POST['username'];
	@$password = $_POST['password'];

	//cek user
	if ($username == 'admin' && $password == 'admin') {
		//login sukses, set session
		$_SESSION['isloggedin'] = true;
		$_SESSION['level'] = 'admin';
	}elseif ($username == 'user' && $password == 'user') {
		$_SESSION['isloggedin'] = true;
		$_SESSION['level'] = 'user';
	}elseif (isset($username) && isset($password)) {
		//login gagal, tampilkan pesan login gagal
		echo "invalid credential";
	}
	//---------------------------------------------
	if(!empty($_SESSION['isloggedin'])){
		header("Location: home.php");
		exit();
	}
	
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Halaman Login</h1>
	<form method="POST">
		username <input type="text" name="username"><br>
		password <input type="password" name="password"><br>
		<input type="submit" name="login">
	</form>
	
</body>
</html>