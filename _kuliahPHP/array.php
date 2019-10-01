<?php
	$a = array(87348, 'satu', 1, 'dua', 'tiga', 3);
	// echo $a;
	// var_dump($a);
	// echo "<hr>";
	// print_r($a);
	// echo "<br>";

	$b = array ('key'=> 0, 'angka' => 'ganjil',1 => 'satu', 4 => 124142);
	print_r($b);
	echo "<br>";

	// $b[] = 'value';
	$b[4] = 'value';
	print_r($b);
	echo "<br>";

	//===========================================

	$a = array(1,2,3,4,5);

	//susunan array menjadi seperti apa?
	$a[] = 5;
	echo "1. ";
	print_r( $a);
	echo "<hr>";
	//susunan array = Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 5 )

	$a[7] = 5;
	echo "2. ";
	print_r($a);
	echo "<hr>";
	//susunan array = Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 5 [7] => 5 ) 

	$a[1] = 5;
	echo "3. ";
	print_r($a);
	echo "<hr>";
	//susunan array = Array ( [0] => 1 [1] => 5 [2] => 3 [3] => 4 [4] => 5 [5] => 5 [7] => 5 )

	$a['satu'] = 5;
	echo "4. ";
	print_r($a);
	echo "<hr>";
	//susunan array = Array ( [0] => 1 [1] => 5 [2] => 3 [3] => 4 [4] => 5 [5] => 5 [7] => 5 [satu] => 5 ) 

	unset($a['sepuluh']);
	echo "5. ";
	print_r($a);
	echo "<hr>";
	//susunan array = Array ( [0] => 1 [1] => 5 [2] => 3 [3] => 4 [4] => 5 [5] => 5 [7] => 5 [satu] => 5 ) 

	unset($a[4]);
	echo "6. ";
	print_r($a);
	echo "<hr>";
	//susunan array = Array ( [0] => 1 [1] => 5 [2] => 3 [3] => 4 [5] => 5 [7] => 5 [satu] => 5 )

	// unset($a);
	// echo "7. ";
	// print_r($a);
	// echo "<br>";
	//susunan array = Notice: Undefined variable: a in C:\xampp\htdocs\_kuliahPHP\array.php on line 61

	//echo $a[4];
	echo "8. ";
	print_r($a);
	echo "<hr>";
	// outputnya adalah Array ( [0] => 1 [1] => 5 [2] => 3 [3] => 4 [5] => 5 [7] => 5 [satu] => 5 

	//$b[] = $a;		// menjadi multidimensional array
	print_r($b);
	echo "<hr>";
	// outputnya adalah 

	foreach ($b as $key => $value) {
		echo "$key - $value </br>";
	}
	echo "<hr>";

	foreach ($b as $value) {
		echo "$value <br>";
	}
	echo "<br> <hr>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
	$b = array(6876, 'dua' => 46,21,87,1231,10=>387,463);
	print_r($b);
	//sort($b);		//sorting value kecil ke besar dan indexing key
	//rsort($b);	//sorting secara descending (besar ke kecil) dan indexing key
	 //asort($b);		//sort value dari kecil ke besar tanpa indexing key
	 //arsort($b);		//sort value dari besar ke kecil tanpa indexing key
?>

	<table class="table table-dark" border ="1">
		<tr>
			<th scope="col">Key</th>
			<th scope="col">Value</th>
		</tr>
		<?php
			foreach ($b as $key => $value) {
		?>
		<tr>
			<td><?php echo $key?></td>
			<td><?=$value?></td>
		</tr>
		<?php
			}
		?>
	</table>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>



