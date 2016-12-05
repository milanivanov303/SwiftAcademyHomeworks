<?php
require_once 'Ex2.php';
$dog1 = new Dog();
$dog2 = new Dog();


$spas = new Human("Male", $dog1);
$roza = new Human("Female", $dog2);

if ($spas->meetPeople($roza)) {
    echo "can meet";
} else {
    echo "Can't meet other people.";
}



?>
