<?php
echo "Teste número 4: ";

echo "<br>";

$multiplos = [];

for ($i = 1; $i <= 1000; $i++) {
  if ($i % 3 == 0 || $i % 5 == 0) {
    $multiplos[] = $i;
  }
}

$soma = 0;
foreach ($multiplos as $multiplo) {
  $soma += $multiplo;
}

echo "A soma de todos os múltiplos de 3 ou 5 abaixo de 1000 é: " . $soma;
