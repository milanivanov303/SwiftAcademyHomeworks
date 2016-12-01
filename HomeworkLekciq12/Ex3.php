<?php
$human1 = new Human();
$human2 = new Human();
if ($human1->gender == $human2->gender) {
    return meetPeople();
} else {
    echo "Can't meet other people.";
}



?>
