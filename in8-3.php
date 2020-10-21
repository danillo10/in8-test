<?php

require("oop.php");

echo "Teste número 3: ";

echo "<br>";

$calc = new Calculator();

$calc->setOne(3);
$calc->setTwo(6);
$calc->setThree(9);

echo "O valor da multiplicação é: " . $calc->calculator();

echo "<br><br>";
