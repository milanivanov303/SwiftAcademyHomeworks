<?php
    //$x1;
	//$x2;
	$a = 6;
	$b = -4;
	$c = 1;
	$d = $b * $b - 4*$a*$c;

	if ($d>=0) {
		$x1 = (-$b - (sqrt($d))) / (2 * $a);
		$x2 = (-$b + (sqrt($d))) / (2 * $a);
		echo "a*x<sup>2</sup> + b*x + c = 0 <br> a=6 , b=-4 , c=1 <br> Резултат: X1 = " . $x1 . " , X2 = " . $x2;
	} else {
		echo "a*x<sup>2</sup> + b*x + c = 0 <br> a=6 , b=-4 , c=1 <br> Uravnenieto nqma realni koreni.";
	}


	$a = 3;
	$b = 4;
	$c = -10;
	$d = $b * $b - 4*$a*$c;

	if ($d>=0) {
		$x1 = (-$b - (sqrt($d))) / (2 * $a);
		$x2 = (-$b + (sqrt($d))) / (2 * $a);
		echo "<br><br>a*x<sup>2</sup> + b*x + c = 0 <br> a=3 , b=4 , c=-10 <br> Резултат: X1 = " . $x1 . " , X2 = " . $x2;
	} else {
		echo "<br><br>a*x<sup>2</sup> + b*x + c = 0 <br> a=3 , b=4 , c=-10 <br> Uravnenieto nqma realni koreni.";
	}
	
	$a = 8;
	$b = -10;
	$c = 4;
	$d = $b * $b - 4*$a*$c;

	if ($d>=0) {
		$x1 = (-$b - (sqrt($d))) / (2 * $a);
		$x2 = (-$b + (sqrt($d))) / (2 * $a);
		echo "<br><br>a*x<sup>2</sup> + b*x + c = 0 <br> a=8 , b=-10 , c=4 <br> Резултат: X1 = " . $x1 . " , X2 = " . $x2;
	} else {
		echo "<br><br>a*x<sup>2</sup> + b*x + c = 0 <br> a=8 , b=-10 , c=4 <br> Uravnenieto nqma realni koreni.";
	}
	
	$a = -7;
	$b = -8;
	$c = 14;
	$d = $b * $b - 4*$a*$c;

	if ($d>=0) {
		$x1 = (-$b - (sqrt($d))) / (2 * $a);
		$x2 = (-$b + (sqrt($d))) / (2 * $a);
		echo "<br><br>a*x<sup>2</sup> + b*x + c = 0 <br> a=-7 , b=-8 , c=14 <br> Резултат: X1 = " . $x1 . " , X2 = " . $x2;
	} else {
		echo "<br><br>a*x<sup>2</sup> + b*x + c = 0 <br> a=-7 , b=-8 , c=14 <br> Uravnenieto nqma realni koreni.";
	}




?>