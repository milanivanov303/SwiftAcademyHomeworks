<?php
$temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$averageTemperature = array_sum($temperatures) / count($temperatures);
echo $averageTemperature . "<br>";
rsort($temperatures);
echo "Max temperatures: ";
for ($i = 0; $i < 5 ; $i++) {
    echo $temperatures[$i] . " ";
}
$minTemperatures = array_slice($temperatures, -5, 5, true);
//echo "Min temperatures: " . $minTemperatures;
echo "<br>Min temperatures: ";
foreach ($minTemperatures as $mtemperature) {
    echo $mtemperature . " ";
}
//print_r(array_slice($temperatures, -5, 5));
?>

