<?php
$digit1 = 0;
$digit2 = -2.5;
$digit3 = 5;
if ($digit1 > $digit2) {
    if ($digit1 > $digit3) {
        echo $digit1;
        } else {
        echo $digit3;
        }

    } 
    else { 
        if ($digit2 > $digit3) {
        echo $digit2;
    } else {
        echo $digit3;
    }
    }

?>
