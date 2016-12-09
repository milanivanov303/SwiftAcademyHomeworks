<?php
class CalculateFactorial
{
    private $n;
    
    public function __construct($val) 
    {
        $this->n = $val;
    }
    public function calculate() 
    {
        $factorialN = 1;
        for ($i = 1; $i <= $this->n; $i++) {
        $factorialN *= $i;
        }  
        return $factorialN;

    }
    
    
    
}
$klass = new CalculateFactorial(4);

echo $klass->calculate();


?>

