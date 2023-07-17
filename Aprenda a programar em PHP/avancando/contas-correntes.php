<?php

$conta1 = [
    "titular" => "Eullerson",
    "saldo" => 2000
];

$conta2 = [
    "titular" => "Pedro",
    "saldo" => 8000
];

$conta3 = [
    "titular" => "Paulo",
    "saldo" => 0
];

$contasCorrentes = [
    $conta1, 
    $conta2, 
    $conta3
];

//Exibindo com loops:

for($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]["titular"] . PHP_EOL;
}
