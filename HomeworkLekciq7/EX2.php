<?php
$score = -1;
if (0 < $score && $score <= 3) {
  $result = $score * 10;  
} else if (4 <= $score && $score <= 6) {
    $result = $score * 15;
} else if (7 <= $score && $score <= 9) {
    $result = $score * 20;
} else if ($score > 10) {
    $result = $score * 100;
} else if ($score < 0) {
    $result = "Invalid score";
}
echo $result;


?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        
        
        <?php
        
        ?>
    </body>
</html>