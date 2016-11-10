<!DOCTYPE html>
<html>
<body>

<?php
//ZADACHA 5
$A = 5;  
$B = -5;

	print "5 == -5 ";
	var_dump($A == $B);
	print "<br>5 > -5 ";
	var_dump($A > $B);
	print "<br>5 >= -5 ";
	var_dump($A >= $B);
	print "<br>5 != -5 ";
	var_dump($A != $B);
	
$C = 10;  
$D = 0;

	print "<br>10 == 0 ";
	var_dump($C == $D);
	print "<br>10 > 0 ";
	var_dump($C > $D);
	print "<br>10 >= 0 ";
	var_dump($C >= $D);
	print "<br>10 != 0 ";
	var_dump($C != $D);
	
$a = 12;  
$b = 0.2;

	print "<br>12 == 0.2 ";
	var_dump($a == $b);
	print "<br>12 > 0.2 ";
	var_dump($a > $b);
	print "<br>12 >= 0.2 ";
	var_dump($a >= $b);
	print "<br>12 != 0.2 ";
	var_dump($a != $b);
	
$c = 0;  
$d = 0;

	print "<br>0 == 0 ";
	var_dump($c == $d);
	print "<br>0 > 0 ";
	var_dump($c > $d);
	print "<br>0 >= 0 ";
	var_dump($c >= $d);
	print "<br>0 != 0 ";
	var_dump($c != $d);
	
//ZADACHA 6

echo "<br><br><h2>EXERCISE 6</h2><br>";
echo "Tomorrow I 'll learn PHP global variables.<br>This is a bad command : del c:\*.*";

//ZADACHA 7
$lastChange = "Zadacha567.php";
echo "<br><br><h2>EXERCISE 7</h2><br>";
echo $_SERVER['GATEWAY_INTERFACE'];
echo "<br>";
echo "$lastChange was last changed: " .date("F d Y H:i:s.", filemtime($lastChange));

//ZADACHA 8
echo "<br><br><h2>EXERCISE 8</h2><br>";
#echo $_SERVER['HTTP_REFERER'];  NE RABOTI

#echo "<br>";
#echo $_SERVER['SCRIPT_URI'];  NE RABOTI
echo "<br>";
$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

$escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
echo '<a href="' . $escaped_url . '">' . $escaped_url . '</a>';
	
?>  

</body>
</html>