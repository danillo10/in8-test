<?php

echo "Teste número 1: ";

$siglas = ['ES', 'MG', 'RJ', 'SP'];
$cidades = ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'];
$estados = [];

echo "<br>";

foreach ($siglas as $sigla) {
  if ($sigla == 'ES') {
    $estados['ES'] = $cidades[3];
  }

  if ($sigla == 'MG') {
    $estados['MG'] = $cidades[2];
  }

  if ($sigla == 'RJ') {
    $estados['RJ'] = $cidades[1];
  }

  if ($sigla == 'SP') {
    $estados['SP'] = $cidades[0];
  }
}

foreach ($estados as $key => $value) {
  echo $key . " - " . $value . "<br>";
}
