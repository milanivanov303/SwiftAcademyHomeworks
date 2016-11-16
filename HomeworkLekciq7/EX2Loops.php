<?php
for ($a = 0; $a <= 1000; $a++) {
    if ($a % 3 == 0) {
        continue;
    } else if ($a % 7 == 0) {
        continue;
    } else if ($a < 1000) {
        echo $a . ",";
    } else {
        echo $a;
    }
    
}
?>

