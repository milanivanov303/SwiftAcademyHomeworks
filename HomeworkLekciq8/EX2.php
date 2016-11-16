<?php
function biggerNumber($a, $b) {
    $max = $a;
    if ($b > $a) {
        $max = $b;
    }
    echo "The bigger number is " . $max . ".<br>";
}

biggerNumber(5, 8);
biggerNumber(22, 16);
biggerNumber(1, 0);


?>

