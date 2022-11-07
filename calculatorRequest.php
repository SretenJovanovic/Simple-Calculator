<?php 

$result = '';
if (isset($_POST['calculate'])) {
    $num1 =  $_POST["number1"];
    $num2 =  $_POST["number2"];
    $operation =  $_POST["operation"];
    $calculate = new Calculator();
    $result = $calculate->getResult($operation, $num1, $num2);
}
