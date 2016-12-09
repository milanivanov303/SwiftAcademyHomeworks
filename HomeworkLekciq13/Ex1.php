<?php

class SortingArray
{
    public $array = array("lemon", "orange", "banana", "apple");
    /*public function __construct($array)
    {
        $this->array = $array;
    }*/
    public function sortThat()
    {
        
        return sort($array);
    }
}
$class1 = new SortingArray();
echo $class1->sortThat();



?>
