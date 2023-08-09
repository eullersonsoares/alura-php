<?php  

    $telefones = ['(24) 99999 - 0000', '(22) 99988 - 0000', '(22) 99977 - 0022'];

    //junta os elementos de um array em apenas uma string. O primeiro parâmetro define o separador dos valores.
    echo implode(',', $telefones) . PHP_EOL;