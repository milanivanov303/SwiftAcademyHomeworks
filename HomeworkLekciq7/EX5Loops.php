<?php
$n = 4;
$m = $n + 1;

for ($a = 1; $a <= $n; $a++) {
    
	for ($b = $a; $b < $m; $b++) {
            echo " " . $b;
        }
        $m++;
        echo "<br>";
	
}
?>
