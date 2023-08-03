<?php 

    //tupla: pequeo conjunto de elementos que a posição deles pode significar algo.

    $dados = [
        'Zé', 10, 23
    ];

    //forma não muito utilizada:
    $nome = $dados[0];
    $nota = $dados[1];
    $idade = $dados[2];

    //melhor prática:
    [$nome, $nota, $idade] = $dados;

    var_dump($nome, $nota, $idade);