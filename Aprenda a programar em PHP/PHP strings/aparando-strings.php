<?php 

    $csv = ".,Eullerson Soares,23,. ";

    //A função trim() remove "das pontas" de uma string alguns elementos por padrão, mas podemos passar parâmetros. Exemplo:
    
    echo trim($csv, "., ") . PHP_EOL;
    //output: Eullerson Soares,23

    //Podemos aparar apenas no início:
    echo ltrim($csv, "., ") . PHP_EOL;

    //No fim também:
    echo rtrim($csv, "., ") . PHP_EOL;