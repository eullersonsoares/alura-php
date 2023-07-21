<?php

$listaDeIdades = [18, 21, 28, 32, 29, 22];

//Ou

//$lista de Idades = array(18, 21, 28, 32, 29,22);

//aula: 
$primeiraIdade = $listaDeIdades[0];

echo "$primeiraIdade";

//métodos de adicionar informações às arrays:
$listaDeIdades[7] = 40;

$listaDeIdades[count($listaDeIdades)] = 16;

$listaDeIdades[] = 31;

foreach ($listaDeIdades as $idade) {
    echo $idade . PHP_EOL;
}