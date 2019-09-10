<?php
	/**
	 * 
	 */
	class Balok	{
		private $panjang, $lebar, $tinggi;
		// function __construct(argument){
		// 	# code...
		// }
		function setPanjang($panjang){
			$this->panjang = $panjang;
		}
		function setLebar($lebar){
			$this->lebar = $lebar;
		}
		function setTinggi($tinggi){
			$this->tinggi = $tinggi;
		}

		function getPanjang(){
			return $this->panjang;
		}

		function getLebar(){
			return $this->lebar;
		}
		function getTinggi(){
			return $this->tinggi;
		}

		function luasPermukaan(){
			return 2*($this->panjang * $this->lebar) + 2*($this->panjang * $this->tinggi) + 2*($this->lebar * $this->tinggi);
		}

		function volume(){
			return $this->panjang * $this->lebar * $this->tinggi;
		}

		function __toString(){
			return "Panjang     : " . $this->panjang . "<br>" .
			       "Lebar       : " . $this->lebar . "<br>" .
			       "Tinggi      : " . $this->tinggi . "<br>" .
			       "Volume      : " . $this->volume() . "<br>";
		}
	}

	$balok1 = new Balok();
	
	$balok1->setPanjang(10);
	$balok1->setLebar(5);
	$balok1->setTinggi(5);
	echo $balok1->__toString();