<?php

echo "Parâmetros recebidos: <br>";

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$num3 = $_GET["num3"];

$ma = ($num1 + $num2 + $num3)/3;
echo $ma . "<br>";

//maget.php?num1=5&num2=8num3
