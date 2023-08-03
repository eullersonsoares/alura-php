<?php 
    $alunos = [
        "Tião",
        "Beltrano",
        "Neto",
        "Zé"
    ];

    array_push($alunos, "Luiz", "Maria"); //adiciona os nomes no fim do array como também "$array[] = 'valor'"

    array_unshift($alunos, "Suiane"); //adiciona suiane no 1º índice do array;

    $rmFirst = array_shift($alunos);//move para esquerda removendo a "Suiane" e retorna "Suiane";

    $rmLast = array_pop($alunos); //remove o último elemento e retorna ele para a variável

    var_dump($alunos);

    echo "$rmFirst foi removido(a)" . PHP_EOL;

    echo "$rmLast foi removido(a)" . PHP_EOL;
