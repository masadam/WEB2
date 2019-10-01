<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="age.php" method="_GET">
			tanggal lahir<input type="date" name="birth">
			<input type="submit" name="submit">
		</form>

		<?php
			$birth = date_create($_GET['birth']);
			$today = date_create(date ("Y-m-d"));
			$diff = date_diff($birth, $today);

			echo "umur: $diff->y tahun $diff->m bulan $diff->d hari";
		?>

			<p>kumpulkan <a href="https://s.id/6zju-">disini</a></p>
		<code>https://s.id/6zju-</code>

	</body>
</html>
