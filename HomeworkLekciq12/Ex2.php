<?php
$dog = new Dog();
class Human 
{
    public $gender = "";
    public $weight = 80;
    public $height = 180;
    public $dog;
    public function walk() {
}
    public function run() {
}
    public function eat() {
}
    public function talk() {
}
    public function meetPeople() {
}
}

$chovek = new Human();
print_r($chovek->dog);


?>