<?php

include("./classCalculator.php");
include("./calculatorRequest.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculator</title>
</head>

<body>

    <h1>Simple calculator</h1>

    <form action="" method="post">
        <label for="number1">First number: </label>
        <input type="number" name="number1" id="number1" value="1">
        <label for="number2">Second number: </label>
        <input type="number" name="number2" id="number2" value="1">
        <label for="operation">Operation</label>
        <select name="operation" id="operation">
            <option name="sum" id="sum" value="sum">Sum</option>
            <option name="substract" id="substract" value="substract">Substract</option>
            <option name="multiply" id="multiply" value="multiply">Multiply</option>
            <option name="divide" id="divide" value="divide">Divide</option>
        </select>
        <button type="submit" name="calculate">Calculate</button>
        <p>Result: <?php echo $result; ?></p>
    </form>
</body>

</html>