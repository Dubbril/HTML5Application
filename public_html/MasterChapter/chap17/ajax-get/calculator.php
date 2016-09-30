<?php
	$n1 = $_GET['num1'];
	$n2 = $_GET['num2'];
	if(!is_numeric($n1) || !is_numeric($n2)) {
		echo "NaN";
		exit();
	}
	
	$op = $_GET['op'];
	$r = "";
	switch($op) {
		case "+": $r = $n1 + $n2; break;
		case "-": $r = $n1 - $n2; break;
		case "*": $r = $n1 * $n2; break;
		case "/": $r = $n1 / $n2; break;
	}
	echo $r;
?>