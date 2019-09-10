<?php
	$date = date_create("2019-01-01 23:1:55");
	$date2 = date_create_from_format("d-M-Y", "01-Mar-2019");
	echo 'date_create ' . date_format($date, "d M Y H:i:s") . "<hr>";
	echo 'date_create_from_format ' . date_format($date2, "d M Y H:i:s") . "<hr>";
	echo 'now ' . date('d M Y H:i:s');

	$selisih = date_diff($date, $date2);
	print_r($selisih);
	echo "<hr>";
	echo $selisih->days . "<hr>";
	echo "$selisih->y tahun, $selisih->m bulan, $selisih->days hari";
