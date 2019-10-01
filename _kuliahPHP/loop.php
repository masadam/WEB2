<?php
	$max = 20;
	//for
	$sum = 0;
	$jumlah = 0;
	for ($i=0; $i <= $max ; $i++) { 
		if($i % 2 == 1){
			echo "$i <br>";
			$sum = $sum + $i;
			$jumlah++;
		}
	}
	echo "sum = $sum <br>";
	echo "jumlah = $jumlah";
	echo "<hr>";

	$i=0;
	$sum = 0;
	$jumlah = 0;
	while ( $i <= $max) {
		if($i % 2 == 1){
			echo "$i <br>";
			$sum = $sum + $i;
			$jumlah++;
		}
		$i++;
	}
	echo "sum = $sum <br>";
	echo "jumlah = $jumlah";
	echo "<hr>";

	//do-while
	$i=0;
	$sum = 0;
	$jumlah = 0;
	do{
		if($i % 2 == 1){
			echo "$i <br>";
			$sum = $sum + $i;
			$jumlah++;

		}
		$i++;
	}while ( $i <= $max);
	echo "sum = $sum <br>";
	echo "jumlah = $jumlah";