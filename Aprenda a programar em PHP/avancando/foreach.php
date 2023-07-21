<?php

$contasCorrentes = [
    12345678910 => [
        "titular" => "Eullerson",
        "saldo" => 2000
    ], 
    12345678911 => [
        "titular" => "Pedro",
        "saldo" => 8000
    ], 
    12345678912 => [
        "titular" => "Paulo",
        "saldo" => 0
    ]
];

$contasCorrentes[123546780913] = [
    "titular" => "Alisson",
    "saldo" => 2200
];

foreach($contasCorrentes as $cpf => $conta) {
    echo $cpf . " -> " . $conta['titular'] . PHP_EOL;
}