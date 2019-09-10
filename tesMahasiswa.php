<?php
	require_once('Mahasiswa.php');		//require jika error akan fatal error (baris selanjutnya tidak akan dilanjutkan)
										//include jika error akan warning error (baris selanjutnya akan dilanjutkan)
	// include('file');
	// require('file');

	$saya = new Mahasiswa();

	$saya->setNama("Bintang");
	echo $saya->getNama() . "<br>";
	$saya->setJurusan("RPL");
	echo $saya->getJurusan() . "<br>";
	$saya->setUmur(19);
	echo $saya->getUmur() . "<br>";

	echo $saya->__toString() . "<hr>";