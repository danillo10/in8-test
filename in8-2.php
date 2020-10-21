<?php

echo "Teste número 2: ";

echo "<br>";

function recursiva($num)
{
  if ($num % 2 == 0 && $num % 3 == 0 && $num % 10 == 0) {
    echo "Menor número inteiro divisivel por 2, 3, 10: " . $num;
  } else {
    recursiva($num + 1);
  }
}

recursiva(1);
