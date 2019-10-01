<?php
	$n1 = $_GET['n1'];
	$n2 = $_GET['n2'];
	$operator = $_GET['operator'];

	// if($operator == '+'){
	// 	echo $n1 + $n2;
	// }else if($operator == '-'){
	// 	echo $n1 - $n2;
	// }else if($operator == '*'){
	// 	echo $n1 * $n2;
	// }else if($operator == '/'){
	// 	echo $n1 / $n2;
	// }

	switch ($operator) {
		case '+':
			echo $n1 + $n2;
			break;
		case '-':
			echo $n1 - $n2;
			break;
		case '*':
			echo $n1 * $n2;
			break;
		case '/':
			echo $n1 / $n2;
			break;
		default:
			echo "undefined";
			break;
	}
	