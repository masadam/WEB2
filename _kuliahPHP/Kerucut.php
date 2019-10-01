<?php

	class Kerucut {
		private $jariJari, $tinggi, $phi; 
		// function __construct(argument)
		// {
		// 	# code...
		// }

		function setJariJari($jariJari){
			$this->jariJari = $jariJari;
		}
		
		function setTinggi($tinggi){
			$this->tinggi = $tinggi;
		}

		function getJariJari(){
			return $this->jariJari;
		}
		function getPhi(){
			return 3.14;
		}
		function getTinggi(){
			return $this->tinggi;
		}

		function luasPermukaan(){
			return ($this->getPhi() * $this->getJariJari() * $this->getJariJari()) + $this->getPhi() * $this->getJariJari() * sqrt($this->jariJari*$this->jariJari + $this->tinggi*$this->tinggi);
		}

		function volume(){
			return 0.33 * $this->getPhi() * $this->getJariJari() * $this->getJariJari() * $this->getTinggi();
		}

		function __toString(){
			return "Jari - jari 	 : " . $this->jariJari . "<br>" .
			       "Tinggi      	 : " . $this->tinggi . "<br>" .
			       "Phi          	 : " . $this->getPhi() . "<br>" .
			       "Luas Permukaan   : " . $this->luasPermukaan() . "<br>" .
			       "Volume       	 : " . $this->volume() . "<br>";
		}

	}

	$kerucut1 = new Kerucut();
	
	$kerucut1->setJariJari(30);
	$kerucut1->setTinggi(20);
	echo $kerucut1->__toString();

