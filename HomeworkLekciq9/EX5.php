<?php
$myArray = range(11, 20);
//print_r($myArray);
shuffle($myArray);
foreach ($myArray as $number) {
    echo $number . " ";
}



?>

