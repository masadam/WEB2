<?php
/**
 * 
 */
	class Persegi {
		private $panjang, $lebar;

		function setPanjang($panjang){
			$this->panjang = $panjang;
		}
		function setLebar($lebar){
			$this->lebar = $lebar;
		}

		function getPanjang(){
			return $this->panjang;
		}

		function getLebar(){
			return $this->lebar;
		}

		function luas(){
			return $this->panjang * $this->lebar . "<br>";
		}

		function __toString(){
			
			return "Panjang     : " . $this->panjang . "<br>" .
			       "Lebar       : " . $this->lebar . "<br>" .
			       "Luas        : " . $this->luas() . "<br>";
		}

		
	}

	$persegi1 = new Persegi();
	
	$persegi1->setPanjang(10);
	$persegi1->setLebar(5);
	echo $persegi1->__toString();


	



