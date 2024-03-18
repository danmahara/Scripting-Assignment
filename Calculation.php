<?php

class Calculation
{
    protected $num1, $num2;
    public function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    public function addition()
    {
        return $this->num1 + $this->num2;
    }
    public function multiplication()
    {
        return $this->num1 * $this->num2;
    }
    public function subtraction()
    {
        return $this->num1 - $this->num2;
    }
    public function division()
    {
        if ($this->num2 == 0) {
            return "Can not divide by zero";

        } else {

            return $this->num1 / $this->num2;
        }
    }
    public function display()
    {
        echo "Addition is : " . $this->addition() . "<br>";
        echo "Multiplication is: " . $this->multiplication() . "<br>";
        echo "Subtraction is: " . $this->subtraction() . "<br>";
        echo "Division is: " . $this->division() . "<br>";
    }


}

$calculation = new Calculation(10, 5);
$calculation->display();


?>