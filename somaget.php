<?php

echo "Parâmetros recebidos: <br>";

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];

$soma = $num1 + $num2;
echo $soma . "<br>";

//somaget.php?num1=5&num2=8