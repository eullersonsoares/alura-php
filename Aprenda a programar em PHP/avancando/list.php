<?php 

    $idade = [10, 12, 15, 24, 38];

    //O list atribui à diversas variáveis, os valores de um array;

    list($idade1, $idade2, , $idade4) = $idade;

    echo <<<LABEL
        Idade 1 = $idade1
        Idade 2 = $idade2
        Idade 4 = $idade4 \n
    LABEL;

    // Desta forma, vamos exibir: 10, 12 e 24. Pulamos o terceiro valor com uma ",".
    //veja como utilizamos um exemplo mais complexo utilizando array associativo no arquivo "banco.php"