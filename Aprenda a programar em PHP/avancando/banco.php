<?php

//include "funcoes.php";
//or
require "funcoes.php";

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
    ],
    12345678913 => [
        "titular" => "Fulano",
        "saldo" => 10
    ], 
];

$contasCorrentes[12345678910] = depositar($contasCorrentes[12345678910], 5000);
$contasCorrentes[12345678910] = sacar($contasCorrentes[12345678910], 3000);

/* A função abaixo passa uma cópia do valor que está em $contasCorrentes[12345678911] por isso quando a função
tenta alterar o valor, o valor só é alterado dentro da função e não no array real. Para alterar o valor
no array real, é necessário inserir o "&" antes da variável do parâmentro na função.
*/
titularComLetrasMaiusculas($contasCorrentes[12345678911]);

//para remover um ítem do array/lista:
unset($contasCorrentes[12345678913]);

foreach($contasCorrentes as $cpf => $conta) {
    //Utilizando o list em array associativo:
    ["titular" => $titular, "saldo" => $saldo] = $conta;

    //posso utilizar a "sintaxe clássica":
    // list("titular" => $titular, "saldo" => $saldo) = $conta;

    //É possível exibir arrays associativos dentro de uma string sem aspas no índice (forma simples de exibição).
    /*
    exibeMensagem(
        "$cpf -> $conta[titular] | saldo -> $conta[saldo]"
    ); */

    /*Forma complexa:
    exibeMensagem(
        "$cpf -> $titular | saldo -> $saldo"
    );*/
};
?>

<!-- Primeira exibição de html com php -->

<html>
    <head>
        <title>HTML com php</title>
    </head>
    <body>

        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
            
            <dl>
                <dt>
                    <h3><?= $conta['titular'] . " - " . $cpf ?></h3>
                </dt>
                <dd>
                    Saldo: <?= $conta['saldo']?>
                </dd>
            </dl>

        <?php }?>

    </body>
</html>