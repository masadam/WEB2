<?php

	function f1($bilangan){		//prosedur
		// cek ganjil genap
		if($bilangan%2 == 1){
			echo "ganjl";
		}else{
			echo "genap";
		}
	}

	function f2($bilangan){		//function
		//cek ganjil genap
		if($bilangan%2 == 1){
			return "ganjil";
		}else{
			return "genap";
		}
	}

	function f3($bilangan){
		//bilangan prima
		$x = 0;
		for($i=1 ; $i <= $bilangan ; $i++){
			if($bilangan % $i == 0){
				$x++;
			}
		}
		if($x == 2 && $bilangan>0){
			echo "$bilangan Bilangan Prima";
		}else{
			echo $bilangan . " Bukan Bilangan Prima";
		}
	}

	echo f1(213123);
	echo "<hr>";
	echo f2(28748);
	echo "<hr>";
	echo f3(16) . "<br>";
	echo f3(1) . "<br>";
	echo f3(0) . "<br>";
	echo f3(-3) . "<br>";
	echo f3(2) . "<br>";
	echo f3(-11) . "<br>";