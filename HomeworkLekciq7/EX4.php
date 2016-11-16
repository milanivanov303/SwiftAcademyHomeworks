<?php
function whatSign($a, $b, $c) {
    $z = $a * $b * $c;
    if ($z > 0) {
        echo "+";
    } else {
        echo "-";
    }
}
$a = -2;
$b = -2;
$c = 1;
whatSign($a, $b, $c);
?>

