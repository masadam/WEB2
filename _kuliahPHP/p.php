<?php
	$string = file_get_contents("http://10.33.34.31/src.txt");
	echo $string . "<hr>";

	if(preg_match("/jalan/", $string)){		//cek apakah di dalam string ada kata yg dimaksud
		echo 'found' . "<hr>";
	}else{
		echo "not found". "<hr>";
	}

	$arr = preg_split("/[.]/", $string);	//memisahkan string menjadi array
	print_r($arr);
	echo  "<hr>";

	$string = preg_replace("/jalan/", "JALAN", $string);
	echo "$string";
	echo  "<hr>";

	