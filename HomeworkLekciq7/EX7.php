<?php
$chislo1 = -2;
$chislo2 = 4;
$chislo3 = 3;
if ($chislo1 > $chislo2 && $chislo2 < $chislo3) {
            if ($chislo1 > $chislo3) {
                echo $chislo1 . " " . $chislo3 . " " . $chislo2;  
            }
            else if ($chislo1 < $chislo3) {
                echo $chislo3 . " " . $chislo1 . " " . $chislo2;
            }
        }
        else if ($chislo1 < $chislo2 && $chislo1 < $chislo3) {
            if ($chislo2 > $chislo3) {
                echo $chislo2 . " " . $chislo3 . " " . $chislo1;
            }
            else if ($chislo2 < $chislo3) {
                echo $chislo3 . " " . $chislo2 . " " . $chislo1;
            }
        }
        else if ($chislo1 == $chislo2) {
            if ($chislo3 > $chislo2) {
                echo $chislo3 . " " . $chislo1 . " " . $chislo2;
            }
            else if ($chislo3 == $chislo2) {
                echo $chislo2 . " " . $chislo1 . " " . $chislo3;
            }
        }
   


    




?>