<?php

class Calculator
{
    private int $number1;
    private int $number2;
    private $result;

    function getResult($operation, $num1, $num2)
    {
        if ($num1 > 1000000000 || $num2 > 1000000000) {
            echo "<script>alert('Too big number')</script>";
        } else {
            $this->number1 = $num1;
            $this->number2 = $num2;
            switch ($operation) {
                case "sum":
                    $this->result = $this->number1 + $this->number2;
                    break;
                case "substract":
                    $this->result = $this->number1 - $this->number2;
                    break;
                case "multiply":
                    $this->result = $this->number1 * $this->number2;
                    break;
                case "divide":
                    $this->result = $this->number1 / $this->number2;
                    // $this->result = fdiv($this->number1 , $this->number2);
                    // $this->result = bcdiv($this->number1 , $this->number2,3);
                    break;
                default:
                    echo "Invalid operation <hr>";
                    return;
            }

            return ucfirst($operation) . " of " . $this->number1 . " and " . $this->number2 . " is: <b>" . $this->result . "</b>";
        }
    }
}
