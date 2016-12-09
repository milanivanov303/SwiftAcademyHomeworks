<?php
require_once 'mobile/MobileInterface.php';
class Mobile implements MobileInterface 
{
 private $model = 'Mobile';   
 private $manufacturer = 'HTC'; 
 private $owner = 'Steven'; 
 private $batteryType = 'Li-ion';
 private $screenType = 'LED';
 
 public function getModel()
 {
     return $this->model;
 }
    
    /**
     * @return string
     */
    public function getOwner()
    {
        
    }
    
    /**
     * Return Phone type e.g. some Enumeration
     * @return string
     */
    public function getType(){
        
    }
    
    /**
     * @return Battery
     */
    public function getBattery(){
        
    }
    
    /**
     * @return Screen
     */
    public function getScreen(){
        
    }
    
    /**
     * Return pretty formatted message with phone info
     * @return string
     */
    public function getInfo(){
        
    }
}
$mobile = new Mobile();
echo $mobile->getModel();

?>

