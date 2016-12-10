<?php
require_once 'Ex1.php';

class Human 
{
    private $gender;
    private $weight;
    private $height;
    private $dog;
    
    public function __construct($gender, Dog $dog) {
        $this->gender = $gender;
        $this->dog = $dog;
        
    }
    public function walk() {
        return "Human is walking.";
}
    public function run() {
        return "Human is running.";
}
    public function eat() {
        return "Human is eating.";
}
    public function talk() {
        return "Human is talking.";
}
    public function meetPeople(Human $human) {
        if($this->gender == $human->gender) {
            return false;
        }
        return true;
}
}



?>
