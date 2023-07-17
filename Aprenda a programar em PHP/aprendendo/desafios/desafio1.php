<?php 
    //Minha solução para o desafio 1:

    $index = 1;

    while($index < 100) {
        if(impar($index)) {
            echo "$index" . PHP_EOL;
        }

        $index++;
    }

    function impar($param) {
        $rest = $param % 2;

        return ($rest == 0) ? false : true;
    };