<?php
	$nama = $_POST['nama'];
	$kontak = $_POST['kontak'];
	$gender = $_POST['gender'];
	$kewarganegaraan = $_POST['kewarganegaraan'];
	// $nama = $_GET
	

	echo $nama;
	echo "<br>";

	echo $kontak;
	echo "<br>";

	echo $gender;
	echo "<br>";

	echo "Minat :\n";
	if(isset($_POST['programming']))echo "Programming\n";
		
	if(isset($_POST['networking']))echo "Networking\n";
		
	if(isset($_POST['multimedia']))echo "Multimedia\n";
		
	echo "<br>";
	
	if($kewarganegaraan == "WNA")echo "WNA";
	else echo "WNI";


?>