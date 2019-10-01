<?php
	class Mahasiswa{
		//attribute
		private $nama, $jurusan, $umur;

		function __construct(){
			// $this->nama = $nama;
			// $this->jurusan = $jurusan;
			// $this->umur = $umur;
		}

		//setter getter
		function setNama($nama){
			$this->nama = $nama;
		}
		function setJurusan($jurusan){
			$this->jurusan = $jurusan;
		}
		function setUmur($umur){
			$this->umur = $umur;
		}

		function getNama(){
			return $this->nama;
		}
		function getJurusan(){
			return $this->jurusan;
		}
		function getUmur(){
			return $this->umur;
		}

		//function dan prosedur
		function __toString(){
			return "Nama: $this->nama. Jurusan: $this->jurusan. Umur: $this->umur <br>";
		}



	}

	$saya = new Mahasiswa();		

	$saya->setNama("Lazuardi");
	echo $saya->getNama() . "<br>";
	$saya->setJurusan("KOMSI");
	echo $saya->getJurusan() . "<br>";
	$saya->setUmur(18);
	echo $saya->getUmur() . "<br>" . "<hr>";
	echo $saya->__toString() . "<hr>";