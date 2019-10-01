
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="_GET" action="15118.php">
		tanggal lahir<input type="date" name="birth">
		<input type="submit" name="submit">
	</form>
	<?php 
	
	$lahir = date_create($_GET['birth']);
	
	$harilahir = date_format($lahir,'d');
	$harisekarang = date('d');
	$hari = $harisekarang - $harilahir;

	$bulanlahir = date_format($lahir,'m');
	$bulansekarang = date('m');
	$bulan = $bulansekarang - $bulanlahir;

	$tahunlahir = date_format($lahir,'Y');
	$tahunsekarang = date('Y');
	$tahun = $tahunsekarang - $tahunlahir;

	echo  $tahun . " tahun " . $bulan . " bulan " . $hari . " hari " ;
 ?>

		
</body>
</html>