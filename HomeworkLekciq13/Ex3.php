<?php
class Vehicles
{
    private $wheelsType;
    private $color;
    private $weight;
    private $height;
    private $model;
    
    public function setModel($model)
    {
        $this->model = $model;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function move()
    {
        return "Moving...";
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getColor()
    {
        return $this->color;
    }
    
}




?>

