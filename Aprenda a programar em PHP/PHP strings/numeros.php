<?php 

    $anoNascimento = '2000  '; //string numérica válida, mas com aviso.
    $anoNascimento = '   2001'; //string numérica válida, mas com aviso.
    $anoNascimento = '2 0 0 1'; //string numérica inválida.
    $anoNascimento = '2000'; //string numérica válida.
    
    $idade = 2023 - $anoNascimento;

    // echo $idade . PHP_EOL; 

    //Exemplo abaixo:

    function exibe_numero(int|float $number):void
    {   
        var_dump($number);
    };

    exibe_numero($anoNascimento);
